<nav class="navbar nav-color">
    <!-- navbar-inverse navbar-static-top -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <div id="logo">&lt; Px &gt;</div>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php  wp_nav_menu(array('theme_location' => 'primary','menu_class'=> 'color-fuente nav navbar-nav')); ?>
        </div>
    </div>
</nav>