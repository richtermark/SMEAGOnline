import Chooser from './chooser';

class MaterialLibChoose extends Chooser {

  constructor($container) {
    super();
    this.container = $container;
    this.loadShareingContacts = false;
    this._init();
    this._initEvent();
  }

  _init() {
    this._loadList();
  }

  _initEvent() {
    $(this.container).on('click', '.js-material-type', this._switchFileSource.bind(this));
    $(this.container).on('change', '.js-file-owner', this._filterByFileOwner)
    $(this.container).on('click', '.js-browser-search', this._filterByFileName.bind(this));
    $(this.container).on('click', '.pagination a', this._paginationList.bind(this));
    $(this.container).on('click', '.file-browser-item', this._onSelectFile.bind(this));
    // $('.js-choose-trigger').on('click', this._open.bind(this))
  }

  _loadList() {
    let url = $('.js-browser-search').data('url');
    $.get(url, this._getParams(), html => {
      this.container.find('.js-material-list').html(html);
    });
  }

  _getParams() {
    let params = {};
    $('.js-material-lib-search-form input[type=hidden]').each(function(input) {
      params[$(this).attr('name')] = $(this).val();
    });
    return params;
  }

  _paginationList(event) {
    event.stopImmediatePropagation();
    event.preventDefault();

    let page = this._getUrlParameter($(event.currentTarget).attr('href'), 'page');
    $('input[name=page]').val(page);
    this._loadList();
  }

  _switchFileSource(event) {
    let that = event.currentTarget;
    var type = $(that).data('type');
    $(that).addClass('active').siblings().removeClass('active');
    $('input[name=sourceFrom]').val(type);
    $('input[name=page]').val(1);
    switch (type) {
      case 'my':
        $('.js-file-name-group').removeClass('hidden');
        $('.js-file-owner-group').addClass('hidden');
        break;
      case 'sharing':
        this._loadSharingContacts.call(this, $(that).data('sharingContactsUrl'));
        $('.js-file-name-group').removeClass('hidden');
        $('.js-file-owner-group').addClass('hidden');
        break;
      default:
        $('.js-file-name-group').removeClass('hidden');
        $('.js-file-owner-group').addClass('hidden');
        break;
    }
    this._loadList();
  }

  _loadSharingContacts(url) {
    if (this.loadShareingContacts == true) {
      console.error('teacher list has been loaded');
      return;
    }
    $.get(url, function(teachers) {
      if (Object.keys(teachers).length > 0) {
        var html = `<option value=''>${Translator.trans('请选择老师')}</option>`;
        $.each(teachers, function(i, teacher) {
          html += `<option value='${teacher.id}'>${teacher.nickname} </option>`
        });

        $(".js-file-owner", self.element).html(html);
      }

    }, 'json');
    this.loadShareingContacts = true;
  }


  _filterByFileName() {
    $('input[name=keyword]').val($('.js-file-name').val());
    this._loadList();
  }

  _filterByFileOwner() {
    params.currentUserId = $('.js-file-owner option:selected').val();
    $('input[name=currentUserId]').val(currentUserId);
    this._loadList();
  }

  _onSelectFile(event) {
    $('.file-browser-item').removeClass('active');
    var $that = $(event.currentTarget).addClass('active');
    var file = $that.data();
    $('[data-role="placeholder"]').html(file.name);
    this.emit('select', file);
  }

}

export default MaterialLibChoose;
