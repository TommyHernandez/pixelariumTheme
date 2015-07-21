<?php /* Template Name: CONTACT */ ?>
<?php get_header();?>
<?php include "navegacion.php" ?>
<!--div class="container"-->
<div class="container">
    <div class="row">
        <?php the_post(); ?>
        <div class="col-md-12">
            <h1 class="entry-title"> <?php echo get_the_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12718.342169832713!2d-3.595952649999999!3d37.16255335!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1423222343928" width="100%" height="450" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
    <div class="row">
        <br>
        <div class="col-md-12">
            <?php the_post(); ?>
            <?php the_content();?>
            <!--form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Asunto</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Asunto">
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nombre:</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
                </div>
                <div class="form-group">
                   <textarea class="mensaje-form"></textarea>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Aceto que no soy terrorista<label>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form-->
        </div>
    </div>
    <?php get_footer();?>