<?php
/*
    Template name: primaria
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner-visitanos.jpg)">
    <div class="contenedor">
        <h1>Reserva una cita</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > Reserva una cita</p>
    </div>
</section>

<section class="visitanos-page">
    <img class="visitanos-page__icon-avion" src="<?php echo IMG?>/iconos/avion-rosa.svg" alt="">
    <img class="visitanos-page__icon-world" src="<?php echo IMG?>/iconos/icon_mundo.svg" alt="">
    <div class="visitanos-page__content">
        <p class="visitanos-page__description">Conoce más sobre nuestra propuesta educativa y descubre los espacios donde Formamos a los Futuros Lideres del Mundo. Déjanos tus datos y reserva una visita guiada.</p>
        <div class="visitanos-page__form-container">
            <form id="formulario_inputs" class="visitanos-page__form">
                <div class="visitanos-page__form-row visitanos-page__form-row-three">
                    <select class="input" name="" id="">
                        <option value="">Parentesco</option>
                        <option value="">Padre</option>
                        <option value="">Madre</option>
                    </select>
                    <input class="input" type="text" placeholder="Nombre">
                    <input class="input" type="text" placeholder="Apellidos">
                </div>
                <label class="visitanos-page__label" for="">Fecha deseada de visita</label>
                <div class="visitanos-page__form-row visitanos-page__form-row-two">
                    <input class="input" type="date">
                    <select class="input" name="" id="">
                        <option value="">Hora</option>
                        <option value="">07:00 - 08:00 am</option>
                        <option value="">08:00 - 09:00 am</option>
                        <option value="">10:00 - 11:00 am</option>
                        <option value="">11:00 - 12:00 pm</option>
                        <option value="">12:00 - 13:00 pm</option>
                        <option value="">13:00 - 14:00 pm</option>
                    </select>
                </div>
                <div class="visitanos-page__form-row visitanos-page__form-row-two">
                    <input class="input" type="email" placeholder="Correo">
                    <input class="input" type="number" placeholder="Telf.">
                </div>
                <div class="visitanos-page__form-row visitanos-page__form-row-one">
                    <input class="input" type="number" placeholder="Numero de Hijos">
                </div>
                <div class="visitanos-page__form-row visitanos-page__form-row-three">
                    <input class="input" type="text" placeholder="Hijo 1 - Nombre">
                    <select class="input" name="" id="">
                        <option value="">Nivel</option>
                        <option value="">Primaria</option>
                        <option value="">Secundaria</option>
                    </select>
                    <input class="input" type="text" placeholder="Grado / Año">
                </div>
                <div class="visitanos-page__form-row visitanos-page__form-row-three">
                    <input class="input" type="text" placeholder="Hijo 2 - Nombre">
                    <select class="input" name="" id="">
                        <option value="">Nivel</option>
                        <option value="">Primaria</option>
                        <option value="">Secundaria</option>
                    </select>
                    <input class="input" type="text" placeholder="Grado / Año">
                </div>
                <div class="visitanos-page__form-row visitanos-page__form-row-three">
                    <input class="input" type="text" placeholder="Hijo 3 - Nombre">
                    <select class="input" name="" id="">
                        <option value="">Nivel</option>
                        <option value="">Primaria</option>
                        <option value="">Secundaria</option>
                    </select>
                    <input class="input" type="text" placeholder="Grado / Año">
                </div>
                <div class="visitanos-page__checked-container">
                    <input type="checkbox" >
                    <label style="color: #53699B; font-family: 'GorditaBold';" for="">Acepto la política de privacidad</label>
                </div>
                <div class="visitanos-page__button-container">
                    <a href="<?php echo esc_url(home_url('/')) ?>/gracias" id="boton_formulario" class="button button-primary">Enviar</a>
                </div>
            </form>
        </div>
        <div class="visitanos-page__info-school">
            <h3 class="visitanos-page__info-school-title">Sobre nuestro colegio</h3>
            <p class="visitanos-page__info-school-description">Somos una Institución Educativa con más de 20 años de experiencia, enfocada en lograr la excelencia académica en cada uno de nuestros estudiantes, razón por la cual desarrollamos una metodología educativa altamente internacional, a través de la cual brindamos una formación integral que permite que los jóvenes puedan desenvolverse eficiente y competitivamente en el mundo profesional.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>