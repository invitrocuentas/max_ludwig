<?php
/*
    Template name: trabaja-nosotros
*/

get_header();
?>

<section <?php body_class(); ?> id="banner" style="background:url(<?php echo IMG?>/banner-trabaja.jpg)">
    <div class="contenedor">
        <h1>Trabaja con Nosotros</h1>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">Inicio</a> > Trabaja con Nosotros</p>
    </div>
</section>

<section  style="background-color: white;padding: 5rem 15rem;" class="contenido_escalonado p-relative">
    <img style="position: absolute; top: 15%; right: 5rem; height: 10rem;" src="<?php echo IMG;?>/iconos/libros.svg">
    <img style="position: absolute; top: 80%; left: 5rem; height: 10rem;" src="<?php echo IMG;?>/iconos/oleos-azul.svg">
    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 2rem; padding: 0rem 10rem;">
        <h2 style="color: #9D325E;">¡Bienvenido!</h2>
        <p style="font-family: 'GorditaRegular'; color: #3D3D3D; font-size: 1.2rem; text-align: center;">Únete a la Familia MLP y se parte del equipo formador de nuestros Futuros Líderes del Mundo.</p>
    </div>

    <div style="width: 100%; margin: 1rem 0">
        <h3 style="font-family: 'GorditaBold'; color: #2A344F; font-size: 1.8rem; text-align: center; margin: 2rem 0;">Convocatorias vigentes</h3>
        <div style="display: flex; justify-content: flex-start; align-items: flex-start; gap: 2rem; min-height: 350px;">
            <div style="width: 100%; position: relative;">
                <button id="drop_trabaja_1" style="position: absolute; font-family: 'GorditaMedium'; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; width: 100%; text-align: start; background-color: #2A344F; padding: .5rem 2rem; border: 1px solid #2A344F; color: white; height: 4.5rem; border-radius: 3rem;">
                    <div style="display: flex; flex-direction: column;">
                        <span style="font-family: 'GorditaBold'; font-size: 1.5rem; ">Puesto: Lorem Ipsum</span>
                        <span style="font-family: 'GorditaRegular'; font-size: 1.1rem; ">Nivel: Primaria / Preparatory</span>
                    </div>
                    <img style="width: 1.5rem;" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
                </button>
                <div id="opcion-1" style="min-height: 10rem; padding: 4.5rem 3rem 2rem 3rem; border: 1px solid #707070; border-radius: 2rem; width: 100%; margin: 1rem 0; justify-content: center; align-items: flex-start; display: none; flex-direction: column;">
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B;"><strong>Formación:</strong></p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B;">Egresados de Educación</p>
                    <br>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B;"><strong>Requisitos: </strong></p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B;">Buen dominio de inglés</p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B;">Experiencia con metodología IB</p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B;">Experiencia con metodología Montessori</p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B;">Experiencia con Disciplina Positiva</p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B;">Experiencia con Google Workspace</p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B;">Experiencia con Zoom</p>
                </div>
            </div>
            <div style="width: 100%; position: relative;">
                <button id="drop_trabaja_2" style="position: absolute; font-family: 'GorditaMedium'; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; width: 100%; text-align: start; background-color: #2A344F; padding: .5rem 2rem; border: 1px solid #2A344F; color: white; height: 4.5rem; border-radius: 3rem;">
                    <div style="display: flex; flex-direction: column;">
                        <span style="font-family: 'GorditaBold'; font-size: 1.5rem;">Puesto: Lorem Ipsum</span>
                        <span style="font-family: 'GorditaRegular'; font-size: 1.1rem;">Nivel: Primaria / Preparatory</span>
                    </div>
                    <img style="width: 1.5rem;" src="<?php echo IMG?>/iconos/icon_more.svg" alt="">
                </button>
                <div id="opcion-2" style="min-height: 10rem; padding: 4.5rem 3rem 2rem 3rem; border: 1px solid #707070; border-radius: 2rem; width: 100%; margin: 1rem 0; justify-content: center; align-items: flex-start; display: none; flex-direction: column;">
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem;color: #53699B;"><strong>Formación:</strong></p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem;color: #53699B;">Egresados de Educación</p>
                    <br>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B"><strong>Requisitos: </strong></p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B">Buen dominio de inglés</p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B">Experiencia con metodología IB</p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B">Experiencia con metodología Montessori</p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B">Experiencia con Disciplina Positiva</p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B">Experiencia con Google Workspace</p>
                    <p style="font-family: 'GorditaRegular'; font-size: 1.1rem; color: #53699B">Experiencia con Zoom</p>
                </div>
            </div>
        </div>
        <div style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 2rem;">
            <p style="font-family: 'GorditaMedium'; color: #53699B; font-size: 1.5rem;">¿Te gustaría formar parte de la familia Max Planck?</p>
            <button id="boton_formulario_trabaja" style="width: fit-content; padding: .5rem 2rem; background-color: #9D325E; color: white; border: 1px solid #9D325E; border-radius: 3rem; font-family: 'GorditaRegular'; font-size: 1.5rem;">Enviar CV</button>
        </div>
    </div>

</section>

<div id="modal-1" style="display:none; height: 100vh; width: 100%; position: fixed; justify-content: center; align-items: center; z-index: 99; top: 0;">
    <div style="background: #3D3D3D 0% 0% no-repeat padding-box; mix-blend-mode: multiply; opacity: 0.69; width: 100%; height: 100%; position: absolute;"></div>
    <div style="width: fit-content; height: auto; padding: 3rem; display: flex; justify-content: center; align-items: flex-start; flex-direction: column; position: relative; z-index: 2; background-color: white; border-radius: 3rem; gap: 2rem;">
        <button id="boton_formulario_trabaja_2" style="border: 1px solid #9D325E; background-color: #9D325E; font-family: 'GorditaBold'; display: flex; justify-content: center; align-items: center; color: white; width: 3.5rem; height: 3.5rem; font-size: 2rem; border-radius: 50%; position: absolute; top: -1rem; right: -1rem;">
            <strong>X</strong>
        </button>
        <h3 style="font-family: 'GorditaBold'; color: #9D325E;">¿Te gustaría formar parte de la Familia MLP?</h3>
        <p tyle="font-family: 'GorditaRegular'; color: #9D325E;">Envíanos tus datos y nos comunicaremos contigo</p>
        <form id="formulario_inputs" style="width: 100%; display: flex; flex-direction: column; gap: 1rem;">
            <div style="width: 100%; display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <input style="border: 1px solid #53699B; background-color: white; padding: 1rem 2rem; border-radius: 3rem; color: #53699B; font-family: 'GorditaRegular';" type="text" placeholder="Nombre">
                <input style="border: 1px solid #53699B; background-color: white; padding: 1rem 2rem; border-radius: 3rem; color: #53699B; font-family: 'GorditaRegular';" type="text" placeholder="Apellidos">
            </div>
            <div style="width: 100%; display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <input style="border: 1px solid #53699B; background-color: white; padding: 1rem 2rem; border-radius: 3rem; color: #53699B; font-family: 'GorditaRegular';" type="number" placeholder="Número">
                <input style="border: 1px solid #53699B; background-color: white; padding: 1rem 2rem; border-radius: 3rem; color: #53699B; font-family: 'GorditaRegular';" type="email" placeholder="Correo electrónico">
            </div>
            <div style="width: 100%;">
                <select style="width: 100%; border: 1px solid #53699B; background-color: white; padding: 1rem 2rem; border-radius: 3rem; color: #53699B; font-family: 'GorditaRegular';" name="" id="">
                    <option value="">Puesto al que postula</option>
                    <option value="">Docente</option>
                    <option value="">Auxiliar</option>
                </select>
            </div>
            <label style="font-family: 'GorditaRegular'; color: #9D325E;" for="">Adjunta tu cv*</label>
            <div style="position: relative;">
                <input style="position: absolute; width: 100%; height: 100%; opacity: 0;" type="file">
                <div style="display: flex; justify-content: flex-start; align-items: center; gap: 2rem; font-family: 'GorditaRegular'; color: #9D325E;">
                    <div style="padding: 1rem 2rem; border: 1px solid #707070; border-radius: 3rem; background-color: #D1D1D1;">Seleccionar archivo</div>
                    Ningún archivo seleccionado
                </div>
            </div>
            <label style="font-family: 'GorditaRegular'; color: #9D325E;" for="">máximo 1 archivo de 3 mb, permitidos: pdf</label>
            <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
                <a href="<?php echo esc_url(home_url('/')) ?>/gracias" id="boton_formulario" style="width: fit-content; padding: .5rem 2rem; background-color: #9D325E; color: white; border: 1px solid #9D325E; border-radius: 3rem; font-family: 'GorditaRegular';">Enviar</a>
            </div>
        </form>
    </div>
</div>


<?php get_template_part('inc/join_us');?>

<?php get_footer(); ?>