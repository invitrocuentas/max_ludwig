<?php
/*
    Template name: contacto
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner-contacto.jpg)">
    <div class="contenedor">
        <h1>Contacto</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > Contacto</p>
    </div>
</section>

<section class="contenido_escalonado p-relative escribenos-section">
    <img class="escribenos-section__icon-message" src="<?php echo IMG;?>/iconos/icon_message.svg">
    <div class="escribenos-section__content">
        <h2 class="escribenos-section__title">Escríbenos</h2>
        <div class="escribenos-section__body">
            <div class="escribenos-section__left">
                <p class="escribenos-section__description">¿Está interesado en saber cómo podemos ayudar a su hijo a desarrollar todo su potencial?</p>
                <div class="escribenos-section__information-container">
                    <div>
                        <img src="<?php echo IMG?>/iconos/collection-icons.svg" alt="">
                    </div>
                    <div class="escribenos-section__information-text">
                        <span >+51 959 663 326</span>
                        <span >admision@maxplanck.edu.pe</span>
                        <span >Las Moreras 460, Trujillo, Peru</span>
                    </div>
                </div>
            </div>
            <div class="escribenos-page__right">
                <form id="formulario_inputs" style="box-shadow: 0px 3px 6px #00000029; border: 1px solid #2A344F; border-radius: 2rem; padding: 3rem; max-width: 50rem; display: flex; flex-direction: column; gap: 1rem;">
                    <div style="width: 100%; display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <input style="border: 1px solid #53699B; background-color: white; padding: 1rem 2rem; border-radius: 3rem; color: #53699B; font-family: 'GorditaRegular';" type="text" placeholder="Nombre">
                        <input style="border: 1px solid #53699B; background-color: white; padding: 1rem 2rem; border-radius: 3rem; color: #53699B; font-family: 'GorditaRegular';" type="text" placeholder="Apellidos">
                    </div>
                    <div style="width: 100%; display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <input style="border: 1px solid #53699B; background-color: white; padding: 1rem 2rem; border-radius: 3rem; color: #53699B; font-family: 'GorditaRegular';" type="number" placeholder="Número">
                        <input style="border: 1px solid #53699B; background-color: white; padding: 1rem 2rem; border-radius: 3rem; color: #53699B; font-family: 'GorditaRegular';" type="email" placeholder="Correo electrónico">
                    </div>
                    <div style="width: 100%;">
                        <textarea rows="4" style="width: 100%; border: 1px solid #53699B; background-color: white; padding: 1rem 2rem; border-radius: 1.5rem; color: #53699B; font-family: 'GorditaRegular';" type="number" placeholder="Mensaje"></textarea>
                    </div>
                    <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
                        <a href="<?php echo esc_url(home_url('/')) ?>/gracias" id="boton_formulario" style="width: fit-content; padding: .5rem 2rem; background-color: #9D325E; color: white; border: 1px solid #9D325E; border-radius: 3rem; font-family: 'GorditaRegular';">Enviar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="contacto-map">
    <a href="https://goo.gl/maps/dSPoBUYXvXdMEMTF6" target="_blank">
        <img src="<?php echo IMG?>/iconos/icon_pin.svg" alt="">
    </a>
</section>

<?php get_footer(); ?>