<?php
/*
    Template name: actividades-mlp
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner-actividades.jpg)">
    <div class="contenedor">
        <h1>Actividades MLP</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > <a href="<?php echo esc_url(home_url('/')).'formacion' ?>">Formación</a> > Actividades MLP</p>
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
                <h2>Deporte</h2>
                <p>Mediante el programa de Educación Física se promueve el desarrollo integral del alumno, mejorando, inicialmente, sus habilidades psicomotrices y potenciando sus distintas competencias, tales como: autoestima, liderazgo, disciplina, trabajo en equipo, entre otros. Asimismo, realizar estas actividades no solo benefician, la parte física, sino también mental en los niños y jóvenes, proporcionándoles sensaciones de felicidad y bienestar. Finalmente, se permite que nuestros estudiantes puedan descubrir sus habilidades deportivas, logrando, en muchas ocasiones, encontrar su vocación y profesión en el deporte que practican.</p>
                <!-- <a href="#">Ver más</a> -->
            </div>
        </div>
    </div>
</section>
<section class="contenido_escalonado p-relative primaria">
    <div class="contenedor">
        <div class="row">
            <div class="col">
                <h2>Arte y cultura</h2>
                <p>Gracias a las artes, nuestros alumnos poseen un canal a través del cual mostrar sus habilidades y retarse a sí mismos para crear algo nuevo, potenciando su auto confianza y disciplina, al mismo tiempo que, desarrollamos en ellos un pensamiento divergente, crítico y creativo. El aprender a tocar un instrumento musical, crear una pintura, danzar o actuar, impulsa a los jóvenes a tomar pasos pequeños, a practicar para mejorar y, a ser persistentes y pacientes, al mismo tiempo que, logran exteriorizar una nueva expresión de su identidad cultural.</p>
                <!-- <a href="#">Ver más</a> -->
            </div>
            <div class="col padding-l">
                <picture>
                    <img src="<?php echo IMG ?>/img-primaria-1.png">
                </picture>
            </div>
        </div>
    </div>
</section>
<section class="contenido_escalonado p-relative primaria">
    <img style="position: absolute; left: -5rem; top: 30%;" src="<?php echo IMG ?>/iconos/icon_cuaderno.svg" alt="">
    <div class="contenedor">
        <div class="row">
            <div class="col padding-r">
                <picture>
                    <img src="<?php echo IMG ?>/img-primaria-1.png">
                </picture>
            </div>
            <div class="col">
                <h2>Psicopedagogía</h2>
                <p>Nuestro programa de psicopedagogía ayuda a mejorar la capacidad de estudio de cada alumno, ya sea de manera individual o grupal, lo cual es logrado a través de una evaluación previa de posibles dificultades o factores que pudieran estar influyendo en dicho aprendizaje. Por otro lado, también permite crear las condiciones adecuadas para el desarrollo de aprendizajes cognitivos y emocionales, potenciando el trabajo interdisciplinario, donde la familia es la protagonista. Esta área actúa como orientadora en pro a mejorar la enseñanza y aprendizaje, tomando en cuenta las capacidades reales que poseen los estudiantes.</p>
                <!-- <a href="#">Ver más</a> -->
            </div>
        </div>
    </div>
</section>
<section class="contenido_escalonado p-relative primaria">
    <div class="contenedor">
        <div class="row">
            <div class="col">
                <h2>Actividades de integración</h2>
                <p>Trabajamos en generar espacios de colaboración e interacción mutua entre los estudiantes y las familias maxplancistas, incentivando en todo momento su continua participación con el fin de promover en cada uno de ellos el sentido de pertenencia, comunicación, motivación y trabajo en equipo, dejando prevalecer nuestros valores e identidad.</p>
                <!-- <a href="#">Ver más</a> -->
            </div>
            <div class="col padding-l">
                <picture>
                    <img src="<?php echo IMG ?>/img-primaria-1.png">
                </picture>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>