<?php
/*
    Template name: instalaciones
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner_instalaciones.jpg)">
    <div class="contenedor">
        <h1>Instalaciones</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > Instalaciones</p>
    </div>
</section>

<section class="galeria_masonry p-relative">
    <img src="<?php echo IMG; ?>/iconos/oleos-azul.svg" class="bg_icon oleos">
    <div class="contenedor">
        <h2>Galería</h2>
        <div class="row">
            <div class="item">
                <img src="<?php echo IMG; ?>/instalaciones/6.png">
            </div>
            <div class="item">
                <img src="<?php echo IMG; ?>/instalaciones/3.png">
            </div>
            <div class="item">
                <img src="<?php echo IMG; ?>/instalaciones/1.png">
            </div>
            <div class="item">
                <img src="<?php echo IMG; ?>/instalaciones/2.png">
            </div>
            <div class="item">
                <img src="<?php echo IMG; ?>/instalaciones/5.png">
            </div>
            <div class="item">
                <img src="<?php echo IMG; ?>/instalaciones/4.png">
            </div>
        </div>

        <div class="video">
            <video src="">
                <source>
            </video>
        </div>
    </div>
</section>

<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>