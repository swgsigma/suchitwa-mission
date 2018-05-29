<?php
if(!isset($_SESSION))
{
	session_start();
}	// end if(!isset($_SESSION))
include("indexheader.php");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Suchitwa Mission</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!--*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*-->
<!--*-----------------------------------------------------------------------------------------------------------STYLESHEET----------------------------------------------------------------------------------------------------------*-->
		  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
		  <link rel="stylesheet" href="plugins/morris/morris.css">
		  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
		  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
		  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
		  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
		<link rel="stylesheet" href="css/header-basic.css">
<!--*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*-->
<!--*-------------------------------------------------------------------------------------------------------------JAVASCRIPT---------------------------------------------------------------------------------------------------------*-->
<script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  
  
function staff()
{
	
	change_td_color(1);
	document.getElementById('identifier').value=1;
	document.getElementById('username').style.display='block';
	document.getElementById('password').style.display='block';
	document.getElementById('reg_name').style.display='none';
	document.getElementById('mob_num').style.display='none';
	
}
 function registration()
{
	
	change_td_color(2);
	document.getElementById('identifier').value=2;
	
	document.getElementById('reg_name').style.display='block';
	document.getElementById('mob_num').style.display='block';
	document.getElementById('username').style.display='none';
	document.getElementById('password').style.display='none';
}

		
function mob_num_val(val)
{
	var len=val.length;
	var res = val.charAt(0);
	if(len<10 || res==0 || res==1|| res==2|| res==3|| res==4|| res==5|| res==6)
	{
	 alert("Enter a valid Mobile number");
	 document.getElementById('mob_num').value="";
	 document.getElementById('mob_num').focus();
	}

}

function blockSpecialChar(e)
       {
            var k = e.keyCode;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8   || (k >= 48 && k <= 57));
        }

function onlyAlphabets(e, t)
 {
            try 
			{
                if (window.event) 
				{
                    var charCode = window.event.keyCode;
                }
                else if (e) 
				{
                    var charCode = e.which;
                }
                else 
				{ 
				return true;
				 }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode==8))
				{
                    return true;
				}
                else
				{
                    return false;
				}

            }

            catch (err)
			 {
                alert(err.Description);
             }

        }
		
function change_td_color(id)
{
	for(var i=1;i<=2;i++)
	{
		if(i==id)
			document.getElementById("log"+id).style.backgroundColor='#999999';
		else
			document.getElementById("log"+i).style.backgroundColor='lightgray';
	}
}

function test()
{
	var identifier=document.getElementById('identifier').value;
	if(identifier==1)
	{
		var username=document.getElementById('username').value;
		var password=document.getElementById('password').value;
		var captcha_code=document.getElementById('captcha_code').value;
		if(username && password )
		{
			if(captcha_code)
			{
					document.getElementById('username').value="";
					document.getElementById('password').value="";
					document.getElementById('captcha_code').value="";
					window.parent.location.href='page.php?identifier='+identifier+'&username='+username+'&password='+password+'&captcha_code='+captcha_code;
			}
			else
			{
					alert("Please Enter Captcha");
					document.frm.captcha_code.focus();
					return false;
			}
		}
	
	}
	else
	{
		var reg_name=document.getElementById('reg_name').value;
		var mob_num=document.getElementById('mob_num').value;
		var captcha_code=document.getElementById('captcha_code').value;
		var n=0;
		if(reg_name && mob_num)
		{
			if(captcha_code)
			{
				n=mob_num.length;
				
				document.getElementById('reg_name').value="";
				document.getElementById('mob_num').value=""
				document.getElementById('captcha_code').value="";
				if(n==10)
				{
					window.parent.location.href='page.php?identifier='+identifier+'&reg_name='+reg_name+'&mob_num='+mob_num+'&captcha_code='+captcha_code;
				}
				else
				{
					alert("Mobile Number Should Have 10 Digits");
					document.frm.mob_num.focus();
					return false;
				}
			}
			else
			{
					alert("Please Enter Captcha");
					document.frm.captcha_code.focus();
					return false;
			}
			
			
		}
	}
	
	
}

</script>

<!--*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*-->
</head>
<!--*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*-->
<!--*-------------------------------------------------------------------------------------------------------------LOGIN DESIGN------------------------------------------------------------------------------------------------------*-->
<!-- <body style="background: url(img/home.jpg) no-repeat; width: 100%; height: 150px; background-size: 100%;"> -->
<body>
		
	<!-- 	-->
	<div class="well-sg" style="margin:180px;"></div><!--div class="well-sg" style="margin:200px"-->
	<div class="col-sm-12">
		<ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3></h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
            <li><span>Image 05</span><div><h3></h3></div></li>
            <li><span>Image 06</span><div><h3></h3></div></li>
        </ul>
		<div class="col-sm-8"></div>
		<div class="col-sm-3">
			<div class="login-box">
				<div class="login-logo">
				</div><!--div class="login-logo"-->
				
								<div class="container-fluid">
 
 
  <div class="row" style="background-color:#CCCCCC">
  <!--  <p><font color="#000000"><b>Sign in to start your session</b></font></p>
-->
    <div class="col-sm-5 col-md-6" style="background-color:#999999; height:30px;" onClick="staff();" id="log1"><b>Staff Login</b></div>
    <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0" style="background-color:lightgray; height:30px;" onClick="registration();" id="log2">
	<b>Guest Login</b></div>
  	</div>
	</div>
				<div class="login-box-body" align="center" style="background-color:#f0efef;">
				
										
							<form action="" method="post">
							
							<div class="form-group has-feedback">
							
								<input type="text" class="form-control" id="username" name="username" placeholder="User Name" 
								onCopy="return false" onPaste="return false" maxlength="20" onKeyDown="return onlyAlphabets(event, this.value);" required>
									   
								<input type="text" class="form-control" id="reg_name" name="reg_name" placeholder="Enter Your Name" onCopy="return false" onPaste="return false" maxlength="20"
								onkeypress="return blockSpecialChar(event),onlyAlphabets(event, this.value);" 
								style="display:none" required>
								
								<span class="glyphicon glyphicon-user form-control-feedback"></span>
								
							</div>
							
							<div class="form-group has-feedback">
							
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" 
								onCopy="return false" onPaste="return false" maxlength="20" required>
								
								<input type="text" class="form-control" id="mob_num" name="mob_num" placeholder="Enter Your Mobile Number" maxlength="10" size="10" 
								onCopy="return false" onPaste="return false" 
								onKeyDown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" required style="display:none" onchange="return mob_num_val(this.value);">
					
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							</div><!--div class="form-group has-feedback"-->
							<div class="form-group has-feedback" style="float:left">
							<input type="hidden" id="identifier" name="identifier" value="1">
									<input name="captcha_code" type="text" id="captcha_code" class="txtboxcaptch" placeholder="Enter captcha"  
											alt="Enter captcha" title="Enter captcha"  maxlength="6" style="width:90px;" onCopy="return false" onPaste="return false" required>
												<img id="cap"  src="img/captcha_code.php"  />
													<a class="capcha-refresh" href="#" onClick="document.getElementById('cap').src = 'img/captcha_code.php?' + Math.random(); return false">
												<img src="img/refresh.jpeg"  width="25" border="0" /></a>
							</div>
							<div class="row" style="height:40px; ">
								<div class="col-xs-8"></div>
								<div class="col-xs-4">
									<input type="submit" class="btn btn-primary btn-block btn-flat"  name="btnlogin" id="btnlogin" onClick="return test();" value="Sign In" 
									style="size:50px; ">
									
								</div>
							</div>
							
							<div class="row" style="height:40px; ">
								<div class="col-xs-8"></div>
								<div class="col-xs-4">
									
								</div>
							</div>
							
						</form>
						<!--<a href="#">I forgot my password</a><br>-->
				</div><!--div class="login-box-body"-->
			</div><!--div class="login-box"-->
		</div><!--div class="col-sm-4"-->
	</div><!--div class="col-xs-12"-->
</body><!--body class="hold-transition login-page"-->
</html>
