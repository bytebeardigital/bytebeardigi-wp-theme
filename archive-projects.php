<?php
/**
 * Portfolio Archive
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */
$args = array(
    'post_type' => 'Projects'
);
$loop = new WP_Query($args);
get_header();

$project_link = get_field('project_link');?>
<div 
    id="hero"
    class=" hero hero__mini hero__size--small"
    style="background-color: #CDDFE5" >
    
    <div class="container ">
    <span class="hero--heading"><?php echo $hero['heading']; ?>Portfolio</span>
    <h1 class="hero__title"><?php echo $subtext; ?>Work</h1>
    </div>
</div>

<div class="container" style="margin: 50px auto 75px auto;">
    <div class="row">
        <?php while ($loop->have_posts()) : $loop->the_post();?>
            <div class="col-lg-4 project__card">
                <a href="<?php echo $project_link;?>" class="project__card--link">
                    <img style="object-fit: cover; width: 100%; height: 350px;" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="project__card--image">
                    <div class="project__card--meta">
                        <h3 class="project__card--title"><?php the_title();?></h3>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php
get_footer();