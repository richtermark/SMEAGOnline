<?php

namespace Biz\Course\Copy;

use Codeages\Biz\Framework\Context\BizAware;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Codeages\Biz\Framework\Context\Biz;

abstract class AbstractEntityCopy extends BizAware
{
    private $logger;

    protected $children;

    protected $node;

    public function __construct(Biz $biz, $node)
    {
        $this->setBiz($biz);
        $this->node = $node;
        $chain = call_user_func($this->biz['course_copy.chains'], $node);
        if (!empty($chain) && !empty($chain['children'])) {
            $this->children = $chain['children'];
        } else {
            $this->children = array();
        }
    }

    /**
     * 当前copy实体的业务逻辑，注意：
     * 1. 不需要考虑事务
     * 2. 不需要考虑子实体的复制.
     *
     * @param mixed $source 要copy的对象
     * @param array $config
     *
     * @return mixed
     */
    abstract protected function _copy($source, $config = array());

    protected function childrenCopy($source, $config = array())
    {
        if (!empty($this->children)) {
            foreach ($this->children as $child) {
                /**
                 * @var AbstractEntityCopy
                 */
                $cls = new $child['clz']($this->biz, $this->node);
                $cls->copy($source, $config);
            }
        }
    }

    /**
     * copy链中的各环节在一个事务中.
     *
     * @param mixed $source 要copy的对象
     * @param mixed $parent copy链中已创建的直接父类对象
     * @param array $config 配置信息
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function copy($source, $config = array())
    {
        try {
            $this->biz['db']->beginTransaction();

            $result = $this->_copy($source, $config);

            $this->biz['db']->commit();

            return $result;
        } catch (\Exception $e) {
            $this->biz['db']->rollback();
            throw $e;
        }
    }

    protected function addError($logName, $message)
    {
        if (is_array($message)) {
            $message = json_encode($message);
        }
        $this->getLogger($logName)->error($message);
    }

    protected function addDebug($logName, $message)
    {
        if (is_array($message)) {
            $message = json_encode($message);
        }
        $this->getLogger($logName)->debug($message);
    }

    protected function getLogger($name)
    {
        if ($this->logger) {
            return $this->logger;
        }

        $this->logger = new Logger($name);
        $this->logger->pushHandler(new StreamHandler($this->biz['log_directory'].'/service.log', Logger::DEBUG));

        return $this->logger;
    }
}
