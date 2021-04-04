
$('.carousel-3d-autoplay-off').mdbCarousel3d({
    autoplay: false
  });

document.addEventListener('DOMContentLoaded', ()=>{
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarousel, {
        duration: 150
    });
});

$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  
    for (var i=0;i<4;i++) {
      next=next.next();
      if (!next.length) {
        next=$(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
    }
  });

