 <nav class="navbar nav-color"> <!-- navbar-inverse navbar-static-top -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url(); ?>"><div id="logo">&lt; Px &gt;</div></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                   <li><a class="color-fuente" href="<?php echo get_page_link(get_page_by_title('home')->ID) ?>">Home</a></li>
                    <li><a class="color-fuente" href="<?php echo get_page_link(get_page_by_title('about')->ID) ?>">About</a></li>
                     <li><a class="color-fuente" href="<?php echo get_page_link(get_page_by_title('news')->ID) ?>">News</a></li>
                     <li><a class="color-fuente" href="<?php echo get_page_link(get_page_by_title('archives')->ID) ?>">Archives</a></li>
                     <li><a class="color-fuente" href="<?php echo get_page_link(get_page_by_title('contact')->ID) ?>">Contact</a></li>
                    <?php //wp_list_pages(array( 'title_li'=>'')); ?>
                </ul>
            </div>
        </div>
    </nav>