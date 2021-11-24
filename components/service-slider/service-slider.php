<?php

$args = array(
    'post_type' => 'Services'
);
$loop = new WP_Query($args);
?>

<div class="slider component container">
       <h2 class="big-heading">What I do</h2></h2>
       <div class=" service__slide">
        <?php while( $loop->have_posts() ) : $loop->the_post() ; ?>
        <div class="d-flex service__slide--inner">
                    <img class="service__slide--img" src="<?php echo get_the_post_thumbnail_url();?>" />
                        <div class="col-lg-10 service__slide--content">

                            <h4><?php the_title();?></h4>
                            <p><?php the_excerpt();?></p>
                            </p>
                        </div>
                </div>
        <?php endwhile; ?>
</div>
</div>