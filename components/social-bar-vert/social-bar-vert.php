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
        <div class="social-link row">
            <div class="col-lg-2 icon"><?php echo render_svg('facebook') ?></div>
            <div class="col-10">Facebook</div>
        </div>
        <?php endif; ?>

        <?php if (!empty($$instagram)) : ?>
        <div class="social-link row">
            <div class="col-lg-2 icon"><?php echo render_svg('instagram') ?></div>
            <div class="col-10">Instagram</div>
        </div>
        <?php endif; ?>

        <?php if (!empty($linkedin)) : ?>
        <div class="social-link row">
            <div class="col-lg-2 icon"><?php echo render_svg('linkedin') ?> </div>
            <div class="col-10">LinkedIn</div>
        </div>
        <?php endif; ?>

        <?php if (!empty($github)) : ?>
        <div class="social-link row">
            <div class="col-lg-2 icon"><?php echo render_svg('github') ?></div>
            <div class="col-10">GitHub</div>
        </div>
        <?php endif; ?>


        <?php if (!empty($youtube)) : ?>
        <div class="social-link row">
            <div class="col-lg-2 icon"><?php echo render_svg('youtube') ?> </div>
            <div class="col-10">YouTube</div>
        </div>
        <?php endif; ?>
    </div>
</div>