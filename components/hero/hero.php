<?php
//hero

if (is_home()) {
    $hero = get_field('hero', 'options');
} else {
    $hero = get_field('hero');
};

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
if($hero): ?>
<div 
    id="hero"
    class=" hero hero__size--<?php echo $size; ?> hero__theme--<?php echo $theme?>"
    <?php
if ($noTheme) {
    echo 'no theme';
} elseif ($darkTheme) {
    echo 'style="background-image:' . $dark_gradient .  ', url(); background-position: center;background-size:cover;"';
} else {
    echo 'style="background-image:' . $light_gradient .  ', url(); background-position: center;background-size:cover;"';
}
?>
    >
    
    <div class="container hero__direction--<?php echo $direction; ?>">
    <span class="hero--heading"><?php echo $hero['heading']; ?></span>
    <h1 class="hero__title"><?php echo $subtext; ?></h1>

    <?php if(is_home()) {
        echo '<p class="slogan">Web Design + Development</p>';
    } ?>
    </div>
</div>
<?php endif; ?>

