 <?php
    get_header();
?>
<?php include "navegacion.php" ?>
           <!-- Comienza el Container -->
           <div class="container">
           <h2>Ultimas noticias</h2>      
    <?php $pos=1; if(have_posts()):while (have_posts()):the_post(); ?>
        <hr class="featurette-divider">
        <div class="row featurette">
            <?php  if ($pos%2!=0){ ?>
            <div class="col-md-5">
               <?php if(has_post_thumbnail() ){ the_post_thumbnail('medium',array('class'=>"featurette-image img-responsive"));}else { ?>
                    <img src="<?php bloginfo('template_directory'); ?>/images/notimg.png" alt="no imagen"/>                    
   <?php  } ?>
            </div>
            <?php } // fin del if?>
            <div class="col-md-7">
               <p class="categoria">Categoria: <a href=""><?php the_category(","); ?></a></p>
                <h2 class="featurette-heading"> <a href="<?php the_permalink(); ?>"><?php the_title() ; ?> </a><span class="text-muted"></span></h2>
                <p class="autor">Autor: <a href=""><?php the_author(); ?></a></p><p> <?php the_time("l, F js, Y"); ?></p> &gt; <a href=""><p > <?php comments_number("Sin comentarios","1 comentario","% Comentarios"); ?></p></a>
                <p class="lead"> <?php the_excerpt(); ?></p>
            </div>
            <?php if($pos%2==0){ ?>
                <div class="col-md-5">
                   <?php  if(has_post_thumbnail()){ the_post_thumbnail('medium',array('class'=>"featurette-image img-responsive"));}else { ?>
                        <img src="<?php bloginfo('template_directory'); ?>/images/notimg.png" alt="no imagen"/>                    
                   <?php }?>
                </div>
            <?php } /* fin del if*/ ?> 
        </div>
<?php endwhile; else: ?>
       <h3>No se encontraron POST </h3>
       <?php endif; ?>    
        </div>           
            <!-- /coainer fin del mismo -->
         <?php
    get_footer();
?>