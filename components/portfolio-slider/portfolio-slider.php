<?php

$project_link = get_field('project_link');
$args = array(
    'post_type' => 'Projects'
);
$loop = new WP_Query($args);
?>

<div class="portfolio component container">
       <h2 class="big-heading">PAST WORK</h2>
        <div class="row">
        <div class="portfolio__slide" dir="rtl">
        <?php while( $loop->have_posts() ) : $loop->the_post() ; ?>
        <a href="<?php echo (!empty($project_link)) ? $project_link : '' ; ?>" class="portfolio__slide_card col">
                <img src="<?php the_post_thumbnail_url(); ?>" class="portfolio__slide_card--img" alt=""/>
                <h5 class="project-title"><?php echo the_title(); ?></h5>
        </a>
        <?php endwhile; ?>
        </div>
        <div class="more-button justify-content-end">
            <a href="<?php echo get_post_type_archive_link('projects');?>" class="button button__size--medium button__color--light button__theme--deep">See More</a>
        </div>
        </div>
</div>