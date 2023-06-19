<?php
/*
    Template name: convenios
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner-convenio.jpg)">
    <div class="contenedor">
        <h1>Convenios</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > Convenios</p>
    </div>
</section>

<div class="p-relative">
    <img class="nuestros-convenios__image" src="<?php echo IMG;?>/iconos/avion-rosa.svg">
    <section class="contenido_escalonado p-relative nuestros-convenios contenedor xl">
        <div class="nuestros-convenios__header">
            <h2 class="nuestros-convenios__title">Nuestros convenios</h2>
            <p class="nuestros-convenios__text">Convenios y alianzas que respaldan nuestro trabajo y compromiso por seguir brindándoles a nuestros alumnos las herramientas necesarias para alcanzar su máximo desarrollo académico.</p>
        </div>
    
        <div class="nuestros-convenios__body">
            <h3 class="nuestros-convenios__subtitle">Convenio con:</h3>
            <div class="nuestros-convenios__details">
                <div class="nuestros-convenios__details-content">
                    <div class="nuestros-convenios__details-item">
                        <button id="drop_1" class="nuestros-convenios__details-button">
                            Schulen: Partner der Zukunft - Goeth Institut
                            <img class="nuestros-convenios__details-icon" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
                        </button>
                        <div id="opcion-1" class="nuestros-convenios__details-description">
                            <p class="nuestros-convenios__details-text">
                                MLP es parte de “Los colegios: Socios para el Futuro” (PASCH), una iniciativa del Ministerio de Relaciones Exteriores y llevado a cabo por la 
                                Central para Colegios Alemanes en el Extranjero (ECM), con el respaldo y apoyo en conjunto del Goethe-Institut, el Servicio Alemán de Intercambio 
                                Académico (DAAD) y el Servicio de Intercambio Pedagógico de la Conferencia de Ministros de Cultura de Alemania (PAD).
                                <br><br> El objetivo de la iniciativa 
                                PASCH es despertar interés y entusiasmo por Alemania, motivar a los jóvenes a aprender alemán a través de actividades culturales y de intercambios. 
                                <br><br> En MLP, se desarrolla el curso de alemán como un segundo idioma extranjero, alcanzando la Certificación Internacional de acuerdo con el marco común 
                                europeo de las lenguas. El dominio de este idioma les permite participar en diversas competiciones para aplicar a becas de estudio del alemán en el 
                                mismo país de origen (Alemania), como también a nivel de América Latina.
                            </p>
                            <img class="nuestros-convenios__details-img"  src="<?php echo IMG?>/img-convenio-1.png" alt="">
                        </div>
                    </div>
                    <div class="nuestros-convenios__details-item">
                        <button id="drop_2" class="nuestros-convenios__details-button">
                        Cambridge English
                            <img class="nuestros-convenios__details-icon" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
                        </button>
                        <div id="opcion-2" class="nuestros-convenios__details-description">
                            <p class="nuestros-convenios__details-text">
                            Somos un centro autorizado para la preparación en el idioma inglés, gracias a ello nuestros estudiantes pueden rendir los exámenes de certificación internacional Cambridge.
                            </p>
                            <img class="nuestros-convenios__details-img"  src="<?php echo IMG?>/img-convenio-2.png" alt="">
                        </div>
                    </div>
                    <div class="nuestros-convenios__details-item">
                        <button id="drop_3" class="nuestros-convenios__details-button">
                        TEC DE MONTERREY
                            <img class="nuestros-convenios__details-icon" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
                        </button>
                        <div id="opcion-3" class="nuestros-convenios__details-description">
                            <p class="nuestros-convenios__details-text">
                            Participación de becas para estudiantes de pre-grado en los diferentes campus de la Universidad Tecnológica de Monterrey - México. Para ello, los alumnos de 5° de secundaria rinden una evaluación de aptitud matemática y aptitud verbal.
                            </p>
                            <img class="nuestros-convenios__details-img"  src="<?php echo IMG?>/img-convenio-3.png" alt="">
                        </div>
                    </div>
                    <div class="nuestros-convenios__details-item">
                        <button id="drop_4" class="nuestros-convenios__details-button">
                        Microsoft Office Specialist
                            <img class="nuestros-convenios__details-icon" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
                        </button>
                        <div id="opcion-4" class="nuestros-convenios__details-description">
                            <p class="nuestros-convenios__details-text">
                            Gracias a la preparación brindada, nuestros estudiantes pueden rendir los exámenes de certificación internacional por cada herramienta: MS Word, MS Excel y MS Power Point.
                            </p>
                            <img class="nuestros-convenios__details-img"  src="<?php echo IMG?>/img-convenio-4.png" alt="">
                        </div>
                    </div>
                </div>
                <div id="imagen-convenio">
                    <img src="<?php echo IMG?>/img-convenio.jpg" alt="">
                </div>
            </div>
        </div>
    
    </section>
</div>

<section class="niveles-formacion">
    <div class="niveles-formacion__bg" style="background: url(<?php echo IMG?>/banner-convenio-2.jpg)"></div>
    <div class="niveles-formacion__content">
        <div class="niveles-formacion__description">
            <span class="niveles-formacion__txt1">Conoce nuestros niveles de formación</span>
            <p class="niveles-formacion__txt2">Conoce más sobre nuestra propuesta educativa en los niveles de primaria y secundaria.</p>
        </div>
        <a href="<?php echo esc_url(home_url('/')) ?>/formacion" id="boton_convenio" class="niveles-formacion__button">Ver Niveles</a>
    </div>
</section>


<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>