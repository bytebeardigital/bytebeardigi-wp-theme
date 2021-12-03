<?php

/**
 * Template Name: About Page
 *

 */
//hero
$hero = get_field('hero');
get_header();

$direction = $hero['direction'];
$image = $hero['background_img'];
$subtext = $hero['content'];
$size = $hero['size'];
$theme = $hero['theme'];

$dark_gradient = "linear-gradient(rgba(33, 45, 64, .80), rgba(33, 45, 64, .80))";
$light_gradient = "linear-gradient(rgba(236, 232, 232, .75), rgba( 236, 232, 232, .75))";

//THEMES
$noTheme = $theme == 'noTheme';
$lightTheme = $theme == 'light';
$darkTheme = $theme == 'dark';
$videoTheme = $theme == 'video';
if ($hero) : ?>
<div id="hero" class=" hero hero__size--<?php echo $size; ?> >
    <?php if ($theme === 'video') : ?>
    <video class=" hero__theme--video--wrapper" autoplay muted loop>
    <source src="<?php echo $hero['video_file']; ?>">
    </source>
    </video>
    <?php endif; ?>
    <div class="container hero__content hero__direction--<?php echo $direction; ?>">
        <span class="hero--heading"><?php echo $hero['heading']; ?></span>
        <?php if (!empty($subtext)) : ?>
        <h1 class="hero__title"><?php echo $subtext; ?></h1>
        <?php endif; ?>

    </div>
</div>
<?php endif; ?>
<div class="about-wrapper " style="margin-top: 75px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="big-heading">Who I Am</h2>
            </div>
            <div class="col-lg-9">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php
component('cta-banner');
// component('cta-skills');
get_footer();
?>