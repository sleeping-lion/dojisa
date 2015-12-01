<article class="sl_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
	<p class="date"><?php the_date('Y.m.d'); ?></p>
	
	<?php if(get_the_tag_list() != ''): ?>
			<div class="tags">
				<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
				<?php
				$posttags = get_the_tags();
$count=0;
if ($posttags) {
	$output = '';
	foreach($posttags as $tag) {
		$count++;
		$output .=' <a href="/tag/'. $tag->name . '" style="color:red" title="태그 '. $tag->name .'로 보기">#'. $tag->name . '</a> &nbsp; ';
		if( $count >4 ) break;
	}
}
echo $output;
				 ?>									
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