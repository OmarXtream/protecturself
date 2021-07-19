<?php
  // header
  include 'sections/head.php';
  // nav
  include 'sections/nav.php';

  $titleOfPage = "تواصل معنا";

  include 'sections/pageT.php';
 ?>

 <div class="PageContent">
   <div class="container">
     <h4>بإمكانك التواصل معنا عن طريق النموذج التالي:</h4>

     <div class="row">
       <div class="col-md-8 mt-4">
         <!-- form -->
         <form id="contactForm" data-parsley-validate="" method="post" data-parsley-required-message="هذا الحقل مطلوب">
           <div class="form-group d-none">
             <input type="text" class="form-control" name="formOmar" id="formOmar">
           </div>

           <div class="form-group">
             <input type="text" class="form-control" name="name" id="formName" placeholder="الإسم الكامل" data-parsley-trigger="change" data-parsley-minlength="6" data-parsley-minlength-message="يجب عليك كتابة ستة أحرف على الأقل" required>
           </div>

           <div class="form-group">
             <input type="email" class="form-control" name="email" id="formEmail" placeholder="البريد الإلكتروني" data-parsley-trigger="change" data-parsley-type-message="يجب عليك كتابة إيميل صحيح " required>
           </div>

           <div class="form-group">
             <textarea class="form-control" name="msg" id="msg" placeholder="رسالتك" rows="4" data-parsley-trigger="change" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="500" data-parsley-minlength-message="يجب عليك كتابة ثلاثون حرفا على الأقل" data-parsley-validation-threshold="10"required></textarea>
           </div>
		   
           <div class="form-row">
			<div class="form-group col-md-8">
             <div class="g-recaptcha" data-sitekey="6Le-GMAUAAAAAOelQADqrkISFIfJJxU0BK5MzPOm"></div>
			</div>

			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-secondary btn-lg float-right">إرسال</button>
			</div>
		  </div>
		  
         </form>
       </div>
     </div>
   </div>
 </div>


<?php
  require_once 'sections/scripts.php';
?>

<script>
     $('#contactForm').parsley();
     $("#contactForm").submit(function(e) {
       e.preventDefault();
       var form = $(this);
       if($('#contactForm').parsley().isValid())
       {
		 if (grecaptcha === undefined) {
			Swal.fire({
			  title: "خطأ",
			  text: "من فضلك تحقق من أنك لست روبوت",
			  type: "error"
			});
			throw new Error("Empty RECAPTCHA");
		}

		var response = grecaptcha.getResponse();
		if (!response) {
			Swal.fire({
				title: "خطأ",
				text: "من فضلك تحقق من أنك لست روبوت",
				type: "error"
			});
			throw new Error("Robot Check");
		}

         sendData("msg.php", form.serialize())
           .then(function(response)
           {
             Swal.fire(
               {
                 title: response.t,
                 text: response.m,
                 type: response.tp,
                 showConfirmButton: response.b,
                 confirmButtonText: 'حسناً'
               });

             if(response.tp == 'error')
             {

             }
             else if(response.tp == 'success')
             {
               $('#contactForm')[0].reset();
               $('#contactForm').parsley().reset();
             }
           });
       }
     });
</script>

<?php
  include 'sections/footer.php';
 ?>
