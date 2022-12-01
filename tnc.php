<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Funzstation</title>  
    
<?php include("header-js.php");
include 'connect.php';
?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="http://mobilecafe4u.mobi/uae/css/custom.css"></link>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="<?=$production;?>"></script>
</head>

<body>
<!--SCRIPT ADDED BY RAJENDRA-->
<!--SCRIPT ENDED BY RAJENDRA-->
<div class="main-con main-box">
   <div class="container">
      <div class="fun-inner">
        <div class="head-box" style="background:black;">
           <img src="images/logo.png" class="img-fluid">
            <div class="upper-list" >
              <!--<select class="lanuage" onchange="javascript:location.href = this.value;">-->
			  <!--<select class="language" onchange="javascript:location.href = this.value;">
                <span class="only-en"><option class="language-option optionEn" href="javascript:void(0); value="en">ENGLISH</option></span>
                <span class="only-ar"><option class="language-option optionAr" href="javascript:void(0); value="ar">ARABIC</option></span>
              </select>-->
			  	<!--<div style="float:right">-->
					<span class="only-ar"><a class="language-option optionEn" href="javascript:void(0);">English</a></span>
					<span class="only-en"><a class="language-option optionAr" href="javascript:void(0);">Arabic</a></span>
				<!--</div>-->
            </div>
        </div>
		<div class="subheading" style="color:#110000">
    </div>
        <div class="main-box main-inner banner-main">
          <div class="fig-box">
            <img class="img-fluid" src="images/banner1.gif">
          </div>
			<!--FOR ENGLISH-->
           <div class="condition-box only-en">
            <!--<p>You will subscribe in funzstation for 3 Egyptian Pound/Daily. To cancel your subscription, for Orange Egypt subscribers please send STOP FZS to 5030 , for vodafone Egypt subscribers please send STOP FZS to 6699 , for Etisalat Egypt subscribers please send STOP FZS to 1722 and for We Egypt subscribers please send STOP FZS to 4041. To cancel from the site please go to http://funzstation.com/eg and click on hamburger button and in menu choose unsubscribe (un-subscription is for free ). For any inquires please contact us on support@arshiyainfosolutions.com.</p>-->
            <h4 align="center"><b>TERMS AND CONDITIONS</b></h4>
            <ul>
            <li><p>By subscribing to the funzstation service you are accepting all Terms & Conditions of the service & authorize to share your mobile number with Arshiya info Solutions.</p></li>
			<li><p>All other standard operator terms and conditions apply. Please note data charges may apply as per your tariff plan. Please check with your operator from time to time for the charges that may apply in your case.</p></li>
			<li><p>To make use of this service, one must be more than 18 years old or have received permission from your parents or person who is authorized to pay your mobile bill.</p></li>
			<li><p>Subscription would be automatically renewed, and your account would be debited with AED 12 per Week. This will be billed via mobile bill or deducted automatically from your Prepaid balance.</p></li>
			</ul>	
          </div>
		  <!--FOR ENGLISH CLOSE-->
		  <!--FOR ARABIC-->
		  <div class="condition-box only-ar">
            <h4 align="center"><b>الأحكام والشروط  </b></h4>
            <ul>
            <li><p>بالاشتراك في خدمة funzstation ، فإنك تقبل جميع شروط وأحكام الخدمة وتفوض مشاركة رقم هاتفك المحمول مع Arshiya info Solutions. </p></li>
			<li><p>تطبق جميع شروط وأحكام المشغل القياسية الأخرى. يرجى ملاحظة أنه قد يتم تطبيق رسوم البيانات وفقًا لخطة التعريفة الخاصة بك. يرجى مراجعة المشغل من وقت لآخر لمعرفة الرسوم التي قد تنطبق في حالتك. </p></li>
			<li><p>للاستفادة من هذه الخدمة ، يجب أن يكون عمر الشخص أكثر من 18 عامًا أو حصل على إذن من والديك أو الشخص المخول بدفع فاتورة هاتفك المحمول. </p></li>
			<li><p>سيتم تجديد الاشتراك تلقائيًا ، وسيتم خصم 12 درهمًا إماراتيًا من حسابك في الأسبوع. ستتم محاسبتك عن طريق فاتورة الهاتف المحمول أو يتم خصمها تلقائيًا من رصيد الدفع المسبق الخاص بك. </p></li>
			</ul>
          </div>
		  <!--FOR ARABIC CLOSE-->
          
        </div>
      </div>
   </div>
</div>

<?php include("footer-js.php")?>

</body>
<script type="text/javascript">
	language();
	function language() {
		var userLang = navigator.language || navigator.userLanguage;
		$('.only-en').hide();
		$('.only-ar').hide();

		var x = document.cookie;
		if (x == null) {
			$('.only-en').show();
			$('#english').hide();
		}
		if (x.search("en") != -1 || x == "" || x == '') {
			document.getElementsByTagName("html")[0].dir = "ltr";
			document.getElementsByTagName("html")[0].lang = "en";

			document.cookie = "lang=en";
			$('.only-en').show();
			$('#english').hide();
		}
		else {
			document.cookie = "lang=ar";
			$('.only-ar').show();
			$('#arabic').hide();
		}
		if (x.search("ar") != -1) {
			document.getElementsByTagName("html")[0].dir = "rtl";
			document.getElementsByTagName("html")[0].lang = "ar";

			$('.only-ar').show();
			$('#arabic').hide();
		}

		$('.optionEn').addClass('current');
		$('.optionAr').click(function () {
			document.getElementsByTagName("html")[0].dir = "rtl";
			document.getElementsByTagName("html")[0].lang = "ar";
			$('#container').css({ 'text-align': 'right' });
			$(this).addClass('current');
			$('.only-en').hide();
			$('#arabbic').hide();
			$('#english').show();
			$('.optionEn').removeClass('current');
			$('.only-ar').show();
			$('#english').show();
			$('#arabic').hide();
			document.cookie = "lang=ar";
			var x = document.cookie;
		});
		$('.optionEn').click(function () {
			document.getElementsByTagName("html")[0].dir = "ltr";
			document.getElementsByTagName("html")[0].lang = "en";
			$('#container').css({ 'text-align': 'left' });
			$(this).addClass('current');
			$('.only-ar').hide();
			$('#arabic').show();
			$('#english').hide();
			$('.optionAr').removeClass('current');
			$('.only-en ').show();
			$('#english').hide();
			$('#arabic').show();
			document.cookie = "lang=en";
			var x = document.cookie;
		});
		if (userLang == 'ar' && $('.optionEn').hasClass("current")) {
			$('.optionAr').click();
		}
	}
</script>
</html>

