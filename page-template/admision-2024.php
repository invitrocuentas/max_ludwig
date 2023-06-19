<?php
/*
    Template name: admision-2024
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner_admision_2024.jpg)">
    <div class="contenedor">
        <h1>Admisión 2024</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > Admisión 2024</p>
    </div>
</section>

<section id="admision" class="contenido_escalonado p-relative page_formation">
    <img src="<?php echo IMG;?>/iconos/avion-rosa.svg" class="bg_icon plane">
    <!-- <img src="<?php echo IMG;?>/iconos/libros.svg" class="bg_icon books"> -->
    <div class="contenedor xl">
        <div class="row">
            <div class="col">
                <picture>
                    <img src="<?php echo IMG ?>/img-admision-1.jpg">
                </picture>
            </div>
            <div class="col padding-l">
                <h2>Admisión</h2>
                <p>Nuestra propuesta educativa es innovadora, brindamos una sólida formación académica con el más alto nivel y un adecuado sistema de enseñanza y aprendizaje. Aplicamos una pedagogía progresista, en la que nuestros estudiantes reciben una educación práctica, dinámica, participativa, democrática,...</p>
                <div class="button-container">
                    <button id="boton_formulario_admision" class="">Más información</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="proceso" class="contenido_escalonado p-relative page_formation admision proceso">
    <div class="contenedor xl">
        <div class="row">
            <div class="col padding-r">
                <h2 style="color: white">Proceso</h2>
                <p style="color: white">Deberá ingresar a la siguiente dirección web: <strong>https://maxludwigplanck.cubicol.pe/principal/login/admision</strong> Posterior a la recepción y aceptación de su Ficha de Inscripción (Paso 1), deberá ingresar nuevamente a su perfil, y subir la siguiente documentación: En este espacio se le solicitará completar sus datos...</p>
                <div class="button-container">
                    <button id="boton_formulario_admision_1">Más información</button>
                </div>
            </div>
            <div class="col">
                <picture>
                    <img src="<?php echo IMG ?>/img-admision-2.jpg">
                </picture>
            </div>
        </div>
    </div>
</section>

<section id="precios" class="precios">
    <div class="contenedor xl">
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
        <div style="display: flex; justify-content: center; align-items: center; width: 100%; margin: 1rem 0;">
            <button id="boton_formulario_admision_2">Más información</button>
        </div>
    </div>
</section>

<div id="modal-1" class="modal">
    <div class="modal__bg"></div>
    <div class="modal__content">
        <button id="boton_formulario_admision_cerrar" class="modal__close-button">
            <strong>X</strong>
        </button>
        <div class="modal__header">
            <h2 class="modal__title">Admisión</h2>
        </div>
        <div class="modal__body">
            <h3 class="modal__subtitle">Nuestra enseñanza:</h3>
            <p class="modal__text">Nuestra propuesta educativa es innovadora, brindamos una sólida formación académica con el más alto nivel y un adecuado sistema de enseñanza y aprendizaje. Aplicamos una pedagogía progresista, en la que nuestros estudiantes reciben una educación práctica, dinámica, participativa, democrática, estimulante y motivadora. Asimismo, nuestro sistema académico preuniversitario, permite desarrollar en nuestros alumnos las habilidades de comprensión y análisis, a través de actividades intelectuales que les permita a nuestros estudiantes entender, emitir sus propios juicios críticos y asegurar el éxito en la vida universitaria.</p>
            <h3 class=modal__subtitle">¿Qué ofrecemos?</h3>
            <p class="modal__text">• Educación bilingüe y certificación internacional: inglés y alemán. 
               <br> • Enseñanza personalizada, número de alumnos limitado por aula en los niveles de primaria y secundaria.
               <br>• Equipos y sistemas tecnológicos educativos. • Fomento de una mentalidad internacional. 
               <br>• Bienestar emocional y personal, desarrollado a través de nuestros diversos talleres, dirigidos a alumnos y padres de familia.</p>
            <h3 class="modal__subtitle">Servicio educativo:</h3>
            <p class="modal__text">Aplicamos una evaluación de diagnóstico para determinar el progreso actual de cada estudiante, con el fin de brindarle la nivelación necesaria acorde a sus necesidades educativas. Nuestros docentes estimulan en los estudiantes el pensamiento lógico, crítico-autocrítico, reflexivo, creativo y positivo, dando lugar a la reflexión, al análisis, la comprensión y propiciando en ellos la investigación y todo aquello que les permita convertirse en personas competentes, capaces de participar en las actividades de la vida humana, así como en la conservación del medio ambiente, desde la escuela y la comunidad.</p>
        </div>
    </div>
</div>

<div id="modal-2" class="modal">
    <div class="modal__bg"></div>
    <div class="modal__content">
        <button id="boton_formulario_admision_1_cerrar" class="modal__close-button">
            <strong>X</strong>
        </button>
        <div class="modal_header">
            <h2 style="color: #9D325E;">Proceso</h2>
        </div>
        <div id="modal-content" class="modal__body">
            <h3 class="modal__title">1. Registro</h3>
            <p class="modal__text">Deberá ingresar a la siguiente dirección web: https://maxludwigplanck.cubicol.pe/princ ipal/login/admision Posterior a la recepción y aceptación de su Ficha de Inscripción (Paso 1), deberá ingresar nuevamente a su perfil, y subir la siguiente documentación: En este espacio se le solicitará completar sus datos (como apoderado) y los del o los alumnos. Luego, a su correo registrado, le llegará un mensaje indicándole el usuario y contraseña con los cuales podrá acceder posteriormente a su perfil para continuar con el proceso de Matrícula 2023.</p>
            <h3 class="modal__subtitle">2. Postulante</h3>
            <p class="modal__text">Posterior a la recepción y aceptación de su Ficha de Inscripción (Paso 1), 
            deberá ingresar nuevamente a su perfil, y subir la siguiente documentación: En este espacio se le solicitará completar sus datos 
            (como apoderado) y los del o los alumnos. Luego, a su correo registrado, le llegará un mensaje indicándole el usuario y contraseña 
            con los cuales podrá acceder posteriormente a su perfil para continuar con el proceso de Matrícula 2023. <br>
            <strong style="color: #53699B;">
            <br> - DNI del alumno (a). DNI 
            de los padres. <br> - DNI del apoderado (opcional, solo si hubiese apoderado). <br> - Carta notarial firmada por uno de los padres (opcional, 
            solo si hubiese apoderado). <br><br>
            </strong>
            Asimismo, deberá completar la información familiar que se le solicitará. En caso haya observaciones se le 
            notificará a su correo registrado.</p>
            <h3 class="modal__subtitle">3. Admitido</h3>
            <p class="modal__text">Una vez recepcionada correctamente la documentación correspondiente al Paso 2, 
            podrá continuar a la siguiente etapa, donde deberá subir lo siguiente: 
            <br><br>
            <strong style="color: #53699B;">
            - Constancia de No Adeudo.<br> - Contrato de Prestación de Servicios 
            Educativos 2023 (deberá descargarlo de la misma plataforma, luego llenarlo, escanearlo y subirlo nuevamente).<br> - Voucher de pago de Matrícula 
            (podrá visualizar en el mismo ítem la información sobre este proceso).<br> - Voucher de pago de Cuota de Ingreso.
            </strong>
            <br><br>
            Recibirá, en caso no haya observaciones, 
            un correo indicándole la correcta recepción de su documentación y su paso a la siguiente etapa.</p>
            <h3 class="modal__subtitle">4. Ingresante</h3>
            <p class="modal__text">Recibirá una constancia de vacante, la cual le permitirá solicitar a la Institución de origen y, 
            posteriormente, subir la siguiente documentación: <br><br>
            <span style="color: #53699B;">
            - Ficha Única de Matrícula SIAGIE. <br> - Certificados de Estudios emitidos por el Ministerio de Educación 
            (visado por la UGEL si pertenece a otro departamento). <br> - Resolución Directoral de Traslado.
            </span>
            </p>
            <h3 class="modal__subtitle">5. Alumno</h3>
            <p class="modal__text">Luego de aprobada toda la documentación e información subida a la plataforma, recibirá un correo 
            de <strong style="color: #9D325E;">“Bienvenida a la familia Max Planck”</strong> .</p>
        </div>
    </div>
</div>

<div id="modal-3" class="modal">
    <div class="modal__bg"></div>
    <div class="modal__content">
        <button id="boton_formulario_admision_2_cerrar" class="modal__close-button">
            <strong>X</strong>
        </button>
        <div class="modal__header">
            <h2 class="modal__title">Precios</h2>
        </div>
        <h3 class="modal__subtitle">1. Cuota de ingreso</h3>
        <p class="modal__text">El pago al contado del total de la cuota de ingreso tendrá un <strong style="color: #9D325E;">descuento del 20%</strong> y, en el caso de hermanos, se otorgará el  <strong style="color: #9D325E;">50% de descuento</strong>.</p>
        <h3 class="modal__subtitle">2. Matrícula y Pensiones</h3>
        <p class="modal__text">En condición de hermanos, la familia obtendrá un <strong style="color: #9D325E;">descuento de 15%</strong> en la matrícula y las pensiones del segundo estudiante matriculado. <br>
        </p>
    </div>
</div>



<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>