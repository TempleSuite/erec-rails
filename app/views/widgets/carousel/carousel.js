$(document).ready(function() {
  $('.btn.carousel-button').on('click', function(e) {
    e.preventDefault();

    var nextImage = $('.carousel-indicators li:last-child').data("slide-to") + 1;

    $('.carousel-indicators').append('<li data-target="#myCarousel-2" data-slide-to="' + nextImage + '"></li>');

    $('.carousel-inner').append(' \
      <div class="item" data-slide-id=' + nextImage + '> \
        <img src="/img/superbox/superbox-full-7.jpg" alt="Dance"> \
        <div class="carousel-caption"> \
          <h4> \
            Dancing Hip Hop \
          </h4> \
          <br> \
        </div> \
      </div>'
    );
  });

  $('.carousel-delete').on('click', function(e) {
    e.preventDefault();

    var galleryElement = $($(this).attr('href')).find('.item.active');
    var slideId = galleryElement.data('slide-id');
    var indicatorElement = $('.carousel-indicators [data-slide-to=' + slideId + ']');

    // make next slide active
    galleryElement.next('.item').addClass('active');
    indicatorElement.next('li').addClass('active');

    // delete current slide
    indicatorElement.remove();
    galleryElement.remove();
  });

  //end carousel
});
