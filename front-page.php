 <?php
    get_header();
?>
        <div class="navbar-wrapper">
        <div class="container">
             <?php include "navegacion.php" ?>
        </div>
    </div>
    <!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php bloginfo('template_directory'); ?>/images/angular_bg1-3.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Bienvenido a Pixelariums</h1>
                        <p>Somos una empresa joven de desarrollo de aplicaciones, pero tambien amamos la tecnologia, por ello tambien trabajamos duro en nuestros blog.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory'); ?>/images/linuxbg.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Distribuciones de linux Recemendadas</h1>
                        <p>¿Tienes dudas de que distribución es la más adecuada para tus necesidades?</p>
                        <p><a class="btn btn-lg btn-primary" href="<?php echo get_page_link(get_page_by_title('milinux')->ID) ?>" role="button">Quiero conocer más</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory'); ?>/images/d85b16a839edb781951237b9a1760a5d_large.jpeg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Desarrollo Java desde 0</h1>
                        <p>Si estas apuntado a uno de nuestros cursos de Java desde 0 y quieres ampliar informacion esta es tu sección</p>
                        <p><a class="btn btn-lg btn-primary" href="<?php echo get_page_link(get_page_by_title('aprende')->ID) ?>" role="button">Leer Mas</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory'); ?>/images/maxresdefault%20(1).jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Tecnologias web punteras</h1>
                        <p>Aqui podrás leer y aprender sobre las tecnologías web más punteras</p>
                        <p><a class="btn btn-lg btn-primary" href="<?php echo get_page_link(get_page_by_title('tendencias')->ID) ?>" role="button">Que tecnología web es la que más pita</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
    <!-- /.carousel -->
    <div class="container">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-md-4 centrar">
                <img class="cuadrada" src="<?php bloginfo('template_directory'); ?>/images/yo.png" alt="Foto de un usuario" />               
                <h2><?php $user = get_userdatabylogin("Pedrothdc"); echo $user->first_name;  ?></h2>
                <p class="colum-content"> <?php echo $user->user_description; ?></p>
                <p><a class="btn btn-info" href="/author/Pedrothdc" role="button">Más sobre mí >></a>
                </div>
            <!-- /.col-lg-4 -->
            <div class="col-md-4 centrar">
                <img class="cuadrada" src="<?php bloginfo('template_directory'); ?>/images/sergio.png" alt="Generic placeholder image">
               <h2><?php $user = get_userdatabylogin("sergio"); echo $user->first_name;  ?></h2>
                <p class="colum-content"> <?php echo $user->user_description; ?></p>
                <p><a class="btn btn-info" href="/author/sergio/" role="button">Más sobre mi >></a>
                </p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-md-4 centrar">
                <img class="" src="<?php bloginfo('template_directory'); ?>/images/rafa.png" alt="Foto de usuario" style="width: 140px; height: 140px;">
            <h2><?php $user = get_userdatabylogin("yuri"); echo $user->first_name;  ?></h2>
                <p class="colum-content"> <?php echo $user->user_description; ?></p>
                <p><a class="btn btn-info" href="/author/yuri/" role="button">Más sobre mi >></a>
                </p>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        <!-- Filas de las noticias -->
         <hr class="featurette-divider">
          <?php query_posts('showpost=5'); ?>
    <?php $pos=1; if(have_posts()):while (have_posts()):the_post(); ?>
            <div class="row">
            <?php  if ($pos%2!=0){ ?>
            <div class="col-md-5">
               <?php if(has_post_thumbnail() ){ the_post_thumbnail('medium',array('class'=>"featurette-image img-responsive"));}else { ?>
                    <img src="<?php bloginfo('template_directory'); ?>/images/notimg.png" alt="no imagen"/>                    
   <?php  } ?>
            </div>
            <?php } // fin del if?>
            <div class="col-md-7">
               <h2 class="featurette-heading titulo"> <a href="<?php the_permalink(); ?>"><?php the_title() ; ?> </a></h2>
                <p class="autor"><strong>Autor:</strong> <a href=""><?php the_author_posts_link();//the_author(); ?></a>
                <span class="categoria"><strong>Categoria:</strong><a href="#"><?php the_category(","); ?></a></span>
                </p>
                <p> <strong><?php the_time("l, F j, Y"); ?></strong> &gt; <a href=""> <?php comments_number("Sin comentarios","Solo un comentario","% lo petas"); ?></p></a>
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
        <hr class="featurette-divider">
<?php $pos++;/*variable contadora */ endwhile; else: ?>
       <h1>No hay post</h1>
       <!-- Esto solo se mostrará en caso de que no haya post -->
       <?php endif; ?>    
       
            <!-- /Fin de las filas -->
         <?php
    get_footer();
?>