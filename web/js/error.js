function popupErrors(container) {
    var src = $('form', container),
        dst = $('.popup', container);

  dst.append($('.error', src));
}

popupErrors($(document));