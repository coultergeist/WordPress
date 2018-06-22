<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
    
<div id="copyright">
<?php 
    echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); 
    echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); 
    echo sprintf( __( 'Valid HTML' ), '<a href="http://validator.w3.org/check?uri=referer"</a>'); 
    echo sprintf( __( 'Valid CSS' ), '<a href="http://validator.w3.org/check?uri=referer"</a>'); 

    ?>
    
</div>
</footer>
</div>
<?php wp_footer(); ?>

<script>
<!--Accordian javascript-->
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}                     
</script>
    
</body>
</html>