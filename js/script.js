window.onload = function(){
  $('#new-products__details').multislider({
    interval: 4000,
    slideAll: true,
    duration: 1500
  });

 //slide
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slideshow__item");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
  

  //search
  var btn = document.querySelectorAll('.search i');
  var search_box = document.getElementsByClassName('search__box');

  btn[0].addEventListener('click', function(e){
    if(btn[0].is(e.target)){
      search_box[0].hide();
      btn[0].removeEventListener('click', function(){
        
      });
    }
  });
  
  
}






