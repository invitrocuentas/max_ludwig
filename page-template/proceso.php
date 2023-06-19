<?php
/*
    Template name: proceso
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner_admision_2024.jpg)">
    <div class="contenedor">
        <h1>Admisión 2024</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > Admisión 2024</p>
    </div>
</section>

<section class="contenido_escalonado p-relative page_formation admision">
    <img src="<?php echo IMG;?>/iconos/avion-rosa.svg" class="bg_icon plane">
    <img src="<?php echo IMG;?>/iconos/libros.svg" class="bg_icon books">
    <div class="contenedor">
        <div class="row">
            <div class="col">
                <picture>
                    <img src="<?php echo IMG ?>/img2.png">
                </picture>
            </div>
            <div class="col">
                <h2>Primaria</h2>
                <p>Trabajamos el aprendizaje de la expresión y comprensión oral y escrita, la lectura y el cálculo, así como en la adquisición de habilidades lógico-matemáticas, fomentando hábitos de convivencia y trabajo en equipo.</p>
                <a href="#">Ver más</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <picture>
                    <img src="<?php echo IMG ?>/img2.png">
                </picture>
            </div>
            <div class="col">
                <h2>Secundaria</h2>
                <p>Potenciamos y reforzamos los conocimientos y habilidades necesarias para vivir y desenvolverse libremente en un mundo globalizado, brindándoles las herramientas necesarias para iniciar eficientemente la vida universitaria.</p>
                <a href="#">Ver más</a>
            </div>
        </div>
    </div>
</section>

<section class="precios">
    <div class="contenedor">
        <h2>Precios</h2>
        <div class="contenedor_sombreado">
            <div class="table w-100">
                <div class="tr">
                    <div class="td">
                        <div class="celeste">
                            <p>Concepto</p>
                        </div>
                    </div>
                    <div class="td">
                        <div class="center guinda">
                            <p>Primaria</p>
                        </div>
                    </div>
                    <div class="td">
                        <div class="center guinda">
                            <p>Secundaria</p>
                        </div>
                    </div>
                </div>
                <div class="tr">
                    <div class="td">
                        <div class="azul">
                            <p>Cuota de Ingreso</p>
                        </div>
                    </div>
                    <div class="td td-2">
                        <div class="center">
                            <p>S/. 400.00 (por año lectivo)</p>
                        </div>
                    </div>
                </div>
                <div class="tr">
                    <div class="td">
                        <div class="azul">
                            <p>Matrícula</p>
                        </div>
                    </div>
                    <div class="td td-2">
                        <div>
                            <p>S/. 680.00</p>
                            <p>S/. 680.00</p>
                        </div>
                    </div>
                </div>
                <div class="tr">
                    <div class="td">
                        <div class="azul">
                            <p>Pensión Mensual</p>
                        </div>
                    </div>
                    <div class="td td-2">
                        <div>
                            <p>S/. 680.00</p>
                            <p>S/. 680.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>