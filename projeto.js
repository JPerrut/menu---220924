// HEADER > BEGINNING

const btnMenu = document.querySelector('.menu-button');
const menu = document.getElementById('menu');
const iconDL = document.getElementById('mode-icon')
const html = document.documentElement


    // BUTTON MENU > BEGINNING

btnMenu.addEventListener('click', function(e) {
    this.classList.toggle('active');
    menu.classList.toggle('show');
    e.stopPropagation();
});

    // BUTTON MENU > END


    // DARK AND WHITE MODE > BEGINNING

iconDL.addEventListener('click', function() {
    html.classList.toggle("light")
    
    if (iconDL.classList.contains('fa-moon')) {
        iconDL.classList.remove('fa-moon');
        iconDL.classList.add('fa-sun');
    }
    else {
        iconDL.classList.remove('fa-sun');
        iconDL.classList.add('fa-moon');
    }
});

    // DARK AND WHITE MODE > END


    // CLOSE THE MENU IF YOU CLICK OUTSIDE > BEGINNING

document.addEventListener('click', function(e) {
        const clickMenu = menu.contains(e.target);
        const clickButton = btnMenu.contains(e.target);

        if (!clickMenu && !clickButton) {
            menu.classList.remove('show');
            btnMenu.classList.remove('active')
        }
});

    // CLOSE THE MENU IF YOU CLICK OUTSIDE > END

    // CHECK THE SCREEN SIZE AND TOGGLE THE MENU > BEGINNING

window.addEventListener('resize', function() {
    if (this.window.innerWidth > 768) {
        menu.classList.remove('show');
        btnMenu.classList.remove('active')
    }
})

    // CHECK THE SCREEN SIZE AND TOGGLE THE MENU > END  

// HEADER > END

// SECTION > TWO > BEGINNING

    // SLIDESHOW > BEGINNING

$(function() {
    // Função anônima para o código só executar após todo o documento carregar.
    
    var direction_Slide = 0, slides = $('.chamada-single'), autoResumeDelay;
    // autoResumeDelay: armazena o ID do temporizador de retomar a troca automática.

    function initSlider() {
    // inicializa o slideshow.

        slides.hide().eq(direction_Slide).show(); 
        // Exibe o primeiro slide e esconde os outros.
    }

    function changeSlide() {
    // inicia a troca automatica de slides.

        autoChangeInterval = setInterval(() => navigateSlide('next'), delay = 10000);
        // usa o setInterval para chamar a função navigatslide a cada 3 segundos usando a direção next.
    }

    function navigateSlide(direction) {
    // controla a navegação entre os slides se next ou prev.

        slides.eq(direction_Slide).fadeOut(200);
        // faz o slide desaparecer gradualmente em 200ms.

        direction_Slide = (direction_Slide + (direction === 'next' ? 1 : -1) + slides.length) % slides.length;
        // Se direction for exatamente igual a next, incrementa direction_Slide em 1, caso contrario decrementa em 1.
        // % garante que o indice circulará dentro do seu número minimo e máximo.
        // slides.length garante que o valor nunca seja negativo.

        slides.eq(direction_Slide).fadeIn(200);
        // faz o slide aparecer gradualmente em 200ms
    }

    function resetAndResumeAutoChange() {
        // Pausa a troca automática e reinicia após um atraso.

        clearInterval(autoChangeInterval); 
        // Para a troca automática.

        clearTimeout(autoResumeDelay); 
        // Limpa o temporizador anterior.

        autoResumeDelay = setTimeout(changeSlide, 2000); 
        // Aguarda 2 segundos para retomar a troca automática.

    }

    initSlider(); changeSlide();

    $('.next').on('click', () => {navigateSlide('next'); resetAndResumeAutoChange(); });
    // chama a função resetAndResumeAutoChange e passa para o próximo slide

    $('.prev').on('click', () => {navigateSlide('prev'); resetAndResumeAutoChange(); });
    // chama a função resetAndResumeAutoChange e volta para o slide anterior

}); //function() > END

    // SLIDESHOW > END

// SECTION > TWO > END