<?php
/*
    Template name: primaria-avanzada
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner-primaria-avanzada.jpg);">
    <div class="contenedor">
        <h1>Primaria Avanzada</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > <a href="<?php echo esc_url(home_url('/')).'formacion' ?>">Formación</a> > <a href="<?php echo esc_url(home_url('/')).'primaria' ?>">Primaria</a> > Primaria Avanzada</p>
    </div>
</section>

<section class="contenido_escalonado p-relative primaria">
    <img src="<?php echo IMG;?>/iconos/avion-rosa.svg" class="bg_icon plane">
    <div class="contenedor">
        <div class="row">
            <div class="col padding-r">
                <picture>
                    <img src="<?php echo IMG ?>/img-primaria-avanzada.png">
                </picture>
            </div>
            <div class="col">
                <h2>Primaria Avanzada</h2>
                <p>Promovemos en nuestros estudiantes las destrezas académicas, autoconfianza, perseverancia, normas de convivencia, la adquisición de habilidades para la comprensión y aceptación de las diferentes culturas, desarrollo de competencias comunicativas, matemáticas y tecnológicas. Asimismo, generamos actividades relacionadas con la lectura y la escritura, desafíos matemáticos, arte y cultura, el manejo del idioma inglés y alemán y el uso de las TIC y la comunicación.</p>
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
                <img class="formacion-fotos__imgitem" src="<?php echo IMG ?>/primaria-avanzada-descripcion-1.png" alt="">
                <img class="formacion-fotos__imgitem" src="<?php echo IMG ?>/primaria-avanzada-descripcion-2.png" alt="">
                <img class="formacion-fotos__imgitem" src="<?php echo IMG ?>/primaria-avanzada-descripcion-3.png" alt="">
            </div>
        </div>
    </div>
</section>


<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>