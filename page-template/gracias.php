<?php
/*
    Template name: gracias
*/

get_header();
?>

<section style=" height: 100vh; width: 100%; position: relative;">
    <div style="height: 100%; width: 100%; background:url(<?php echo IMG?>/banner-gracias.jpg); position: absolute; top: 0;"></div>
    <div style="height: 100%; width: 100%; display: flex; gap: 2rem; flex-direction: column; justify-content: center; align-items: center; position: relative; z-index: 9; padding-top: 10rem;">
        <div style="text-align: center;">
            <h2 style="color: white; font-family: 'GorditaBold';">!Gracias <br> por confiar en nosotros!</h2>
        </div>
        <p style="color: white; font-family: 'GorditaRegular'; font-size: 25px;">
            En breve te llegará la información solicitada a tu correo electrónico
        </p>
        <a href="<?php echo esc_url(home_url('/')) ?>" id="boton_gracias" style="margin: 2rem 0; padding: .5rem 2rem; background-color: #CC4482; border-radius: 3rem; border: 1px solid #CC4482; color: white; font-family: 'GorditaRegular'; font-size: 25px;">Volver al inicio</a>
        <p style="color: white; font-family: 'GorditaRegular'; font-size: 20px;">También puedes seguirnos en nuestras redes sociales.</p>
        <div style="display: flex; justify-content: center; align-items: center; gap: 1rem;">
            <img src="<?php echo IMG?>/iconos/icon_facebook.svg" alt="">
            <img src="<?php echo IMG?>/iconos/icon_instagram.svg" alt="">
            <img src="<?php echo IMG?>/iconos/icon_twitter.svg" alt="">
            <img src="<?php echo IMG?>/iconos/icon_tiktok.svg" alt="">
        </div>
    </div>
</section>

<?php get_footer(); ?>