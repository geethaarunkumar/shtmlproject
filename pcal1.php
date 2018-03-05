
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Calculation</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<style type="text/css">

.headrow
{
width:100%;
height:45px;
background-color:blue;
color:white;
text-align:right;
}
#col11
{
margin-top:50px;margin-left:300px; padding:5px;border:1px solid navy; border-radius:10px;
}
.login
{
font-size:16px;font-weight:bold; text-align:center; margin-top:60px;
}
.uname
{
text-align:center; font-size:14px;
}
.utext
{
margin-left:10px;
}
.btn1
{
margin-left:200px;
}
</style>
<script type="text/javascript">
function validation()
{

			var a=document.login.uname.value;
			var b=document.login.pwd.value;
			if(a=="" && b=="" )
			{
			alert("Pls fill the form");
			return false;
			}
			return true;
}


</script>
</head>

<body>

<div class="headrow">
<img src="img/icon1.jpg" />
<img src="img/icon2.jpg" />
<img src="img/icon3.jpg" />

</div>
<div class="container">
	<div class="row">
	<div class="col-lg-5" id="col11">
				<form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>" name="login"   onsubmit="return validation()">
				<p  class="login">calculation<br/><hr/></p>
				<p  class="uname">First Value <span style="color:red;">*</span>
				<span  class="utext"><input type="text" name="uname" value="" /></span></p>
				<p class="uname">Second Value <span style="color:red;">*</span>
				<span  class="utext"><input type="text" name="pwd" value="" /></span></p>
				<p class="btn1"><input type="button" value="clear" name="button" />
				<input type="submit" value="submit" name="submit"/>
				
				</p>
				<p  style="color:#00FF00; font-size:14px;">
				<?php echo "Result:";?>
<?php

class userinput
{

protected $uname;
protected  $pwd;

public function _Construct($uname,$pwd)
{

$this->uname=$uname;
$this->pwd=$pwd;
}

public function display()
{
echo $this->uname;
echo $this->pwd;
}


}
if($_SERVER['REQUEST_METHOD']=="POST")
{
 $fvalue=$_REQUEST['uname'];
			$svalue=$_REQUEST['pwd'];
				echo $rvalue=$fvalue+$svalue;
				}
				?>
				</p>
	</form>
	</div>
	</div>

</div>


<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
