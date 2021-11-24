<?php

$form = get_field('global_form', 'options');
?>

    <div class="cta cta__footer">
        <div class="col-lg-10 mx-auto cta__footer-form">
        <h2 class="big-heading">Wanna Chat</h2>
                <?php echo do_shortcode($form);?>
        </div>
    </div>