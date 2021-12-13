const dropdown = document.getElementsByClassName('ptext');

for (i = 0; i < dropdown.length; i++) {

  dropdown[i].addEventListener('click', function () {

    this.classList.toggle('active');

  });

}

const tPocung = document.getElementById('pPocung').innerText;
const tPocung1 = document.getElementById('pPocung1').innerText;
const tPocung2 = document.getElementById('pPocung2').innerText;
const tPocung3 = document.getElementById('pPocung3').innerText;
const tPocung4 = document.getElementById('pPocung4').innerText;

var hasilP = tPocung.charAt(0).toUpperCase() + tPocung.slice(1)
document.getElementById('pPocung').innerText = hasilP;
var hasilP1 = tPocung1.charAt(0).toUpperCase() + tPocung1.slice(1)
document.getElementById('pPocung1').innerText = hasilP1;
var hasilP2 = tPocung2.charAt(0).toUpperCase() + tPocung2.slice(1)
document.getElementById('pPocung2').innerText = hasilP2;
var hasilP3 = tPocung3.charAt(0).toUpperCase() + tPocung3.slice(1)
document.getElementById('pPocung3').innerText = hasilP3;
var hasilP4 = tPocung3.charAt(0).toUpperCase() + tPocung4.slice(1)
document.getElementById('pPocung4').innerText = hasilP4;

// gambuh
const gambuh = document.getElementById('pGambuh').innerText;
const gambuh1 = document.getElementById('pGambuh1').innerText;
const gambuh2 = document.getElementById('pGambuh2').innerText;
const gambuh3 = document.getElementById('pGambuh3').innerText;
const gambuh4 = document.getElementById('pGambuh4').innerText;
const gambuh5 = document.getElementById('pGambuh5').innerText;

var hasilG = gambuh.charAt(0).toUpperCase() + gambuh.slice(1)
document.getElementById('pGambuh').innerText = hasilG;
var hasilG1 = gambuh1.charAt(0).toUpperCase() + gambuh1.slice(1)
document.getElementById('pGambuh1').innerText = hasilG1;
var hasilG2 = gambuh2.charAt(0).toUpperCase() + gambuh2.slice(1)
document.getElementById('pGambuh2').innerText = hasilG2;
var hasilG3 = gambuh3.charAt(0).toUpperCase() + gambuh3.slice(1)
document.getElementById('pGambuh3').innerText = hasilG3;
var hasilG4 = gambuh4.charAt(0).toUpperCase() + gambuh4.slice(1)
document.getElementById('pGambuh4').innerText = hasilG4;
var hasilG5 = gambuh5.charAt(0).toUpperCase() + gambuh5.slice(1)
document.getElementById('pGambuh5').innerText = hasilG5;


// function capitalizeFirstLetter(string) {
//   return string.charAt(0).toUpperCase() + string.slice(1);
// }
// console.log(capitalizeFirstLetter(tPocung));
// $(document).ready(function(){
//   $('.menuRequest1').click(function(){
//     $('.menuRequest1').addClass('active');
//     $('.menuRequest2').removeClass('active');
//     $('.menuRequest3').removeClass('active');
//   });
  
//   $('.menuRequest2').click(function(){
//     $('.menuRequest1').removeClass('active');
//     $('.menuRequest2').addClass('active');
//     $('.menuRequest3').removeClass('active');
//   });
  
//   $('.menuRequest3').click(function(){
//     $('.menuRequest1').removeClass('active');
//     $('.menuRequest2').removeClass('active');
//     $('.menuRequest3').addClass('active');
//   })
// })