<div class="wrap">
	<div id="icon-options-general" class="icon32">
		<br />
	</div>
	<h2>네이버 블로그 API</h2>
	<h3>기본 설정</h3>
	<hr />
	<form action="options-general.php?page=<?php echo $this -> plugin_file; ?>" method="post">
		<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y" />
		<?php settings_fields($this -> name); ?>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row"><label for="blogapi_id">Naver Blog ID : </label></th>
					<td><input type="text" size="70" id="api_id" name="blogapi_id" value="<?php echo $this -> options['blogapi_id']; ?>"  /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="blogapi_pw">Naver Blog API : </label></th>
					<td><input type="text" size="70" id="blogapi_pw" name="blogapi_pw" value="<?php echo $this -> options['blogapi_pw']; ?>"  /></td>
				</tr>
			</tbody>
		</table>
		<?php submit_button(); ?>
	</form>

	<h3>사용 방법 및 유의사항</h3>
	<hr />
	<ul>
		<li>
			네이버블로그 상단 내메뉴 > 관리 > 메뉴글관리 > 글쓰기 API 설정에서 API 키를 발급 받아 기본셋팅에 설정
		</li>
		<li>
			저의 개인사이트 기준으로 기능 작동여부를 확인 했습니다. 사이트의 환경에 따라 작동이 안되는 경우가 발생할 수 있으니 참고하시기 바라오며, 플러그인 사이트에 <a href="http://hints.co.kr/project/naverblogapi-plugin/" target="_blank">피드백</a> 주시기 바랍니다.
		</li>
	</ul>
	
</div>
