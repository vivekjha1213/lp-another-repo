
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="robots" content="noindex, nofollow">
		<meta name="googlebot" content="noindex">
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no">
		<title>Stay Home - Stay Safe</title>
		<link rel="stylesheet" href="./index_files/style.css">
		<link rel="shortcut icon" href="https://get-your-access-now.com/favicon.ico" type="image/x-icon">
		<script src="./index_files/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
console.log("start ajax");
$(document).ready(function(){   


    $("#subscribeyes").click(function() {
        var msisdn=$('#msisdn').val();
		var cid=$('#cid').val();
        console.log(msisdn);
        console.log(cid);
        var n = msisdn.length;
        if(n==9 || n==12)
        {	
			if(n==9)
			{ 
				var msisdn=966+msisdn;
				//alert(msisdn);
				//return false;
			}
		}
		else
		{
			//alert("ENTER A VALID MOBILE NUMBER");
			alert("(ENTER A VALID MOBILE NUMBER)");
			// $('#newgen').hide();
			return false;
		}
	
		
            $.ajax({
                type:"POST",
                url:"pin_request.php",
                data:{msisdn:msisdn,cid:cid},
                success:function(result)
                {
                   $('#newgen').hide();
				   var jsonData = JSON.parse(result);
                  	//var jsonData=JSON.stringify(result);
                  	//alert(jsonData.status);
                  	//return false;
                    if (jsonData.status == "0")
                    {   
                        location.href = 'otp_page.php?msisdn='+msisdn+'&cid='+cid+'';
                        return false;
                    }
                    else if(jsonData.status =="1")
                    {
                        location.href = 'http://Funzstation.com/saudi_arabia/?msisdn='+msisdn+'';
                        return false;
                    }
          					else
          					{
          						  alert(jsonData.errorMessage);
                        location.reload();

          					}
        
				}
			});
			
			
		});
});
</script>

	
	</head>
	<body style="">
				<div class="loader">
			<div class="inner">
				<img src="./index_files/spinner.gif" alt="loading">
				<br>
				<h4>Loading ...</h4>
			</div>
		</div>		<div class="wrapper">
			<div class="container">
				
				<div class="header header-blue">
					<div class="phone">
						<img src="./index_files/mobile.png">
					</div>
				</div>				<div class="content blok1">
					<form  method="GET">
						<p class="orange">Enter your phone number</p>
						<div class="phone-control" id="phone-control">
							<span class="flag">
								<img src="./index_files/flag_sa.png">+966							</span>
								<input type="hidden" name="cid" id="cid" value="<?php echo $_GET['cid'];?>">
									<input type="text" name="msisdn" id="msisdn" class="form-input"  value="<?=$_GET['msisdn'];?>" type="tel" inputmode="tel" placeholder="XXXXXXXXX" name="msisdn" value="" maxlength="10" style="width: 7em;" required="" class="tel form-control" id="tel">

														
							<input type="hidden" name="cid" value="">
							
						</div>
												<!-- <div class="form-submit"> -->
							<button type="button" name="subscribe"  class="btn_t btn_sq btn_t-blue btn-door" id="subscribeyes">CONTINUE</button>

							<div id="newgen"></div>
						<!-- </div> -->
					</form>
					<p class="blue">Stay Home - Stay Safe</p>
				</div>
				<div class="mar_auto"><a href="tnc.php">Terms and Conditions</a>

				</div>
						</div>
		</div>
	
</body></html>