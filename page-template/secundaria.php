<?php
/*
    Template name: secundaria
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner-secundaria.jpg)">
    <div class="contenedor">
        <h1>Secundaria</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > <a href="<?php echo esc_url(home_url('/')).'formacion' ?>">Formación</a> > Secundaria</p>
    </div>
</section>

<section class="contenido_escalonado p-relative primaria">
    <img src="<?php echo IMG;?>/iconos/avion-rosa.svg" class="bg_icon plane">
    <div class="contenedor">
        <div class="row">
            <div class="col padding-r">
                <picture>
                    <img src="<?php echo IMG ?>/img-secundaria-1.png">
                </picture>
            </div>
            <div class="col">
                <h2>Secundaria</h2>
                <p>Potenciamos y reforzamos los conocimientos y habilidades necesarias para vivir y desenvolverse libremente en un mundo globalizado, brindándoles las herramientas necesarias para iniciar eficientemente la vida universitaria.</p>
                <!-- <a href="#">Ver más</a> -->
            </div>
        </div>
    </div>
</section>
<section style="background-image: url('<?php echo IMG ?>/banner-secundaria-2.png')" class="category-section">
    <div class="category-section__content">
        <div class="category-section__item">
            <div class="category-section__image-container">
                <img style="border-radius: 50%; height: 100%; width: 250px;" src="<?php echo IMG ?>/secundaria-card-1.png" alt="">
                <div class="category-section__icon-container">
                    <img class="category-section__icon" src="<?php echo IMG ?>/iconos/libros_white.svg" alt="">
                </div>
            </div>
            <div class="category-section__data">
                <h3 class="category-section__data-title">Secundaria Avanzada</h3>
                <p class="category-section__data-description">Desarrollamos actividades orientadas al crecimiento y profundización de conocimientos y...</p>
            </div>
            <a href="<?php echo esc_url(home_url('/')) ?>/secundaria-avanzada" class="category-section__data-btn">Ver más</a>
        </div>
        <div class="category-section__item">
            <div class="category-section__image-container">
                <img style="border-radius: 50%; height: 100%; width: 250px;" src="<?php echo IMG ?>/secundaria-card-2.png" alt="">
                <div class="category-section__icon-container">
                    <img class="category-section__icon" src="<?php echo IMG ?>/iconos/birrete_white.svg" alt="">
                </div>
            </div>
            <div class="category-section__data">
                <h3 class="category-section__data-title">Preuniversitaria</h3>
                <p class="category-section__data-description">Consolidamos la formación general e integral de los estudiantes, desarrollando una rigurosa etapa de...</p>
            </div>
            <a href="<?php echo esc_url(home_url('/')) ?>/secundaria-preuniversitaria" class="category-section__data-btn">Ver más</a>
        </div>
    </div>
</section>


<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>