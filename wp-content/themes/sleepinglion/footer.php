
	
	<!-- close main -->
	</div>
	<!-- close mom -->
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<address><?php echo __('Address','sleepinglion') ?></address><br class="hidden-xs hidden-sm" />
				COPYRIGHT 2015 ALL RIGHTS RESERVED
			</div>
			<div class="col-sm-12 col-md-6">
				<ul class="social_link col-xs-6 col-sm-12 col-md-6">
					<li class="col-xs-4"><a href="http://blog.naver.com/npil2580" class="blog_link" title="새창에서 열림(도지사 남경필 Blog)" target="_blank"><span class="point">B</span><span>log</span></a></li>
					<li class="col-xs-4"><a href="https://twitter.com/yesKP" class="twitter_link" title="새창에서 열림(도지사 남경필 Twitter)" target="_blank"><span class="point">T</span><span>witter</span></a></li>					
					<li class="col-xs-4"><a href="https://www.facebook.com/NamKyungpil" class="facebook_link" title="새창에서 열림(도지사 남경필 Facebook)" target="_blank"><span class="point">F</span><span>ace Book</span></a></li>
				</ul>	
				<ul id="home_sitemap_link" class="hidden-xs hidden-sm col-md-6 ">
					<li><a href="/sitemap" title="<?php echo __('Sitemap','sleepinglion') ?>"><?php echo __('Sitemap','sleepinglion') ?></a></li>					
					<li><a href="/" title="<?php echo __('Home','sleepinglion') ?>"><?php echo __('Home','sleepinglion') ?></a></li>
				</ul>
			</div>
			<div class="visible-xs col-xs-6">
				<a href="" class="btn btn-default col-xs-12">도지사에게 바란다</a>
			</div>			
		</div>
	</div>
</footer>
<?php wp_footer() ?>
<?php if(is_single() OR is_page()): ?>
<script type="text/javascript">
		try {
			ttparam = {
				sitekey : "d7a63e551a0ea0726b2ab2495e06bea78e68df4d",
				ttalkmaindiv : ["ttalk_div_<?php echo get_current_blog_id(); ?>_<?php global $post; echo $post->ID; ?>"],
				ttalkratingdiv : ["ttalk_rating_div_<?php echo get_current_blog_id(); ?>_<?php global $post; echo $post->ID; ?>"],
				article_uid : ["<?php echo get_current_blog_id(); ?>_<?php global $post; echo $post->ID; ?>"],
				article_url : ["<?php echo get_permalink(); ?>"],
				article_catecd : [""],
				article_img : [""],
				article_title : ["<?php echo get_the_title(); ?>"],
				mobile : "n",
				list_view : ["a"]
				}
				var ttalk = new TTalkLoad();
				ttalk.init();
			} catch(e) {}
</script>
<?php endif ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" style="margin:20px 0 0">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo __('Search','sleepinglion') ?></h4>
      </div>
      <div class="modal-body">
        	<form action="/">
      		<div class="input-group form-group-lg">
      <input type="search" name="s" <?php if(isset($_GET['s'])): ?>value="<?php echo $_GET['s'] ?>"<?php endif ?> class="form-control" placeholder="검색어를 넣어주세요">
      <span class="input-group-btn">
      				<button class="btn btn-default btn-lg" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      			</span>
      			</div>
      		</form> 	
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>