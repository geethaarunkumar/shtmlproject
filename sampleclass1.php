<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/livescript">
function validate()
{
		var a=document.forms["sample1"]["email"].value;
		//alert('email');
		if(a == "")
		{
		alert('Provide the email');
		return false;
		}
		return  true;
}
</script>
</head>

<body>
<form method="post" name="sample1"  onsubmit="return validate()" action="sampleclass2.php" >
Email:<input type="text" value="" name="email" id="email" maxlength="30"/><br/>
<input type="submit" value="submit" name="submit"/>
</form>
<?php

class Coordinate
{
    protected $_lat;
  //  protected $_long;
    // var $_res;
    public function __construct($lat)
    {
        $this->_lat  = $lat;
    }
	
    public function display()
    {
        echo $this->_lat;

    }
}


$coordinate = new Coordinate("Welcome to email system");
$coordinate->display(); 

?>
</body>
</html>
