<?php
//hero

if (is_home()) {
    $hero = get_field('hero', 'options');
} else {
    $hero = get_field('hero');
};

pr($hero['video_file']);

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
<div id="hero" class=" hero hero__size--<?php echo $size; ?> hero__theme--<?php echo $theme ?>" <?php
                                                                                                    if ($noTheme) {
                                                                                                        echo 'no theme';
                                                                                                    } elseif ($darkTheme) {
                                                                                                        echo 'style="background-image:' . $dark_gradient .  ', url(); background-position: center;background-size:cover;"';
                                                                                                    } elseif ($videoTheme) {
                                                                                                        echo 'style="background-size:cover;"';
                                                                                                    } else {
                                                                                                        echo 'style="background-image:' . $light_gradient .  ', url(); background-position: center;background-size:cover;"';
                                                                                                    }

                                                                                                    ?>>
    <?php if ($theme === 'video') : ?>
    <video class="hero__theme--video--wrapper" autoplay muted loop>
        <source src="<?php echo $hero['video_file']; ?>">
        </source>
    </video>
    <?php endif; ?>
    <div class="container hero__content hero__direction--<?php echo $direction; ?>">
        <span class="hero--heading"><?php echo $hero['heading']; ?></span>
        <?php (!empty($subtext)) ? '<h1 class="hero__title">' . $subtext . '</h1>' : '' ?>

        <?php if (is_home()) {
                echo '<p class="slogan">Web Design + Development</p>';
            } ?>
    </div>
</div>
<?php endif; ?>