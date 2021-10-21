$('.destination-owl').owlCarousel({
    loop:true,
    margin:30,
    dots:false,
    responsiveClass:true,
    navText: ["<img src='../image/arrow-left.png'style='transform: rotate(180deg);'>","<img src='../image/arrow-left.png'>"],
    navRewind:false,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})
$('.ul-attractive-tour').owlCarousel({
    loop:true,
    margin:30,
    dots:false,
    // stagePadding: 40,
    responsiveClass:true,
    navText: ["<img src='../image/arrow-left.png'style='transform: rotate(180deg);'>","<img src='../image/arrow-left.png'>"],
    navRewind:false,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        // 800:{
        //     items:2,
        //     nav:false
        // },
        1000:{
            items:3,
            nav:true,
            loop:false
        },
       
    }
})