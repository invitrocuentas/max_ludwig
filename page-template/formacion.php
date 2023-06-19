<?php
/*
    Template name: formacion
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner_formacion.jpg)">
    <div class="contenedor">
        <h1>Formación</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > Filosofía MLP</p>
    </div>
</section>

<section class="contenido_escalonado p-relative page_formation">
    <img src="<?php echo IMG;?>/iconos/avion-rosa.svg" class="bg_icon plane">
    <img src="<?php echo IMG;?>/iconos/libros.svg" class="bg_icon books">
    <div class="contenedor">
        <div class="row">
            <div class="col padding-r">
                <picture>
                    <img src="<?php echo IMG ?>/img2.png">
                </picture>
            </div>
            <div class="col">
                <h2>Primaria</h2>
                <p>Trabajamos el aprendizaje de la expresión y comprensión oral y escrita, la lectura y el cálculo, así como en la adquisición de habilidades lógico-matemáticas, fomentando hábitos de convivencia y trabajo en equipo.</p>
                <a href="<?php echo esc_url(home_url('/')) ?>/primaria">Ver más</a>
            </div>
        </div>
        <div class="row">
            <div class="col padding-l">
                <picture>
                    <img src="<?php echo IMG ?>/img2.png">
                </picture>
            </div>
            <div class="col">
                <h2 style="color: #3D3D3D;">Secundaria</h2>
                <p style="color: #3D3D3D;">Potenciamos y reforzamos los conocimientos y habilidades necesarias para vivir y desenvolverse libremente en un mundo globalizado, brindándoles las herramientas necesarias para iniciar eficientemente la vida universitaria.</p>
                <a href="<?php echo esc_url(home_url('/')) ?>/secundaria">Ver más</a>
            </div>
        </div>
        <div class="row">
            <div class="col padding-r">
                <picture>
                    <img src="<?php echo IMG ?>/img2.png">
                </picture>
            </div>
            <div class="col">
                <h2>Actividades MLP</h2>
                <p>Desarrollamos actividades que favorezcan la formación integral de nuestros alumnos, a través de eventos deportivos, culturales y de integración</p>
                <a href="<?php echo esc_url(home_url('/')) ?>/actividades-mlp">Ver más</a>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>