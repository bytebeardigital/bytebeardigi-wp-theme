<?php
/**
* Template Name: About Page
*

*/
//hero
$hero = get_field('hero');
get_header();

component('hero');
?>
<div class="about-wrapper "  style="margin-top: 75px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="big-heading">Who I Am</h2>
            </div>
            <div class="col-lg-9">
                <?php the_content();?>
            </div>
        </div>
    </div>
</div>
<?php 
component('cta-banner');
// component('cta-skills');
get_footer();
?>