<?php

$args = array(
    'post_type' => 'Services'
);
$loop = new WP_Query($args);

$service_icon = get_field('service_icon');
?>

<div class="slider container">
    <h2 class="big-heading">What I do</h2>
    </h2>
    <div class=" service__slide">
        <?php while ($loop->have_posts()) : $loop->the_post();
            $service_icon = get_field('service_icon'); ?>
        <div class="d-flex service__slide--inner">
            <img class="service__slide--img" src="<?php echo $service_icon; ?>" />
            <div class="col-lg-10 service__slide--content">

                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
                </p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>