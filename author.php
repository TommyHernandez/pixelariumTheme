<?php get_header(); ?>
<?php include "navegacion.php" ?>
<div>
</div>
<div class="container">
    <div class="row">
        <!-– This sets the $curauth variable –->
        <?php if(isset($_GET[ 'author_name'])) : $curauth=get_userdatabylogin($author_name); else : $curauth=get_userdata(intval($author)); endif; ?>
        <div class="row">
            <div class="col-md-6">
                <h2>Información del Autor: <?php echo $curauth->display_name; ?></h2>
                <p><strong>Blog personal:</strong><span class="removed_link" title="Blog personal"><a href="$curauth->user_url"><?php echo $curauth->user_url; ?></a></span>
                </p>
                <p><strong>Perfil:</strong>
                    <?php echo $curauth->user_description; ?></p>
                <h2>Últimos artículos de <?php echo $curauth->display_name; ?>:</h2>
            </div>
            <div class="col-md-6">
                <h3>Miembro desde:<span><?php echo $curauth->user_registered; ?></span></h3>
                <h3>Con el rol principal de: <span><?php echo $curauth->wp_capabilities[1]; ?></span></h3>
            </div>
        </div>
        <div class="row">
           <div class="col-md-12">
                <ul>
                <!–- The Loop –->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                        <?php the_title(); ?> </a>
                </li>
                <?php endwhile; else: ?>
                <p>
                    <?php echo "Este autor no tiene artículos publicados"; ?>
                </p>
                <?php endif; ?>
                <!--END LOOP-->
            </ul>
           </div>           
        </div>
    </div>
</div>

<?php get_footer();?>