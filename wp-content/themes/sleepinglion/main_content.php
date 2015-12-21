<?php
	$video=get_first_embed_media($post->ID);
	
	$pos = strpos($post->post_content,'<!--more-->');
	
	if ($pos === false) {
		$more_exists=false;
	} else {
		$more_exists=true;
	}	
?>
<article>
	<?php if($video): ?>
	<span class="vvqbox vvqvimeo embed-responsive embed-responsive-4by3" style="margin-top:0;margin-bottom:0">		
	<?php echo $video ?>
	</span>
	<?php else: ?>			
		<?php if(has_post_thumbnail()): ?>
		<div class="img">
			<?php $defalt_arg =array('class' => "img-responsive"); ?>						
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('et-featured-small-thumb', $defalt_arg) ?></a>
		</div>
		<?php endif ?>
	<?php endif ?>
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>" ><?php the_title(); ?></a></h2>
		<?php if(!$video): ?>		
		<p class="hidden-xs"><?php the_time('Y.m.d') ?></p>
		<?php endif ?>
</article>
