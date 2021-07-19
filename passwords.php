<?php
  // header
  include 'sections/head.php';
  // nav
  include 'sections/nav.php';

  $titleOfPage = "كلمات السر";

  include 'sections/pageT.php'
 ?>

 <div class="PageContent">
   <div class="container">
     <h4>إصنع كلمة المرور الخاصة بك:</h4>
     <p>يرجى العلم بأنه لا يتم تسجيل البيانات الخاصة بك..</p>

     <form class="password" method="post">
       <div class="form-row">
         <div class="form-group col-sm-12 col-md-4 mb-4">
           <label for="lang">لغة الرمز</label>
           <select id="lang" name="lang" class="form-control">
             <optgroup label="ينصح بها">
               <option value="0" selected>إنجليزي</option>
             </optgroup>
             <optgroup label="إستخدامات خاصة - لا ينصح بها">
               <option value="1" disabled>عربي</option>
               <option value="2" disabled>فرنسي</option>
               <option value="3" disabled>يوناني</option>
             </optgroup>
           </select>
         </div>

         <div class="form-group col-sm-12 col-md-4 mb-4">
           <label for="length">طول الرمز</label>
           <select id="length" name="length" class="form-control">
             <optgroup label="ضعيف">
               <?php
                  for ($s1 = 8; $s1 <= 15; $s1++) {
                    echo "<option value=$s1>$s1</option>";
                  }
                ?>
             </optgroup>

             <optgroup label="معتدل">
               <option value="16" selected>16</option>
               <?php
                  for ($s1 = 17; $s1 <= 64; $s1++) {
                    echo "<option value=$s1>$s1</option>";
                  }
                ?>
             </optgroup>

             <optgroup label="خبالي">
               <?php
                  for ($s1 = 65; $s1 <= 256; $s1++) {
                    echo "<option value=$s1>$s1</option>";
                  }
                ?>
             </optgroup>
           </select>
         </div>
       </div>

       <div class="form-row">
         <div class="form-group col-md-4 mb-4">
           <div class="form-check">
             <input class="form-check-input" type="checkbox" id="numbers" name="numbers" checked>
             <label class="form-check-label" for="numbers">
               تتضمن أرقام
             </label>
           </div>
         </div>

         <div class="form-group col-md-4 mb-4">
           <div class="form-check">
             <input class="form-check-input" type="checkbox" id="sLetters" name="sLetters" checked>
             <label class="form-check-label" for="sLetters">
               تتضمن الأحرف الصغيرة
             </label>
           </div>
         </div>
       </div>

       <div class="form-row">
         <div class="form-group col-md-4 mb-4">
           <div class="form-check">
             <input class="form-check-input" type="checkbox" id="cLetters" name="cLetters" checked>
             <label class="form-check-label" for="cLetters">
               تتضمن الأحرف الكبيرة
             </label>
           </div>
         </div>

         <div class="form-group col-md-4 mb-4">
           <div class="form-check">
             <input class="form-check-input" type="checkbox" id="mSym" name="mSym" checked>
             <label class="form-check-label" for="mSym">
               تتضمن الرموز الرئيسية
             </label>
           </div>
         </div>
       </div>

       <div class="form-row">
         <div class="form-group col-md-4 mb-4">
           <div class="form-check">
             <input class="form-check-input" type="checkbox" id="uSym" name="uSym" checked>
             <label class="form-check-label" for="uSym">
               إستبعاد الرموز الفرعية
             </label>
           </div>
         </div>

         <div class="form-group col-md-4 mb-4">
           <div class="form-check">
             <input class="form-check-input" type="checkbox" id="selectPass" name="selectPass" checked>
             <label class="form-check-label" for="selectPass">
               تحديد كلمة السر تلقائياً
             </label>
           </div>
         </div>
       </div>

       <div class="form-row">
         <div class="form-group col-md-4 mb-4">
           <div class="form-check">
             <input class="form-check-input" type="checkbox" id="Nosimilar" name="Nosimilar" checked>
             <label class="form-check-label" for="Nosimilar">
               عدم تشابة بالرموز
             </label>
           </div>
         </div>

         <!-- <div class="form-group col-md-4 mb-4">
           <div class="form-check">
             <input class="form-check-input" type="checkbox" id="passShow" name="passShow" checked>
             <label class="form-check-label" for="passShow">
               إظهار كلمة السر
             </label>
           </div>
         </div> -->
       </div>

       <div class="form-row">
         <div class="form-group col-12 col-md-3 mb-4">
           <button onclick="d2O(); event.preventDefault();" class="btn btn-secondary btn-md">إنشاء</button>
         </div>

         <div class="form-group col-12 col-md-4 mb-4">
           <input type="text" class="form-control" id="passRes" name="passRes" value="ستظهر كلمة السر الجديدة هنا">
         </div>

         <div class="form-group col-12 col-md-4 mb-4">
           <input type="text" class="form-control" id="passHint" name="passHint" value="تذكير كلمة السر (أقل من 50 رمز)">
         </div>
       </div>
     </form>
   </div>
 </div>

<?php include 'sections/scripts.php'; ?>

 <script src="js/password.js"></script>

<?php
  include 'sections/footer.php'
 ?>
