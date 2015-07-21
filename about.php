<?php /* Template Name: ABOUT */ ?>
<?php get_header(); ?>
<?php include "navegacion.php" ?>
<!--div class="container"-->
<div class="container">
    <div class="row">
        <?php the_post(); ?>
        <div class="col-md-12">
            <h1 class="entry-title"> <?php the_title(); ?></h1>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/images/about.png" width="200" height="200" alt="imgagen de la empresa" />
        </div>
        <div class="col-md-8">
            <blockquote class="blockquote-reverse">
                <p>When you say, "I wrote a program that crashed Windows," people just stare at you blankly and say, "Hey, I got those with the system, for free."</p>
                <footer class="footer-cita">Torvalds, Linus <cite title="Source Title"> 03-08-1995</cite>
                </footer>
            </blockquote>
        </div>
    </div>
    <br>
    <div class="row">
        <br>
        <div class="col-md-12">
           <h1>Biografia</h1>
            <p>Somos una pequeña empresa de desarrollo de software, fundada en 2014 por Pedro Tomás Hernández y Sergio Martin.</p>
            <p>El primer trabajo para una empresa formal se completo en Septiembre de ese mismo año, completando así varios meses de desarrollo de la aplicacion PlayGestion, que era un TPV para la Empresa Granadina Play-Tuning, en ese mismo año tambien completaro a modo de prueba una web para esta compañia.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, exercitationem mollitia accusantium illum sint, porro nisi distinctio obcaecati quidem perspiciatis quasi sunt tempora corporis! Illum sed accusantium, iusto numquam deleniti.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, exercitationem mollitia accusantium illum sint, porro nisi distinctio obcaecati quidem perspiciatis quasi sunt tempora corporis! Illum sed accusantium, iusto numquam deleniti.</p>

        </div>

    </div>
    <br>

    <?php get_footer(); ?>