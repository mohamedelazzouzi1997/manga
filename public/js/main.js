setInterval(() => {
    let next = $('.glider-next');
    next.click();
}, 3000);
new Glider(document.querySelector('.glider'), {
    slidesToShow: 5, //'auto',
    slidesToScroll: 5,
    draggable: true,
    itemWidth: 198,
    scrollLock: false,
    duration: 3,
    dots: '#dots',
    rewind: true,
    arrows: {
        prev: '.glider-prev',
        next: '.glider-next'
    },
    responsive: [{
            breakpoint: 800,
            settings: {
                slidesToScroll: 1,

                slidesToShow: 5,
                exactWidth: true
            }
        },
        {
            breakpoint: 700,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 5,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 3

            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToScroll: 2,
                slidesToShow: 2,
            }
        }
    ]
});