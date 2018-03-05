<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
class data
{

protected $var1,$var2,$res;

public function __construct($var1,$var2,$res)
{
	$this->var1 = $var1;
	$this->var2=$var2;
	$this->res=$res."<br/>";
	$this->res1="klfjhklfjhklfjhAddition:".$var1+$var2+$res."<br/>";
	$this->res2="Multiplication:".$var1*$var2*$res."<br/>";
	$this->res3="Subtraction:kgjkldjglkdjgkldjgl".$var1-$var2-$res."<br/>";
	$this->res4="Division:".$var1/$var2/$res."<br/>";
}

public function display()
{

	echo $this->var1;
	echo $this->var2;
	echo $this->res;
	echo $this->res1;
	echo $this->res2;
	echo $this->res3;
	echo $this->res4;

}

}

$data = new data(12,13,14);
$data->display();

?>

</body>
</html>
