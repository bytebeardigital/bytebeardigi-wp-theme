<?php

if (is_home()) {
    $banner = get_field('cta_banner', 'options');
} else {
    $banner = get_field('cta_banner');
};

$theme = $banner['theme'];
$content = $banner['content'];

if($banner): ?>

<div class="cta wrapper <?php echo $theme; ?>-theme" >
    <div class="cta__banner container inner">
        <div class="cta__banner--content">
            <?php echo $content; ?>
            <p><?php echo $cta_button['url']; ?></p>
        </div>
        
    </div>
</div>

<?php endif;?>