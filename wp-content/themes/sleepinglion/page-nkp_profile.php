<?php get_header() ?>
<div id="sub_main_wrap">
<div class="container">	
	<div class="row">
		<div id="sub_main" class="col-sm-12 col-md-8 col-lg-9">
			
<article  id="profile" class="tabs-left profile-tab et_sliderfx_fade et_sliderauto_false et_sliderauto_speed_5000 et_slidertype_left_tabs clearfix">

				<div class="et_left_tabs_bg"></div>
				<ul id="profile_tab_menu" class="et-tabs-control">
			<li <?php if(empty($_GET['type'])): ?>class="active"<?php else: ?><?php if($_GET['type']=='life'): ?>class="active"<?php endif ?><?php endif ?>>
				<a href="?type=life">
			경력
		</a></li>

		<li <?php if(isset($_GET['type'])): ?><?php if($_GET['type']=='school'): ?>class="active"<?php endif ?><?php endif ?>><a href="?type=school">
			학력
		</a></li>
		</ul> <!-- .et-tabs-control -->

		<div class="et-tabs-content" style="overflow: hidden; position: relative;">
			<div class="et-tabs-content-main-wrap">
				<div class="et-tabs-content-wrapper">
					<div class="et_slidecontent" <?php if(empty($_GET['type'])): ?>style="display: block;"<?php else: ?><?php if($_GET['type']=='life'): ?>style="display: block;"<?php endif ?><?php endif ?>>
			<h2>경력</h2>
<ul class="road">
<li>
<div class="date">2014. 7 ~ 현재</div>
<div>제 34대 경기도 도지사 (민선6기)</div>
</li>
<li>
<div class="date">2013. 7 ~ 2014. 5</div>
<div>국회 동북아역사왜곡대책특별위원회 위원장</div>
</li>
<li>
<div class="date">2013. 4 ~</div>
<div>대한민국 국가모델연구모임 대표</div>
</li>
<li>
<div class="date">2013. 3 ~&nbsp;2015. 3</div>
<div>한국 인터넷디지털엔터테인먼트협회(KIDEA) 회장</div>
</li>
<li>
<div class="date">2012. 8 ~ 2014. 5</div>
<div>국회 교통안전포럼 대표</div>
</li>
<li>
<div class="date">2012. 6 ~ 2014. 6</div>
<div>새누리당 경제민주화실천모임 대표</div>
</li>
<li>
<div class="date">2012. 2 ~ 2014. 5</div>
<div>한-독 의원친선협회</div>
</li>
<li>
<div class="date">2012. 9 ~ 현재</div>
<div>새누리당 지역화합특별위원회 위원장</div>
</li>
<li>
<div class="date">2011.&nbsp;7 ~ 2011. 12</div>
<div>한나라당 최고위원</div>
</li>
<li>
<div class="date">2010.&nbsp;9 ~ 2011. 11</div>
<div>국회 외교통상토일위원회 위원장</div>
</li>
<li>
<div class="date">2010. 2 ~ 2010. 6</div>
<div>한나라당 인재영입위원회 위원장</div>
</li>
<li>
<div class="date">2008 ~ 현재</div>
<div>IEF(한ㆍ중 국제 e-Sports 대회) 공동조직위원장</div>
</li>
<li>
<div class="date">2006. 8 ~2008. 8</div>
<div>한나라당 경기도당 위원장(재선)</div>
</li>
<li>
<div class="date">2004. 5 ~ 2005. 3</div>
<div>한나라당 원내수석부대표</div>
</li>
<li>
<div class="date">2004 ~ 현재</div>
<div>대한장애인아이스하키 협회 회장</div>
</li>
<li>
<div class="date">2001. 12 ~ 2002. 12</div>
<div>한나라당 대변인</div>
</li>
<li>
<div class="date">2001. 5 ~ 2001. 12</div>
<div>한나라당 총재비서실 부실장</div>
</li>
<li>
<div class="date">1999. 9</div>
<div>한나라당 미래를 여는 청년연대(미래연대) 공동대표</div>
</li>
<li>
<div class="date">1998. 12</div>
<div>한나라당 원내부총무</div>
</li>
<li>
<div class="date">1998. 7 ~ 2014. 5</div>
<div>제 15, 16, 17, 18, 19대 한나라당 국회의원</div>
</li>
<li>
<div class="date">1993 ~ 1994</div>
<div>경인일보 사회, 정치, 경제부 기자</div>
</li>
</ul>
		</div>

		<div class="et_slidecontent" <?php if(isset($_GET['type'])): ?><?php if($_GET['type']=='school'): ?>style="display: block;"<?php endif ?><?php endif ?>>
			<h2>학력</h2>
<ul class="road">
<li>
<div class="date">1983</div>
<div>경복고등학교 졸업</div>
</li>
<li>
<div class="date">1988</div>
<div>연세대학교 사회사업학과 졸업</div>
</li>
<li>
<div class="date">1996</div>
<div>美 예일대학교 경영대학원 졸업 (경영학 석사, 1994. 8 &ndash; 1996. 5)</div>
</li>
</ul>
		</div>
				</div>
			</div>
		</div>
</article>
					</div>				
				<?php get_sidebar() ?>	
			</div>			
		</div>			
	</div>	
	
<?php
	wp_enqueue_script('profile-js', get_template_directory_uri() . '/js/profile.js', '1.0.0', true); 
get_footer() 
?>
