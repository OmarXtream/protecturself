<?php
  // header
  include 'sections/head.php';
  // nav
  include 'sections/nav.php';

  $titleOfPage = "قوة كلمة مرورك";

  include 'sections/pageT.php';
 ?>
<style>

/* Webkit based browsers */
meter[value="1"]::-webkit-meter-optimum-value { background: red; }
meter[value="2"]::-webkit-meter-optimum-value { background: yellow; }
meter[value="3"]::-webkit-meter-optimum-value { background: orange; }
meter[value="4"]::-webkit-meter-optimum-value { background: green; }

/* Gecko based browsers */
meter[value="1"]::-moz-meter-bar { background: red; }
meter[value="2"]::-moz-meter-bar { background: yellow; }
meter[value="3"]::-moz-meter-bar { background: orange; }
meter[value="4"]::-moz-meter-bar { background: green; }

</style>
 <div class="PageContent">
   <div class="container">
     <h4>اكتشف قوة كلمات المرور</h4>
     <p>يرجى العلم بأنه لا يتم تسجيل البيانات الخاصة بك..</p>
<hr>
	   
<label for="password">كلمة المرور</label>
<input type="password" id="password" required>

<meter max="4" id="password-strength-meter"></meter>
     <div class="row">

<div class="col-md-3">

<p><i class="fa fa-shield-alt"></i> القوة : <b id="password-strength-text"></b></p>
</div>
<div class="col-md-3">
<p><i class="fa fa-exclamation-circle"></i> تحذير : <b id="password-strength-feedback"></b></p>
</div>

<div class="col-md-6">

<p><i class="fa fa-lightbulb"></i> اقتراح : <b id="password-strength-suggestions"></b></p>
</div>

 <hr>

<div class="col-md-3">
<small>
  الهجوم على خدمة متصلة ب الانترنت بمعدل 100 محاولة في الساعة
</small><hr>
<p id="password-time-text"></p>

     </div>
<div class="col-md-3">
<small>
  الهجوم على خدمة متصلة ب الانترنت  بمعدل 10 محاولات في الثانية
</small><hr>

<p id="password-time2-text"></p>

     </div>
<div class="col-md-3">
<small>
هجوم بطىء متعدد غير متصل ب الانترنت بإستهداف محدد وعناصر تشفير خاصه
</small><hr>

<p id="password-time3-text"></p>

     </div>
<div class="col-md-3">
<small>
هجوم سريع متعدد غير متصل ب الانترنت بإستهداف محدد وعناصر تشفير خاصه سريعه
</small><hr>

<p id="password-time4-text"></p>

     </div>

   </div>
 </div>
 </div>


<?php
  require_once 'sections/scripts.php';
?>
<script src="js/strengh.js"></script>
<script src="js/pos.js"></script>

<?php
  include 'sections/footer.php';
 ?>
