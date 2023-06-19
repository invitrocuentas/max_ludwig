<?php
/*
    Template name: preguntas-frecuentes
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner-preguntas.jpg)">
    <div class="contenedor">
        <h1>Preguntas Frecuentes</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > Preguntas Frecuentes</p>
    </div>
</section>

<section style="position: relative; display: flex; justify-content: center; align-items: center; gap: 1rem; flex-direction: column; min-height: 100vh; width: 100%; background: url(<?php echo IMG?>/backgroung-preguntas.jpg); padding: 0 30rem">
    <img style="position: absolute; top: 10%; left: 30px; height: 10rem; rotate: -45deg;" src="<?php echo IMG?>/iconos/copa_icon.svg" alt="">
    <img style="position: absolute; top: 50%; right: 30px; height: 10rem;" src="<?php echo IMG?>/iconos/libros.svg" alt="">
    <div style="width: 100%;">
        <button id="dropbox_1" style="font-family: 'GorditaMedium'; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; width: 100%; text-align: start; background-color: #53699B; padding: .5rem 2rem; border: 1px solid #7EA4ED; color: white; height: 4.5rem; border-radius: 3rem;">
            a) ¿Cuál es el número de alumnos por aula?
            <img style="width: 1.5rem;" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
        </button>
        <div id="opcion-1" style="min-height: 10rem; width: 100%; margin: 1rem 0; gap: 2rem; justify-content: center; align-items: center; display: none; padding: 0 3rem">
            <p style="color: #757575; font-family: 'GorditaRegular'; font-size: 1.2rem;">
                En nuestras aulas de primaria contamos una capacidad de 20 alumnos y en el nivel de secundaria cada aula tiene la capacidad máxima de 25 alumnos, por lo que brindamos una enseñanza personalizada con cada uno de los estudiantes.
            </p>
        </div>
    </div>
    <div style="width: 100%;">
        <button id="dropbox_2" style="font-family: 'GorditaMedium'; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; width: 100%; text-align: start; background-color: #53699B; padding: .5rem 2rem; border: 1px solid #7EA4ED; color: white; height: 4.5rem; border-radius: 3rem;">
            b) ¿Cómo está conformada su plana docente?
            <img style="width: 1.5rem;" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
        </button>
        <div id="opcion-2" style="min-height: 10rem; width: 100%; margin: 1rem 0; gap: 2rem; justify-content: center; align-items: center; display: none; padding: 0 3rem">
            <p style="color: #757575; font-family: 'GorditaRegular'; font-size: 1.2rem;">
                El Equipo MLP está conformado por docentes altamente profesionales y especializados de acuerdo con su área respectivamente.
            </p>
        </div>
    </div>
    <div style="width: 100%;">
        <button id="dropbox_3" style="font-family: 'GorditaMedium'; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; width: 100%; text-align: start; background-color: #53699B; padding: .5rem 2rem; border: 1px solid #7EA4ED; color: white; height: 4.5rem; border-radius: 3rem;">
            c) ¿Cuál es la metodología de enseñanza de Max Ludwig Planck?
            <img style="width: 1.5rem;" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
        </button>
        <div id="opcion-3" style="min-height: 10rem; width: 100%; margin: 1rem 0; gap: 2rem; justify-content: center; align-items: center; display: none; padding: 0 3rem">
            <p style="color: #757575; font-family: 'GorditaRegular'; font-size: 1.2rem;">
                Nuestra metodología de enseñanza es, activa, participativa y dialogante donde nuestros estudiantes obtienen una formación integral, fomentando la motivación, el involucramiento, la interacción, el pensamiento crítico, la investigación y el análisis.
            </p>
        </div>
    </div>
    <div style="width: 100%;">
        <button id="dropbox_4" style="font-family: 'GorditaMedium'; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; width: 100%; text-align: start; background-color: #53699B; padding: .5rem 2rem; border: 1px solid #7EA4ED; color: white; height: 4.5rem; border-radius: 3rem;">
            d) ¿Qué idiomas enseñan?
            <img style="width: 1.5rem;" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
        </button>
        <div id="opcion-4" style="min-height: 10rem; width: 100%; margin: 1rem 0; gap: 2rem; justify-content: center; align-items: center; display: none; padding: 0 3rem">
            <p style="color: #757575; font-family: 'GorditaRegular'; font-size: 1.2rem;">
                En Max Ludwig Planck, desarrollamos las clases en 2 idiomas. De acuerdo con nuestro plan de estudios nuestros estudiantes de primaria y secundaria comparten, desarrollan y perfeccionan la comunicación en el idioma inglés. Asimismo, desde el 4to grado de primaria y demás grados empiezan a interactuar y conocer el idioma alemán.
            </p>
        </div>
    </div>
    <div style="width: 100%;">
        <button id="dropbox_5" style="font-family: 'GorditaMedium'; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; width: 100%; text-align: start; background-color: #53699B; padding: .5rem 2rem; border: 1px solid #7EA4ED; color: white; height: 4.5rem; border-radius: 3rem;">
            e) ¿Cuentan con Actividades Extracurriculares?
            <img style="width: 1.5rem;" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
        </button>
        <div id="opcion-5" style="min-height: 10rem; width: 100%; margin: 1rem 0; gap: 2rem; justify-content: center; align-items: center; display: none; padding: 0 3rem">
            <p style="color: #757575; font-family: 'GorditaRegular'; font-size: 1.2rem;">
                Si, desarrollamos actividades que favorezcan la formación integral de nuestros alumnos, a través de talleres deportivos, culturales y de integración
            </p>
        </div>
    </div>
    <div style="width: 100%;">
        <button id="dropbox_6" style="font-family: 'GorditaMedium'; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; width: 100%; text-align: start; background-color: #53699B; padding: .5rem 2rem; border: 1px solid #7EA4ED; color: white; height: 4.5rem; border-radius: 3rem;">
            f) ¿Los alumnos aprenden a manejar las diferentes herramientas tecnológicas?
            <img style="width: 1.5rem;" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
        </button>
        <div id="opcion-6" style="min-height: 10rem; width: 100%; margin: 1rem 0; gap: 2rem; justify-content: center; align-items: center; display: none; padding: 0 3rem">
            <p style="color: #757575; font-family: 'GorditaRegular'; font-size: 1.2rem;">
                Nuestros alumnos aprenden a manejar los diversos recursos como las computadoras, pantallas interactivas, entre otros, permitiéndoles a generar un aprendizaje interactivo y participativo donde potencian sus habilidades y competencias comunicativas.
            </p>
        </div>
    </div>
</section>


<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>