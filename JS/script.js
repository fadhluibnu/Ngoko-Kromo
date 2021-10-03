const dropdown = document.getElementsByClassName('ptext');

for (i = 0; i < dropdown.length; i++) {

  dropdown[i].addEventListener('click', function () {

    this.classList.toggle('active');

  });

}

$(document).ready(function(){
  $('.menuRequest1').click(function(){
    $('.menuRequest1').addClass('active');
    $('.menuRequest2').removeClass('active');
    $('.menuRequest3').removeClass('active');
  });
  
  $('.menuRequest2').click(function(){
    $('.menuRequest1').removeClass('active');
    $('.menuRequest2').addClass('active');
    $('.menuRequest3').removeClass('active');
  });
  
  $('.menuRequest3').click(function(){
    $('.menuRequest1').removeClass('active');
    $('.menuRequest2').removeClass('active');
    $('.menuRequest3').addClass('active');
  })
})