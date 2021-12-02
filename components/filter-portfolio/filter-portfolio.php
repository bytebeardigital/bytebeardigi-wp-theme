<?php

$args = array(
    'post_type' => 'projects',
    'post_status' => 'publish',
    $categories = get_terms(array(
        'taxonomy' => 'project_categories',
        'orderby' => 'name',
        'order' => 'DESC'
    )),
    'posts_per_page' => 20
);

$loop = new WP_Query($args);


$terms = get_terms('project_categories');
?>
<div class="container">
    <div class="row">
        <div class="fl-content col-lg-12">
            <?php $terms = get_terms('project_categories'); ?>
            <?php if ($terms) : ?>
            <ul id="filter-controls" class="nav justify-content-center filter clearfix">
                <li><button class="active nav-link" data-filter="*"><span>All</span></button></li>
                <?php foreach ($terms as $term) {
                        echo "<li><button class='active nav-link' href='#' data-filter='.$term->slug'><span>$term->name</span></button></li>";
                    } ?>
            </ul><!-- /my-category -->
            <?php endif; ?>

            <?php if ($loop) : ?>
            <div class="project__container">
                <div class="project__container--row  filter-grid row">
                    <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
                                $project_link = get_field('project_link');
                        ?>
                    <div class="col-4 col-md-6 grid-item project-single">
                        <a href="<?php echo $project_link; ?>" class="project__single--link">
                            <?php echo (has_post_thumbnail()) ? the_post_thumbnail() : '' ?>
                            <h3 class="project__single--title"><?php the_title(); ?></h3>
                        </a>
                    </div>
                    <?php endwhile;
                        endif; ?>
                </div>
            </div>
            <?php endif; ?>

        </div><!-- end of row -->
    </div>
</div> <!-- end of archive container -->