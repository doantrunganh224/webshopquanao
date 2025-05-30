new Swiper('.homepage-product__slider', {
    spaceBetween: 30,
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',

      clickable: true,
      dynamicBullets: true
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 4
        },
        1440: {
            slidesPerView: 5
        }
    }
  });
// var swiper = new Swiper('.homepage-product__slider', {
//         slidesPerView: 1,
//         spaceBetween: 10,
//         navigation: {
//             nextEl: '.swiper-button-next',
//             prevEl: '.swiper-button-prev',
//         },
//         pagination: {
//             el: '.swiper-pagination',
//             clickable: true,
//         },
//         breakpoints: {
//             640: {
//                 slidesPerView: 2,
//                 spaceBetween: 20,
//             },
//             768: {
//                 slidesPerView: 3,
//                 spaceBetween: 30,
//             },
//             1024: {
//                 slidesPerView: 4,
//                 spaceBetween: 40,
//             },
//         }
//     });