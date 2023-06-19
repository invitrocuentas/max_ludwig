(function(){

    if(document.querySelector('#splide_main')){
        new Splide('#splide_main', {
            type: 'slide',
            perPage: 1,
            perMove: 1,
            arrows: false,
            pagination: false,
            rewind: true
        }).mount();
    }

    if(document.querySelector('#splide_niveles')){
        new Splide('#splide_niveles', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            breakpoints: {
                640: {
                    perPage: 1,
                    perMove: 1,
                    arrows: false,
                },
                778: {
                    perPage: 2,
                    perMove: 1,
                    arrows: false,
                }
            },
            arrows: true,
            gap: '2rem',
            pagination: false,
            rewind: true
        }).mount();
    }

})();