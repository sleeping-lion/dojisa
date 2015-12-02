<article class="sl_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(has_post_thumbnail()): ?>
		<?php $defalt_arg =array('class' => "img-responsive",'width'=>false,'height'=>false); ?>
		<a  href="<?php the_permalink(); ?>">
			
<? if( has_post_thumbnail( $post_id ) ): ?>
        <img title="image title" alt="thumb image" class="img-responsive"  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" />
<? endif; ?></a>
	<?php endif ?>
	
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
	<p class="date"><?php the_date('Y.m.d'); ?></p>
	
	<?php if(get_the_tag_list() != ''): ?>
			<div class="tags">
				<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
			<?php the_tags('<span style="color:red">#</span>', '&nbsp; <span style="color:red">#</span>', '<br />'); ?>			
			</div>
	<?php endif ?>
	
	<div class="sl_post_footer col-xs-12 col-sm-6 col-lg-4 col-lg-offset-4 col-offset-3">
		<p class="dd">
			<br />
			.
			<br />
			.
			</p>
			<ul class="social_link">
				<li><a href="" class="blog_link" title="Blog"><span class="point">B</span><span>log</span></a></li>
				<li><a href="" class="twitter_link" title="Twitter"><span class="point">T</span><span>witter</span></a></li>
				<li><a href="" class="facebook_link" title="Facebook"><span class="point">F</span><span>ace Book</span></a></li>
			</ul>
	</div>
</article>