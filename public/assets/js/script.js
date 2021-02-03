$(document).ready(function () {
    $('.primary-word-sub').on('mouseenter', function () {
        $(this).addClass("primary-word-sub--active")
            .delay(3500).queue(function (nxt) {
                $(this).removeClass('primary-word-sub--active');
                nxt();
            });
    })
}) 

// const images = document.querySelectorAll("[data-src]");

// function preloadImage(img) {
//     const src = img.getAttribute("data-src");
//     if (!src) {
//         return; 
//     }

//     img.src = src;
// }

// const imgOptions = {
//     threshold: 1,
// };

// const imgObserver = new IntersectionObserver((entries, imgObserver) => {
//     entries.forEach(entry => {
//         if (!entry.isIntersecting) {
//             return
//         } else {
//             preloadImage(entry.target);
//             imgObserver.unobserve(entry.target);
//         }
//     })
// }, imgOptions);

// images.forEach(image => {
//     imgObserver.observe(image);
// }); 