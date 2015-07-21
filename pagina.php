<?php /* Template Name: PAGINA */ ?>
   <?php get_header(); ?>
   <?php include "navegacion.php" ?>
<div class="container">
    <?php the_post(); ?>
    <div class="row">
        <div class="col-md-8">
            <h2 class="featurette-heading"><?php the_title() ; ?></h2>
            <?php ob_start(); ?>
            <?php the_content();?>
            <?php $salida= preg_replace( '/(<img.*? class=".*?)(".*?\/")/', '$1'. 'img-responsice full-size aligncenter" '. '$2',ob_get_contents());?>
            <?php $salida= preg_replace( '/(<blockquete>)/', '<blockquote class="piefoto"  ',$salida);?>
            <?php ob_end_clean(); ?>
            <p class="lead">
                <?php echo $salida; ?>
            </p>

        </div>
        <div class="col-md-4">
            <h2 class="featurette-heading"></h2>
            <?php get_sidebar(); ?>
        </div>
    </div>
    </div>    

</div>
<?php get_footer();?>