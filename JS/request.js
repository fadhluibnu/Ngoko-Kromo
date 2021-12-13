const kamus = document.getElementById('home-tab');
const pocung = document.getElementById('profile-tab');
const gambuh = document.getElementById('contact-tab');

kamus.addEventListener('click', function(){
    setTimeout(function(){
        window.location.href = "../request/requestKamus.php";
    }, 500);
});
pocung.addEventListener('click', function(){
    setTimeout(function(){
        window.location.href = "../request/requestPocung.php";
    }, 500);
});
gambuh.addEventListener('click', function(){
    setTimeout(function(){
        window.location.href = "../request/requestGambuh.php";
    }, 500);
});