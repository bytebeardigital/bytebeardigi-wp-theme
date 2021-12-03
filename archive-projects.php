<?php

$args = array(
    'post_type' => 'projects',
    'post_status' => 'publish',
    $categories = get_terms(array(
        'taxonomy' => 'project_categories',
    )),
    'posts_per_page' => -1
);

$loop = new WP_Query($args);
$terms = get_terms('project_categories');
get_header();

$project_link = get_field('project_link'); ?>
<div id="hero" class=" hero hero__mini hero__size--small" style="background-color: #CDDFE5; margin-bottom: 50px;">

    <div class="container">
        <span class="hero--heading"><?php echo $hero['heading']; ?>Portfolio</span>
        <h1 class="hero__title"><?php echo $subtext; ?>Work</h1>
    </div>
</div>
<div class="container portfolio">
    <div class="row mb-5">
        <div id="filters" class="nav justify-content-center">
            <a class="nav-link all-link" data-filter="*">ALL</a>
            <?php if ($terms) : ?>
            <?php foreach ($terms as $term) : ?>
            <a class="nav-link" data-filter=".<?php echo $term->slug ?>"><?php echo $term->name; ?></a>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if ($loop) : ?>
    <div id="projectGrid" class="row">
        <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
        <?php
                    $termsArray = get_the_terms($post->ID, 'project_categories');
                    $termsString = "";
                    foreach ($termsArray as $term) {
                        $termsString .= $term->slug . ' ';
                    }
                    ?>
        <a href="<?php echo $project_link; ?>" class="col-lg-3 sing-project mb-4 <?php echo $termsString; ?>">
            <div class="project-single">
                <?php echo (has_post_thumbnail()) ? the_post_thumbnail() : '' ?>
                <div class="hover-contain">
                    <h3 class="project-title"><?php the_title(); ?></h3>
                </div>
            </div>
        </a>
        <?php endwhile;
            endif; ?>
    </div>
    <?php endif; ?>
</div>
<?php
get_footer();;