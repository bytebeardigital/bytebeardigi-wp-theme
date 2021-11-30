<?php

if (is_home()) {
    $banner = get_field('cta_banner', 'options');
} else {
    $banner = get_field('cta_banner');
};

$theme = $banner['theme'];
$content = $banner['content'];

$videoTheme = $theme == 'video';
$video = $banner['background_video'];
if ($banner) : ?>


<div class="cta__banner wrapper <?php echo $theme; ?>-theme">

    <?php if ($videoTheme) : ?>
    <video class="cta__banner--video" autoplay muted loop>
        <source src="<?php echo $video; ?>">
        </source>
    </video>
    <?php endif; ?>
    <div class="cta__banner--container container inner">
        <div class="cta__banner--content">
            <?php echo $content; ?>
        </div>

    </div>
</div>

<?php endif; ?>