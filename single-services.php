<?php
/**
 * Default post template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

get_header();
?>
<div class="container singleService">
    <div class="row">
            <img class="img-fluid singleService__featuredImage" src="<?php the_post_thumbnail_url();?>"/>
    </div>
	<article class="singleService__content">
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		<?php the_content(); ?>
	</article>
</div>
<?php
get_footer();
