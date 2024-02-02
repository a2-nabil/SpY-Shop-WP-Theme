(function ($) {
  $(document).ready(function () {

    // Dynamic image for lightbox 
    $(".a2n_popup").each(function () {
      var image = $(this).find("img").attr("src");
      $(this).attr("href", image);
    }); 




  });
})(jQuery);
