<?php
get_header();
$test_img = get_field('test_image', 'options');
$test_vid = get_field('test_video', 'options');


//hero
$hero = get_field('hero');

?>
<?php echo 

component('hero');?>
<div class="container hello">
   <div class="row">
    <div class="block--inner component" >
       <p class="hello__content">I'm Bryanna a front-end developer + designer, based out of Detroit, MI. I'm passionate about blending the art of design with the skill of programming to create bright, modern, and engaging websites for companies, creatives, and everyone in-between.</p>

    </div>
</div>

</div>
<?php
component('service-slider');
component('cta-banner');
component('portfolio-slider');
component('footer-cta');
get_footer();


?>

