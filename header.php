<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b72be65822.js" crossorigin="anonymous"></script>
    <?php wp_head();?>
    
    <?php if (is_404()): ?>
    <title><?php esc_attr_e("Max Ludwig Planck | Página de Error"); ?></title>
    <?php else: ?>
    <title><?php the_title();?></title>
    <?php endif; ?>
    <style>
    
        #modal-content::-webkit-scrollbar {
          width: 10px;
          height: 100%;
        }
        
        #modal-content::-webkit-scrollbar-thumb {
          background-color: #9D325E;
          border-radius: 30px;
        }
        
        #modal-content::-webkit-scrollbar-track {
          background-color: #9d325e3d;
          border-radius: 30px;
        }
    </style>
</head>
<body <?php body_class(); ?>>
<div class="back"></div>
<div class="wsbutton">
    <a href="#" target="_blank">
        <img  class="wsbutton__img" src="<?php echo IMG?>/iconos/icon_wsp.svg" alt="">
    </a>
</div>

    <header>
        <div class="contenedor xl">
            <nav>
                <a href="<?php echo esc_url(home_url('/')) ?>">
                    <picture>
                        <img src="<?php echo IMG?>/logo.svg" class="logo">
                    </picture>
                </a>
                <div class="hamburg">
                   <div></div>
                   <div></div>
                   <div></div>
                </div>
                <div class="navegacion">
                    <?php wp_nav_menu( array('menu' => 'Header de Arriba','theme_location'=>'header-menu','container_class'=>'navegacion_menu navegacion_menu_top','menu_class'=>'ul_menu')); ?>
                    <div class="hr"></div>
                    <?php wp_nav_menu(array('menu' => 'Header de Abajo','theme_location'=>'header-menu','container_class'=>'navegacion_menu navegacion_menu_bottom','menu_class'=>'ul_menu')); ?>
                </div>
            </nav>
        </div>
    </header>
    
