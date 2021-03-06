         </main>

         
         <footer class="site-footer">
            
            <hr>

            <div class="site-footer__group">

                <p class="colophon">&copy; 2018 | Adam Norris</p>

                <ul class="site-footer__social list-reset list-inline">
                    <li>
                        <a href="https://twitter.com/intent/follow?original_referer=&amp;region=follow_link&amp;screen_name=acnorrisuk&amp;tw_p=followbutton&amp;variant=2.0" target="_blank" rel="noopener" aria-label="Twitter (opens in new window)">
                            <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://uk.linkedin.com/in/adam-norris-ab2590a0" target="_blank" rel="noopener" aria-label="Linked In (opens in new window)">
                            <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"/>
                            </svg>
                        </a>
                    </li>
                </ul>

                <fieldset class="theme-picker">
                <legend class="screen-reader-text">Choose a theme:</legend>
                    <input id="default" class="screen-reader-text" type="radio" name="theming" checked>
                    <label for="default"><span class="screen-reader-text">Standard</span></label>
                    <input id="dark" class="screen-reader-text" type="radio" name="theming">
                    <label for="dark"><span class="screen-reader-text">High Contrast</span></label>
              </fieldset>

            </div>

        </footer>
            
        <?php wp_footer(); ?>

        <?php if(is_single()){
            	echo '<script>hljs.initHighlightingOnLoad();</script>';
        } ?>

        <script>
        
            /* Theming */ 
            (function (){
            
                /* Variables */
                const html = document.querySelector('html');
                const radios = document.getElementsByName('theming');

                /* check localstorage for theme */
                let currentTheme = localStorage.getItem('theme');
                if(currentTheme) {
                    html.setAttribute('data-theme', currentTheme);
                }
            
                /* Loop through radio buttons & apply theme onclick */
                for(var i = 0; i < radios.length; i++){
                    radios[i].onclick = function(){
                    html.setAttribute('data-theme', this.id)
                    localStorage.setItem("theme", this.id);
                    }
                }
            
            })();


        </script>

        </div><!-- site-wrapper -->
    
    </body>
</html>