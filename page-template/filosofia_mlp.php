<?php
/*
    Template name: filosofia
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner_filosofia.jpg)">
    <div class="contenedor">
        <h1>Filosofía MLP</h1>
        <p>Inicio > Filosofía MLP</p>
    </div>
</section>

<section class="contenido_escalonado p-relative">
    <img src="<?php echo IMG;?>/iconos/avion-azul.svg" class="bg_icon plane">
    <div class="contenedor">
        <div class="row">
            <div class="col padding-r">
                <picture>
                    <img src="<?php echo IMG ?>/img1.png">
                </picture>
            </div>
            <div class="col">
                <h2>Misión</h2>
                <p>En MLP asumimos la responsabilidad de dar una formación integral a cada uno de nuestros alumnos en las distintas etapas de su desarrollo, desde el respeto a sus creencias, poniendo el máximo empeño en el alto nivel académico, en el cultivo de valores humanos y en la creación de hábitos de estudio, trabajo y convivencia para una excelente formación académica y personal, promovido y acompañado de una plana docente altamente profesional permitiéndoles asumir retos que demande la vida universitaria y el mundo globalizado.</p>
            </div>
        </div>
        <div class="row">
            <div class="col padding-l">
                <picture>
                    <img src="<?php echo IMG ?>/img1.png">
                </picture>
            </div>
            <div class="col">
                <h2>Visión</h2>
                <p>El Colegio Max Ludwig Planck se posicionará en el año 2027 como un colegio de excelencia académica reconocida a nivel nacional e internacional, en el que los padres de familia, directivos, profesores y demás miembros de la comunidad educativa, sostengan un equipo sólidamente unido, inculcando en los estudiantes una participación consciente y activa en su proceso de formación como líderes y agentes de cambio social.</p>
            </div>
        </div>
    </div>
</section>

<section class="valores p-relative">
    <img src="<?php echo IMG;?>/iconos/birrete.svg" class="bg_icon birrete">
    <img src="<?php echo IMG;?>/iconos/oleos.svg" class="bg_icon oleos">
    <div class="contenedor">
        <h2>Valores</h2>
        <div class="row start">
            <div class="card_valor">
                <picture>
                    <img src="<?php echo IMG?>/icon1.svg">
                </picture>
                <h2 class="down">Justicia</h2>
            </div>
            <div class="card_valor">
                <picture>
                    <img src="<?php echo IMG?>/icon1.svg">
                </picture>
                <h2 class="down">Justicia</h2>
            </div>
            <div class="card_valor">
                <picture>
                    <img src="<?php echo IMG?>/icon1.svg">
                </picture>
                <h2 class="down">Justicia</h2>
            </div>
            <div class="card_valor">
                <picture>
                    <img src="<?php echo IMG?>/icon1.svg">
                </picture>
                <h2 class="down">Justicia</h2>
            </div>
            <div class="card_valor">
                <picture>
                    <img src="<?php echo IMG?>/icon1.svg">
                </picture>
                <h2 class="down">Justicia</h2>
            </div>
            <div class="card_valor">
                <picture>
                    <img src="<?php echo IMG?>/icon1.svg">
                </picture>
                <h2 class="down">Justicia</h2>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>