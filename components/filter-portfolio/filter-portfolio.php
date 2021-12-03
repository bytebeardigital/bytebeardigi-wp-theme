<?php

$args = array(
    'post_type' => 'projects',
    'post_status' => 'publish',
    $categories = get_terms(array(
        'taxonomy' => 'project_categories',
    )),
    'posts_per_page' => 9
);

$loop = new WP_Query($args);

$terms = get_terms('project_categories');
?>
<div class="container portfolio">
    <div class="row">
        <div class="col-lg-2">
            <div id="filters" class="nav flex-column">
                <a class="nav-link all-link" data-filter="*">ALL</a>
                <?php if ($terms) : ?>
                <?php foreach ($terms as $term) : ?>
                <a class="nav-link" data-filter=".<?php echo $term->slug ?>"><?php echo $term->name; ?></a>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-10">

            <?php if ($loop) : ?>
            <div id="projectGrid" class="row">
                <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php
                            $termsArray = get_the_terms($loop->ID, 'project_categories');
                            $termsString = "";
                            foreach ($termsArray as $term) {
                                $termsString .= $term->slug . ' ';
                            };

                            $project_link = get_field('project_link');
                            ?>
                <a href="<?php echo $project_link; ?>"
                    class="sing-project col-6 col-lg-4 mb-4 <?php echo $termsString; ?>">
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
    </div>
</div>