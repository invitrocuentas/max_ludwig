<?php
/*
    Template name: primaria
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner_primaria.jpg)">
    <div class="contenedor">
        <h1>Primaria</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > <a href="<?php echo esc_url(home_url('/')).'formacion' ?>">Formación</a> > Primaria</p>
    </div>
</section>

<section class="contenido_escalonado p-relative primaria">
    <img src="<?php echo IMG;?>/iconos/avion-rosa.svg" class="bg_icon plane">
    <div class="contenedor">
        <div class="row">
            <div class="col padding-r">
                <picture>
                    <img src="<?php echo IMG ?>/img-primaria-1.png">
                </picture>
            </div>
            <div class="col">
                <h2>Primaria</h2>
                <p>Trabajamos el aprendizaje de la expresión y comprensión oral y escrita, la lectura y el cálculo, así como en la adquisición de habilidades lógico-matemáticas, fomentando hábitos de convivencia y trabajo en equipo.</p>
                <!-- <a href="#">Ver más</a> -->
            </div>
        </div>
    </div>
</section>
<section style="background-image: url('<?php echo IMG ?>/banner_primaria-2.png');" class="category-section">
    <div class="category-section__content">
        <div class="category-section__item">
            <div class="category-section__image-container">
                <img src="<?php echo IMG ?>/primaria-card-1.png" alt="">
                <div class="category-section__icon-container">
                    <img  src="<?php echo IMG ?>/reloj_icon.svg" class="category-section__icon" alt="">
                </div>
            </div>
            <div class="category-section__data">
                <h3 class="category-section__data-title">Primaria Formativa</h3>
                <p class="category-section__data-description">Garantizamos en nuestros estudiantes una formación basada en la expresión, comprensión oral...</p>
            </div>
            <a href="<?php echo esc_url(home_url('/')) ?>primaria-formativa" class="category-section__data-btn">Ver más</a>
        </div>
        <div class="category-section__item">
            <div class="category-section__image-container">
                <img src="<?php echo IMG ?>/primaria-card-2.png" alt="">
                <div class="category-section__icon-container">
                    <img src="<?php echo IMG ?>/copa_icon.svg" class="category-section__icon" alt="">
                </div>
            </div>
            <div class="category-section__data">
                <h3 class="category-section__data-title">Primaria Avanzada</h3>
                <p class="category-section__data-description">Promovemos en nuestros estudiantes las destrezas académicas, autoconfianza, perseverancia,...</p>
            </div>
            <a href="<?php echo esc_url(home_url('/')) ?>primaria-avanzada" class="category-section__data-btn">Ver más</a>
        </div>
    </div>
</section>


<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>