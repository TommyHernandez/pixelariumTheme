<?php /* Template Name: ARCHIVES */ ?>
<?php get_header();?>
<?php include "navegacion.php" ?>
        <!--div class="container"-->
        <div class="container">
        <div class="row">
            <br>
            <div class="col-md-8">
                <?php the_post();?>
                <h1 class="entry-title"> <?php the_title(); ?></h1>
                <h2> Archivos por meses</h2>
                <?php wp_get_archives( 'type=monthly'); ?>
                <h2> Archivos by subjet</h2>
                <?php wp_list_categories(); ?>
                
            </div>
            <div class="col-md-4">
                    <?php get_sidebar();?>
                </div>
    </div>
            <?php get_footer();?>