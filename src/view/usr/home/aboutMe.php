<?php
$pageTitleIcon = '<i class="far fa-address-card"></i>';
$pageTitle = "나의 소개";


?>
<?php require_once __DIR__ . "/../head.php"; ?>
<?php require_once __DIR__ . "/../../part/toastUiSetup.php"; ?>

<section class="section-home-aboutMe">
  <div class="container mx-auto">
    <div class="con-pad">
      <div>
        <a href="/usr/article/list.php">리스트</a>

      </div>
      
      <hr>

      <div> 관리자 : 유상미</div>
      <div> 생년월일 : 1999.01.27</div>
      <div> 가입날짜 : 2021.07.12</div>
      <div> 소개글 : (수정할 수 있도록 만들기) 블로그 개발중입니다. <br>
          1. 나의 소개 창에서 소개하는 글을 수정할 수 있도록 만들기  <br>
          2. 나의 소개 창에서 나의 게시물만 보이게 하기 <br>
          <br><a href="modify.php">수정</a>
      </div>
    </div>
  </div>
</section>

<section class="section-disqus">
  <div class="container mx-auto">
    <div class="con-pad">
      <div id="disqus_thread"></div>
      
      <style>
      .utterances {
        max-width: 100%;
      }
      </style>
      
      <script src="https://utteranc.es/client.js"
        repo="dbtkdal3690/php_blog_2021_new_comment"
        issue-term="<?=$utterancPageIdentifier?>"
        theme="github-light"
        crossorigin="anonymous"
        async>
      </script>
    </div>
  </div>
</section>
<?php require_once __DIR__ . "/../foot.php"; ?>