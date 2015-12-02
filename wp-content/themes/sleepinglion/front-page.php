<?php get_header('main') ?>
<?php
$t = time();
$time = date("Y.m.d h:i A",$t);

$slide_info =  get_post_meta('122627', '_sol_slider_data'); //main_banner  post ID = 122198
//print_r ($slide_info);
if(count($slide_info)>0):
	$slide=$slide_info[0]['slider'];
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <?php if(count($slide)>0): ?>	
  <!-- Indicators -->
  <ol class="carousel-indicators">
  	<?php $i=0 ?>
  	<?php foreach (range(0,count($slide)-1) as $index=>$value): ?>  	
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $index ?>" <?php if(!$index): ?>class="active"<?php endif ?>></li>
    <?php endforeach ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

  	<?php $i=0 ?>
  	<?php foreach ($slide as $index=>$value): ?>
  	<?php
                $sliderstatus = isset($value['status']) ? $value['status'] : '';
                $sliderdate = isset($value['schedule_meta']) ? $value['schedule_meta'] : '';
                $timetostart = isset($value['schedule_meta_start']) ? $value['schedule_meta_start'] : '';
                $timetoend = isset($value['schedule_meta_end']) ? $value['schedule_meta_end'] : '';
                $link = isset($value['link']) ? $value['link'] : '';
                $linktab = isset($value['linktab']) ? $value['linktab'] : '';

                if ($linktab == '1') {
                    $target = ' target="_blank"';
                }

                if ($sliderdate == 0 || ($timetostart <= $time AND $timetoend >= $time)):
                    if ($sliderstatus == 'active'):
                    	?>
    <div class="item<?php if(!$i): ?> active<?php endif ?>">
      <a <?php echo $target ?> href="<?php echo $link ?>"><img src="<?php echo $value["src"] ?>" alt="<?php echo $value['alt'] ?>" /></a>
      <div class="carousel-caption"><?php echo $value["caption"] ?></div>
    </div>
    <?php endif ?>
    <?php endif ?>
    <?php $i++ ?>
	<?php endforeach ?>
	<?php endif ?>	
  </div>
<?php endif ?>  

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section id="sl_main_message">
	<div class="container">
		<div class="row">
			<h1><q><br /><div>싸우지 않고 소통하며<br> 상생과 통합의 정치로 도민을 행복하게</div><br /></q></h1>
		</div>		
	</div>
</section>


<section id="sl_main_news" class="main_card_view">
	<div class="container">
		<div class="row">
			<div class="triangle">&nbsp;</div>					
			<hgroup>
				<h2>NEWS</h2>
				<h3>남결필 도지사와 함께 만들어가는 이야기</h3>
			</hgroup>
			<?php $query = new WP_Query(array( 'category_name' => 'news','posts_per_page' => 3) ); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php get_template_part('main_content'); ?>
			<?php endwhile; wp_reset_postdata(); else: ?>
			<?php __('No Article','sleepinglion') ?>
			<?php endif ?>
		</div>
	</div>
</section>

<section id="sl_menu_content">
	<div class="container">
		<div class="row">
			<div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
			
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			<div class="col-xs-6 col-sm-6 col-md-3">
				<a href="" title="연합정치">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_01.png" alt="" class="img-circle hidden-xs" />					
					<h3>연합정치</h3>
					<p>권한을 나누어 싹을 틔우는 경기연정</p>
				</article>
				</a>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-3">
				<a href="" title="안전">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_02.png" alt="" class="img-circle hidden-xs" />					
					<h3>안전</h3>
					<p>안전한 경기도 꼭 실현하겠습니다.</p>
				</article>
				</a>
			</div>
			
			<div class="col-xs-6 col-sm-6 col-md-3">
				<a href="" title="일자리">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_03.png" alt="" class="img-circle hidden-xs" />					
					<h3>일자리</h3>
					<p>일자리 넘치는 경기도를 만들겠습니다.</p>
				</article>
				</a>
			</div>
			
			<div class="col-xs-6 col-sm-6 col-md-3">
				<a href="" title="북부발전">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_04.png" alt="" class="img-circle hidden-xs" />					
					<h3>북부발전</h3>
					<p>경제, 통일의 도시로 거듭나겠습니다.</p>
				</article>
				</a>
			</div>									
		</div>

    <div class="item">
			<div class="col-xs-6 col-sm-6 col-md-3">
				<a href="" title="플러스복지">					
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_05.png" alt="" class="img-circle hidden-xs" />					
					<h3>플러스복지</h3>
					<p>따뜻한 복지공동체, 경기도가 따뜻해집니다.</p>			
				</article>
				</a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3">
				<a href="" title="교통">						
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_06.png" alt="" class="img-circle hidden-xs" />					
					<h3>교통</h3>
					<p>안전하고 편리한 교통은 기본입니다.</p>			
				</article>
				</a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3">
				<a href="" title="경제">						
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_07.png" alt="" class="img-circle hidden-xs" />					
					<h3>경제</h3>
					<p>사회적 경제활성화는 서민경제의 희망입니다.</p>		
				</article>
				</a>
			</div>
		</div>
	
    		
			</div>			
		
		
  <ol class="carousel-indicators">
  	<?php foreach (range(0,1) as $index=>$value): ?>  	
    <li data-target="#carousel-example-generic3" data-slide-to="<?php echo $index ?>" <?php if(!$index): ?>class="active"<?php endif ?>></li>
    <?php endforeach ?>
  </ol>
		
		</div>
	</div>
</section>

<section id="sl_main_sub_message">
	<div class="container">
		<div class="row">	
			<hgroup>
				<h2>소통과 참여</h2>
				<h3>다양한 방법으로 의견을 듣겠습니다</h3>
			</hgroup>
			<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
				
				
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    	<div class="col-md-4">    	
      	<a href="" title=""><img width="175" height="175" src="/wp-content/uploads/page_img/banner01_01.png" alt="" class="img-circle" /></a>
      	<h3><a href="" title="도지사에게 바란다">도지사에게 바란다</a></h3>
    	</div>
    	<div class="col-md-4">
      	<a href="" title=""><img width="175" height="175" src="/wp-content/uploads/page_img/banner01_02.png" alt="" class="img-circle" /></a>
      	<h3><a href="" title="Next 경기를 소개합니다.">Next 경기를 소개합니다</a></h3>
    	</div>
    	<div class="col-md-4">
      	<a href="" title=""><img width="175" height="175" src="/wp-content/uploads/page_img/banner01_03.png" alt="" class="img-circle" /></a>
      	<h3><a href="" title="민선 6기 공약 실천 계획">민선 6기 공약 실천 계획</a></h3>
    	</div>
    </div>
    <div class="item">
    	<div class="col-md-4">
      	<a href="" title=""><img width="175" height="175" src="/wp-content/uploads/page_img/banner01_01.png" alt="" class="img-circle" /></a>
      	<h3><a href="" title="민선 6기 1주년 성과와 비전">민선 6기 1주년 성과와 비전</a></h3>
    	</div>
    </div>
  </div>			
				
  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>				
			</div>			
		</div>
	</div>
</section>

<section id="sl_main_field" class="main_card_view">
	<div class="container">
		<div class="row">
			<div class="triangle">&nbsp;</div>			
			<hgroup>
				<h2>소통 현장속으로</h2>
				<h3>안전하고 따뜻한 경기도를 함께 만들어 나가겠습니다</h3>
			</hgroup>
			<?php $query = new WP_Query(array('cat' => 2130,'posts_per_page' => 1,'meta_query' => array(array( 'key' => '_thumbnail_id')))) ?>
			<?php $category_link = get_category_link(2130) ?>			
			<?php if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="col- col-sm-4 col-md-4">
<article>
		<?php if(has_post_thumbnail()): ?>
		<div class="img">
			<?php $defalt_arg =array('class' => "img-responsive" ); ?>						
			<a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', $defalt_arg); ?></a>
		</div>
		<?php endif; ?>	
	<h2><a href="<?php echo esc_url( $category_link ); ?>" title="<?php the_title_attribute(); ?>" ><?php echo '도지사가 갑니다' ?></a></h2>
	<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></p>
</article>
</div>
			<?php endwhile; wp_reset_postdata(); else: ?>
			<?php __('No Article','sleepinglion') ?>
			<?php endif ?>
			
			<?php $query = new WP_Query(array('cat' => 2559,'posts_per_page' => 1,'meta_query' => array(array( 'key' => '_thumbnail_id')))) ?>
			<?php $category_link = get_category_link(2559) ?>
			<?php if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="col- col-sm-4 col-md-4">
<article>
		<?php if(has_post_thumbnail()): ?>
		<div class="img">
			<?php $defalt_arg =array('class' => "img-responsive" ); ?>						
			<a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', $defalt_arg); ?></a>
		</div>
		<?php endif; ?>	
	<h2><a href="<?php echo esc_url( $category_link ); ?>" title="<?php the_title_attribute(); ?>" ><?php echo '도지사와 부지사가 갑니다' ?></a></h2>
	<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></p>
</article>
</div>
			<?php endwhile; wp_reset_postdata(); else: ?>
			<?php __('No Article','sleepinglion') ?>
			<?php endif ?>
					
			<?php $query = new WP_Query(array('cat' => 2558,'posts_per_page' => 1,'meta_query' => array(array( 'key' => '_thumbnail_id')))) ?>
			<?php $category_link = get_category_link(2558); ?>
			<?php if ( $query->have_posts() ) :
			 while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="col- col-sm-4 col-md-4">
<article>
		<?php if(has_post_thumbnail()): ?>
		<div class="img">
			<?php $defalt_arg =array('class' => "img-responsive" ); ?>						
			<a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', $defalt_arg); ?></a>
		</div>
		<?php endif; ?>	
	<h2><a href="<?php echo esc_url( $category_link ); ?>" title="<?php the_title_attribute(); ?>" ><?php echo '기업애로현장방문' ?></a></h2>
	<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></p>
</article>
</div>
			<?php endwhile; wp_reset_postdata(); else: ?>
			<?php __('No Article','sleepinglion') ?>
			<?php endif ?>					
		</div>
	</div>
</section>

<?php get_footer() ?>
