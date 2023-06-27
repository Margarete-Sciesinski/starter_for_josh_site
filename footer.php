<footer class="container-fluid text-center"> <!-- div for the main image that stretches to the edge of the page -->
    
    <div class="container"> <!-- div to hold content in middle of page -->
        <div class="row"> <!-- gives access to BS columns -->

            <div class="col-md-6">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : endif; ?>
            </div>

            <div class="col-md-6">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : endif; ?>
            </div>

        </div> <!-- row -->
    </div> <!-- container -->

</footer>
<?php wp_footer(); ?>
</body>
</html>