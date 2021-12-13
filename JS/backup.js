// obejek
const pengecekan = {
    kCek : null,
    pCek : null,
    gCek : null,
};

// tab atas
const kamusLink = document.getElementById("home-tab");
const pocunglink = document.getElementById("profile-tab");
const gambuhlink = document.getElementById("contact-tab");

// container
const conKamus = document.getElementById("home");
const conPocung = document.getElementById("profile");
const conGambuh = document.getElementById("contact");

// inputan
const kamus = document.getElementById("ngoko");
const pocung = document.getElementById("pSatu"); 
const gambuh = document.getElementById("gSatu");

// kamus
kamus.addEventListener('input', function(){
    const pocung = document.getElementById('dPocung');
    pocung.textContent = '';
    pengecekan.kCek = true;

    // redirect pocung
    pocunglink.addEventListener('click', function(){
        if(pengecekan.kCek == true){
            // window.location.reload();
            // kamus remove active
            kamusLink.classList.remove("active");
            conKamus.classList.remove("active");
            conKamus.classList.remove("show");

            // pocung add avtive
            pocunglink.classList.add("active");
            conPocung.classList.add("active");
            conPocung.classList.add("show");
        };
    });

    // redirect gambuh
    gambuhlink.addEventListener('click', function(){
        if(pengecekan.kCek == true){
            // window.location.reload();
            // kamus remove active
            kamusLink.classList.remove("active");
            conKamus.classList.remove("active");
            conKamus.classList.remove("show");

            // pocung add avtive
            gambuhlink.classList.add("active");
            conGambuh.classList.add("active");
            conGambuh.classList.add("show");
        };
    })
});



// pocung



// $(document).ready(function(){
    // while(kamus.addEventListener('input')){
        // $(".kamusLink").click(function(){
            // alert('Loading')
        // })
    // }
    // $(".kamuslink").click(function(){
    //     location.reload();
    // });
    // $(".pocunglink").click(function(){
    //     location.reload();
    // });
    // $(".gambuhlink").click(function(){
    //     location.reload();
    // });
// });
// obejek
const pengecekan = {
    kCek : null,
    pCek : null,
    gCek : null,
};
// tab atas
const kamusLink = document.getElementById("home-tab");
const pocunglink = document.getElementById("profile-tab");
const gambuhlink = document.getElementById("contact-tab");
// form
const form = {
    kamus : document.getElementById('dKamus'),
    pocung : document.getElementById('dPocung'),
    gambuh : document.getElementById('dGambuh'),
}

// kamus
form.kamus.addEventListener('input', function(){
    // remove form pocung
    form.pocung.textContent = '';
    $(".sPocung").addClass('d-flex');
    $(".sPocung").removeClass('d-none');
    // remove form gambuh
    form.gambuh.textContent = '';
    $(".sGambuh").addClass('d-flex');
    $(".sGambuh").removeClass('d-none');
    // rewrite objek
    pengecekan.kCek = true;
    // redirect pocung
    pocunglink.addEventListener('click', function(){
        if(pengecekan.kCek == true){
            window.location.href = "../request/requestPocung.php";
        };
    });
    // redirect gambuh
    gambuhlink.addEventListener('click', function(){
        if(pengecekan.kCek == true){
            window.location.href = "../request/requestGambuh.php";
        };
    })
});

// pocung
form.pocung.addEventListener('input', function(){
    // remove form pocung
    form.kamus.textContent = '';
    $(".sKamus").addClass('d-flex');
    $(".sKamus").removeClass('d-none');
    // remove form gambuh
    form.gambuh.textContent = '';
    $(".sGambuh").addClass('d-flex');
    $(".sGambuh").removeClass('d-none');
    // rewrite objek
    pengecekan.pCek = true;
    // redirect kamus
    kamusLink.addEventListener('click', function(){
        if(pengecekan.pCek == true){
            window.location.href = "../request/requestKamus.php";
        };
    });
    // redirect gambuh
    gambuhlink.addEventListener('click', function(){
        if(pengecekan.pCek == true){
            window.location.href = "../request/requestGambuh.php";
        };
    })
})

// gambuh
form.gambuh.addEventListener('input', function(){
    // remove form pocung
    form.kamus.textContent = '';
    $(".sKamus").addClass('d-flex');
    $(".sKamus").removeClass('d-none');
    // remove form gambuh
    form.pocung.textContent = '';
    $(".sPocung").addClass('d-flex');
    $(".sPocung").removeClass('d-none');
    // rewrite objek
    pengecekan.gCek = true;
    // redirect kamus
    kamusLink.addEventListener('click', function(){
        if(pengecekan.gCek == true){
            window.location.href = "../request/requestKamus.php";
        };
    });
    // redirect pocung
    pocunglink.addEventListener('click', function(){
        if(pengecekan.gCek == true){
            window.location.href = "../request/requestPocung.php";
        };
    })
})