         </main>

         
         <footer class="site-footer text-light">
            
            <hr>

            <div class="site-footer__group">

                <p class="colophon">&copy; 2018 | Adam Norris</p>

                <ul class="list-reset list-inline">
                    <li><a class="plain-link" href="http://#">TW</a></li>
                    <li><a class="plain-link" href="http://#">LI</a></li>
                </ul>

                <div class="theme-picker">
                    <ul class="list-reset list-inline">
                        <li>R</li>
                        <li>Y</li>
                        <li>G</li>
                        <li>B</li>
                    </ul>

                </div>

            </div>

        </footer>
            
        <?php wp_footer(); ?>

        <?php if(is_single()) {
            // only fire highlight.js on single post pages
            echo '<script>hljs.initHighlightingOnLoad();</script>';
        } ?>


        <div><!-- site-wrapper -->
    
    </body>
</html>