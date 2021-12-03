<?php
$facebook = get_field('facebook', 'options');
$instagram = get_field('instagram', 'options');
$github = get_field('github', 'options');
$youtube = get_field('youtube', 'options');
$linkedin = get_field('linkedin', 'options');
?>

<div class="socialbar">
    <div class="socialbar__vert d-flex text-center justify-content-center">

        <?php if (!empty($facebook)) : ?>
        <a href="<?php echo $facebook; ?>" class="social-link row">
            <div class="col-lg-2 icon"><?php echo render_svg('facebook') ?></div>
            <div class="col-10">Facebook</div>
        </a>
        <?php endif; ?>

        <?php if (!empty($instagram)) : ?>
        <a href="<?php echo $instagram; ?>" class="social-link row">
            <div class="col-lg-2 icon"><?php echo render_svg('instagram') ?></div>
            <div class="col-10">Instagram</div>
        </a>
        <?php endif; ?>

        <?php if (!empty($linkedin)) : ?>
        <a href="<?php echo $linkedin; ?>" class="social-link row">
            <div class="col-lg-2 icon"><?php echo render_svg('linkedin') ?> </div>
            <div class="col-10">LinkedIn</div>
        </a>
        <?php endif; ?>

        <?php if (!empty($github)) : ?>
        <a href="<?php echo $github; ?>" class="social-link row">
            <div class="col-lg-2 icon"><?php echo render_svg('github') ?></div>
            <div class="col-10">GitHub</div>
        </a>
        <?php endif; ?>


        <?php if (!empty($youtube)) : ?>
        <a href="<?php echo $youtube; ?>" class="social-link row">
            <div class="col-lg-2 icon"><?php echo render_svg('youtube') ?> </div>
            <div class="col-10">YouTube</div>
        </a>
        <?php endif; ?>
    </div>
</div>