<?php
/*
    Template name: inicio
*/

get_header();
?>

<main <?php body_class(); ?>>
    <div class="splide wh-100" id="splide_main">
        <div class="splide__track wh-100">
            <ul class="splide__list wh-100">
                <li class="splide__slide wh-100 guinda">
                    <picture class="wh-100">
                        <img src="<?php echo IMG ?>/fondo1.jpg">
                    </picture>
                    <div class="contenedor xl">
                        <h1><b>Formando</b> a los <b>Futuros Líderes</b> del Mundo</h1>
                    </div>
                </li>
                <li class="splide__slide wh-100 azul">
                    <picture class="wh-100">
                        <img src="<?php echo IMG ?>/fondo2.jpg">
                    </picture>
                    <div class="contenedor xl">
                        <h1><b>Formando</b> a los <b>Futuros Líderes</b> del Mundo</h1>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</main>

<section class="niveles">
    <div class="contenedor">
        <h2>Niveles</h2>
        <div class="splide" id="splide_niveles">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card_nivel">
                            <div class="card_nivel_head">
                                <img src="<?php echo IMG; ?>/primaria.png">
                                <div class="card_nivel_icon">
                                    <img src="<?php echo IMG; ?>/icon.svg">
                                </div>
                            </div>
                            <div class="card_nivel_body">
                                <h3>Primaria Formativa</h3>
                                <p>Garantizamos en nuestros estudiantes una formación basada en la expresión, comprensión oral y...</p>
                            </div>
                            <a href="#" class="card_nivel_enlace">Ver más</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="pilares">
    <div class="contenedor">
        <h2 class="up">Pilares</h2>
        <div class="stair">
            <div class="step">
                <div class="step_image">
                    <img src="<?php echo IMG; ?>/hand.jpg">
                </div>
                <div class="step_name">
                    <p>Enseñanza</p>
                </div>
            </div>
            <div class="step">
                <div class="step_image">
                    <img src="<?php echo IMG; ?>/hand.jpg">
                </div>
                <div class="step_name">
                    <p>Enseñanza</p>
                </div>
            </div>
            <div class="step">
                <div class="step_image">
                    <img src="<?php echo IMG; ?>/hand.jpg">
                </div>
                <div class="step_name">
                    <p>Enseñanza</p>
                </div>
            </div>
            <div class="step">
                <div class="step_image">
                    <img src="<?php echo IMG; ?>/hand.jpg">
                </div>
                <div class="step_name">
                    <p>Enseñanza</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="experience">
    <img class="experience__question-img" src="<?php echo IMG?>/iconos/exclamacion.svg" alt="">
    <img class="experience__book-img" src="<?php echo IMG?>/iconos/libros.svg" alt="">
    <div class="experience__content">
        <span class="experience__title">Datos que respaldan nuestro compromiso con la formación de estudiantes de excelencia.</span>
        <div class="experience__year-container">
            <div class="experience__year-item">
                <span class="experience__number">+10</span>
                <p class="experience__description">Años de experiencia</p>
            </div>
            <div class="experience__year-item">
                <span class="experience__number">+5000</span>
                <p class="experience__description">Alumnos Maxplancistas</p>
            </div>
            <div class="experience__year-item">
                <span class="experience__number">100%</span>
                <p class="experience__description">Porcentaje de alumnos ingresantes a una Universidad.</p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>