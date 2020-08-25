<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="title" content="Fórum negócios experience 2020" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <?php wp_head(); ?>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browsehappy">Seu navegador está <strong>desatualizado</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> para uma melhor navegação</p>
    <![endif]-->

    <header>
        <nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-danger" href="<?php echo esc_url( home_url() ); ?>">
               <?php 

                  if ( has_custom_logo() ) {
                     the_custom_logo(); 
                  } else {
                     echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                  }
               ?>
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapsible">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#section1">HOME</a></li>
                <li><a href="#cardapio">CARDÁPIO</a></li>
                <li><a href="#funcionamento">FUNCIONAMENTO</a></li>
                <li><a href="#destaques">DESTAQUES</a></li>
                <li><a href="#equipe">EQUIPE</a></li>
                <li><a href="#sobre">O SEU RU</a></li>
                <li><a href="#digai">CONTATO</a></li>
            </ul>
        </div>
    </div>
</nav>
    </header>