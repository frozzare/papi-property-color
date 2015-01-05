(function ($) {

  /**
   * Initalize the color picker on each element.
   */

  $('.papi-color-picker').each(function (i, el) {
    var $el = $(el);

    $el.wpColorPicker({
      color: true,
      palettes: $el.data('palettes') === undefined ? false : $el.data('palettes')
    });
  });

})(jQuery);
