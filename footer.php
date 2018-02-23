        </main>
        
            <!-- <footer class="site-footer">
               <div class="wrap site-footer__contents">
                <svg style="display: none;">
                    <symbol id="twitter-icon" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"></path>
                    </symbol>
                    <symbol id="linkedin-icon" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"></path>
                    </symbol>
                    <symbol id="github-icon" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1664 896q0 251-146.5 451.5t-378.5 277.5q-27 5-39.5-7t-12.5-30v-211q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-121-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-86-13.5q-44 113-7 204-79 85-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-40 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 89t.5 54q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                    </symbol>
                    <symbol id="codepen-icon" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M216 1169l603 402v-359l-334-223zm-62-144l193-129-193-129v258zm819 546l603-402-269-180-334 223v359zm-77-493l272-182-272-182-272 182zm-411-275l334-223v-359l-603 402zm960 93l193 129v-258zm-138-93l269-180-603-402v359zm485-180v546q0 41-34 64l-819 546q-21 13-43 13t-43-13l-819-546q-34-23-34-64v-546q0-41 34-64l819-546q21-13 43-13t43 13l819 546q34 23 34 64z"></path>
                    </symbol>
                </svg>
                
                    <ul class="site-footer__social">
                    <li>
                        <a href="https://twitter.com/intent/follow?original_referer=&amp;region=follow_link&amp;screen_name=acnorrisuk&amp;tw_p=followbutton&amp;variant=2.0" target="_blank" rel="noopener" aria-label="Twitter (opens in new window)">
                            <svg aria-hidden="true"><use xlink:href="#twitter-icon"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://uk.linkedin.com/in/adam-norris-ab2590a0" target="_blank" rel="noopener" aria-label="Linked In (opens in new window)">
                            <svg aria-hidden="true"><use xlink:href="#linkedin-icon"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/acnorrisuk" target="_blank" rel="noopener" aria-label="Github (opens in new window)">
                            <svg aria-hidden="true"><use xlink:href="#github-icon"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://codepen.io/acnorrisuk/" target="_blank" rel="noopener" aria-label="Codepen (opens in new window)">
                            <svg aria-hidden="true"><use xlink:href="#codepen-icon"/></svg>
                        </a>
                    </li>
                    </ul>
                    
                    <p class="site-footer__colophon">&copy; <?php echo date('Y'); ?> | acnorrisuk</p>
                </div>
            </footer> -->
        
    <?php wp_footer(); ?>

    <?php if(is_single()) {
        // only fire highlight.js on single post pages
        echo '<script>hljs.initHighlightingOnLoad();</script>';
    } ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/fit-text.js"></script>
    <script>
      window.fitText( document.querySelector(".page-title") );
    // window.fitText( document.getElementById("responsive_headline"), 1.2 );
    </script>
    
    </body>
</html>