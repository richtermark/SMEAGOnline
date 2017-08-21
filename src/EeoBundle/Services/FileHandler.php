<?php
/*
*  FILE HANDLING MODES SERVICES
*	@Author - Richtermark Baay
*	------------------------
*/
namespace EeoBundle\Services;

class FileHandler{

	//modes
    public function Open_ReadOnly($filename, $mode = "r"){
        return fopen($filename, $mode);
    }
    public function Open_Read_WritesToEnd($filename, $mode = "r+"){
        return fopen($filename, $mode);
    }
    public function Open_Write_ClearContent_CreateIfNotExist($filename, $mode = "w"){
        return fopen($filename, $mode);
    }
    public function Open_Write_ClearContent_CreateIfNotExist_plus($filename, $mode = "w+"){
        return fopen($filename, $mode);
    }
    public function Open_WritesToEnd_CreateIfNotExist($filename, $mode = "a"){
        return fopen($filename, $mode);
    }
    public function Open_Preserves_WritesToEnd($filename, $mode = "a+"){
        return fopen($filename, $mode);
    }
    //content management
    public function manageContent($open_file, $content_to_write){
        return fwrite($open_file, $content_to_write);
    }
    //close
    public function Close_file($open_file){
        return fclose($open_file);
    }
    public function delete_file($file){
        return unlink($file);
    }
} 