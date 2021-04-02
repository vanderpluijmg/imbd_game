$(document).ready(function(){
    console.log('hl');
    var interval = window.setInterval(rotateSlides, 3000)
    function rotateSlides (){
        var $firstSlide = $('#photoGallery').find('div:first');
        var width = $firstSlide.width();
        $firstSlide.animate({marginLeft: -width}, 1000, function(){
            var $lastSlide = $('#photoGallery').find('div:last')
            $lastSlide.after($firstSlide);
            $firstSlide.css({marginLeft: 0})
          })
    }
})