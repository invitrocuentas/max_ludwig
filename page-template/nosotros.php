<?php
/*
    Template name: nosotros
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG ?>/banner-nosotros.jpg)">
    <div class="contenedor">
        <h1>Nosotros</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > Nosotros</p>
    </div>
</section>

<section class="contenido_escalonado p-relative primaria">
    <img src="<?php echo IMG; ?>/iconos/avion-rosa.svg" class="bg_icon plane" style="top: 80%">
    <div class="contenedor">
        <div class="row">
            <div class="col padding-r">
                <picture>
                    <img src="<?php echo IMG ?>/img-nosotros.png">
                </picture>
            </div>
            <div class="col">
                <h2>Historia</h2>
                <p>
                    El Colegio Max Ludwig Planck fue fundado en 2003 por el educador peruano Víctor Castro Vidal, inspirado en un modelo innovador denominado “Totalidad Educativa”, en el que respetamos la normatividad vigente, nuestro valor agregado y tomando en cuenta un contexto competitivo tiene como objetivo ofrecer a nuestros alumnos un plan de estudios de alta calidad, buen nivel de exigencia y formación en valores.
                    <br> Desde su fundación, nuestro colegio ha desarrollado sus fortalezas y se ha consolidado como una institución educativa de Excelencia Académica y reconocimiento a nivel nacional e internacional. Estamos muy orgullosos de haber cumplido y celebrado 20 años de éxito con excelentes resultados año tras año y seguimos adelante con valentía y tesón ante los desafíos de la educación y muy comprometidos en continuar formando e instruyendo a más legiones de estudiantes ahora grandes y exitosos profesionales en nuestro país y en el extranjero.
                </p>
                <!-- <a href="#">Ver más</a> -->
            </div>
        </div>
    </div>
</section>

<section class="pilares" style="clip-path: none;">
    <div class="contenedor">
        <h2 class="up">Pilares</h2>
        <div class="stair">
            <div class="step">
                <div class="step_image" style="padding: 0; background: transparent; border-radius: none; box-shadow: none;">
                    <img style="max-width: 100%;" src="<?php echo IMG?>/img-nosotros-1.svg">
                </div>
                <div class="step_name">
                    <p>Enseñanza</p>
                </div>
            </div>
            <div class="step">
                <div class="step_image" style="padding: 0; background: transparent; border-radius: none; box-shadow: none;">
                    <img style="max-width: 100%" src="<?php echo IMG?>/img-nosotros-2.svg">
                </div>
                <div class="step_name">
                    <p>Interacción</p>
                </div>
            </div>
            <div class="step">
                <div class="step_image" style="padding: 0; background: transparent; border-radius: none; box-shadow: none;">
                    <img style="max-width: 100%" src="<?php echo IMG?>/img-nosotros-3.svg">
                </div>
                <div class="step_name">
                    <p>Aprendizaje</p>
                </div>
            </div>
            <div class="step">
                <div class="step_image" style="padding: 0; background: transparent; border-radius: none; box-shadow: none;">
                    <img style="max-width: 100%" src="<?php echo IMG?>/img-nosotros-4.svg">
                </div>
                <div class="step_name">
                    <p>Desarrollo</p>
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


<?php get_template_part('inc/join_us'); ?>

<?php get_footer(); ?>