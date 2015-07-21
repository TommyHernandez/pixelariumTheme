</div>
<!-- /.container -->
<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Pixelarium</h3>
                <p>Somos una joven empresa que nació en 2014, con la asociacion de sus miembros fundadores Sergio Martín y Pedro T. Hernández. </p>
                <p>Actualmente el campo de acción de la empresa son los programas de gestion y TPV tanto en movil como en escritorio y las aplicaciones web en todas sus variantes, webs, blogs, tiendas virtuales...</p>
            </div>
            <div class="col-md-4">
                <h3>Posts más comentados</h3>
                <ul>
                    <?php $result=$wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 3"); //cambia este numero a la cantidad de posts que quieras que se muestren 
    foreach ($result as $post) { setup_postdata($post); $postid = $post->ID; $title = $post->post_title; $commentcount = $post->comment_count; if ($commentcount != 0) { ?>
                    <li>
                        <a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>">
                            <?php echo $title ?>
                        </a> {
                        <?php echo $commentcount ?> }</li>
                    <?php } } ?>
                </ul>
                <h3>Post populares por visitas</h3>
                <?PHP if(function_exists( 'app_get_mostpopular')) ?>
                <?php wpp_get_mostpopular( 'limit=3' ); ?>
            </div>
            <!-- /columna central -->
            <div class="col-md-4">
                <a class="twitter-timeline" href="https://twitter.com/PixelariumStd" data-widget-id="574515089438564352"  data-chrome="nofooter"
  data-tweet-limit="3" >Tweets por @PixelariumStd.</a>
                <script>
                    !function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0],
                            p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");
                </script>
                <p>© 2015 Pixelarium Studio</p>
            </div>

        </div>
    </div>
    <!-- fin del conatiner del footer -->
</footer>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" title="" data-original-title="Copy to clipboard">
    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">
        <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1422870593618">
        <param name="allowScriptAccess" value="sameDomain">
        <param name="scale" value="exactfit">
        <param name="loop" value="false">
        <param name="menu" value="false">
        <param name="quality" value="best">
        <param name="bgcolor" value="#ffffff">
        <param name="wmode" value="transparent">
        <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">
        <embed src="/assets/flash/ZeroClipboard.swf?noCache=1422870593618" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit"> </object>
</div>
</body>

</html>