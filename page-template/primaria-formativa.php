<?php
/*
    Template name: primaria-formativa
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner-primaria-formativa.jpg); position: relative;">
    <div style="position: absolute; z-index: 0; height: 100%; width: 100%; top: 0; background: #2A344F 0% 0% no-repeat padding-box; mix-blend-mode: multiply;"></div>
    <div class="contenedor" style="z-index: 2;">
        <h1>Primaria Formativa</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > <a href="<?php echo esc_url(home_url('/')).'formacion' ?>">Formación</a> > <a href="<?php echo esc_url(home_url('/')).'primaria' ?>">Primaria</a> > Primaria Formativa</p>
    </div>
</section>

<section class="contenido_escalonado p-relative primaria">
    <img src="<?php echo IMG;?>/iconos/avion-rosa.svg" class="bg_icon plane">
    <div class="contenedor">
        <div class="row">
            <div class="col padding-r">
                <picture>
                    <img src="<?php echo IMG ?>/img-primaria-formativa.png">
                </picture>
            </div>
            <div class="col">
                <h2>Primaria Formativa</h2>
                <p>Garantizamos en nuestros estudiantes una formación basada en la expresión, comprensión oral y escrita, adquisición de habilidades lógico-matemáticas, hábitos de convivencia, hábitos de estudio y de trabajo e incentivamos la creatividad, la autonomía y el sentido artístico.</p>
                <!-- <a href="#">Ver más</a> -->
            </div>
        </div>
    </div>
</section>

<section class="formacion-fotos">
    <div class="formacion-fotos__bg"></div>
    <img class="formacion-fotos__icon" src="<?php echo IMG ?>/iconos/libros.svg" alt="Icono de un libro" />
    <div class="container xl">
        <div class="formacion-fotos__wrapper">
            <h2 class="formacion-fotos__title">¡Echa un vistazo a nuestras fotos!</h2>
            <div class="formacion-fotos__content">
                <img class="formacion-fotos__imgitem" src="<?php echo IMG ?>/img_descripcion-1.png" alt="">
                <img class="formacion-fotos__imgitem" src="<?php echo IMG ?>/img_descripcion-2.png" alt="">
                <img class="formacion-fotos__imgitem" src="<?php echo IMG ?>/img_descripcion-3.png" alt="">
            </div>
        </div>
    </div>
</section>


<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>