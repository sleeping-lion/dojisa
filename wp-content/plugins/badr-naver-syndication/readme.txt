=== Naver Syndication V2 ===
Contributors: badrHan
Donate link: http://badr.kr
Plugin URI: http://badr.kr/?p=1152
Tags: syndication, naver, 네이버, 신디케이션
Requires at least: 2.6
Tested up to: 3.9.1
Stable tag: 0.8.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

2014년 7월 새로 공개된 네이버신디케이션 API를 이용 네이버검색서비스와 연동합니다.

== Description ==

네이버 신디케이션 API V2에 대응하는 플러그인입니다.
포스트가 작성, 수정, 휴지통으로 이동, 휴지통에서 복구 될때 마다 네이버 검색서비스에 해당포스트의 주소를 담은 핑을 발송하며
핑을 수신한 네이버봇은 해당 주소를 방문하여 포스트의 정보를 수집해 갑니다.

질문은 [이곳](http://badr.kr/?p=1152 "플러그인 페이지")을 통해서 해주시기 바랍니다.

* 기존 문서 목록 발송
* 연동키 체크
* 문서 정합성 체크
* 핑발송 체크
* 응답 체크
* 색인 확인
* 포스트 메타박스 체크박스


== Installation ==

* 다운로드 받은 파일의 압축을 풀고, wp-content/plugins 디렉토리 하위에 badr-naver-syndication 디렉토리를 업로드하고 플러그인을 활성화 합니다.
* [네이버 웹마스터 도구](http://webmastertool.naver.com/ "네이버웹마스터툴")에서 연동키를 발급받습니다.
* 관리자메뉴의 "설정 > 네이버 신디케이션" 설정페이지에서 발급받은 연동키를 입력하고 저장한 후에 "동작확인" 버튼을 눌러서 "OK"메세지가 나오면 정상적으로 핑을 주고 받는 상태입니다. 

== Screenshots ==

1. 설정화면
2. 동작확인
3. 동작확인중
4. 연동목록
5. 링크 색인 확인
6. 제목 색인 확인

== Changelog ==

= 0.8.3 =

* 확장 파라미터 사용여부 체크 - 일부환경에서 404에러
* 일부 환경에서 포스트 작성시 핑발송 에러 해결

= 0.8.1 =
* php 5.2.8 이상 대응
* 신디케이션연동 파라미터 추가
* 색인확인

= 0.7.4 =
* "동작확인"시 신디케이션서버의 리턴값에 따른 simple_xml에러 처리
* "리셋"시 기존에 색인된 목록에 대하여 삭제핑을 발송하고 다시 전체목록을 보낸다. sendPagePing메서드 수정할 것
* "목록발송"시 post_modified컬럼 업데이트
* post_type 추가

= 0.7.3 =
* 미디어버튼 사용불가 - 제외 카테고리 미선택시 js에러 수정
* 동작확인시 생성되는 임시문서의 정합성에러 발생하는 경우


= 0.7.2 =
* tpl/feeds.php content 노드에 CDATA 태그 제거

= 0.7.1 =
* badr-loger 플러그인이 설치되지 않았을 경우 발생하는 에러 제거

= 0.7 =
* 기존 문서 목록 발송
* 연동키 체크
* 문서 정합성 체크
* 핑발송 체크
* 응답 체크
* 포스트 메타박스 체크박스
