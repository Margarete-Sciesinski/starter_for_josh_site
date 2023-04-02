<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>
<!--SECTION 2 ABOUT JOSH-->
    <section class="container-fluid aboutbg text-center">
        <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2>
                </div> <!-- container -->
    </section>

<!--SECTION 3 LATEST ARTICLES-->
<section class="container-fluid articlesbg">
    <div class="container">
        <div>
            <h3 class="text-center">LATEST ARTICLES</h3>
        </div>

        <div class="row"> <!-- gives access to BS columns -->
            <div class="col-md-4 text-center">
                <img class="img-fluid" alt=“portait” src="http://170.187.231.66/~mesh17/wp-content/themes/starter_for_josh_site/images/a-portrait.jpg">
                <h4 class="article-title">A PORTRAIT</h4>
                <p class="date">12 December 2020</p>
                <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.</p>
                <a class="readmore" href="#">CONTINUE READING</a>
            </div>
                
            <div class="col-md-4">
                <img class="img-fluid" alt=“portait” src="http://170.187.231.66/~mesh17/wp-content/themes/starter_for_josh_site/images/a-model.jpg">
                <h4>A MODEL</h4>
                <p>12 December 2020</p>
                <p>STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.</p>
                <a href="#">CONTINUE READING</a>
            </div>

            <div class="col-md-4">
                <img class="img-fluid" alt=“portait” src="http://170.187.231.66/~mesh17/wp-content/themes/starter_for_josh_site/images/a-gamesdesign.jpg">
                <h4>A GAMES DESIGN</h4>
                <p>12 December 2020</p>
                <p>STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.</p>
                <a href="#">CONTINUE READING</a>
            </div>

        </div> <!-- columns -->
    </div> <!-- container -->
</section> <!-- container-fluid -->
<?php get_footer();?>