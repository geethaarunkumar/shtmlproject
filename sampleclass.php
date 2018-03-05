<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

class mail
{    
	protected $getvalue;	
    //   var $getemail;
	public function __construct($getvalue)
	 {
	 $this->getvalue=$getvalue;
	 //$this->getmail=$getvalue;
	 }
	 
	public function display()
	 {
	 echo $this->getvalue;
	 }

}

$result1 = new mail();
echo $result->mail('some data');
/*
$result=getmail('some data');
echo $result->getvalue();*/

class samples1
{
//var $item1;
  
	function samples1()
	{
	$this->item1="some data";
		$this->item2="2";
			$this->item3="3";
			$this->item4=$this->item2+$this->item3;
	}

}

$output = new samples1();
echo $output->item1;
echo $output->item2;
echo $output->item3;
echo $output->item4;

class Car {
    function Car() {
        $this->model = "VW";
		
		  $this->model = "VW1";
		  
		    $this->model = "VW2";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>

<?php
/*
class Coordinate
{
    protected $_lat;
    protected $_long;
     var $_res;
    public function __construct($lat, $long)
    {
        $this->_lat  = $lat;
        $this->_long = $long;
		$this->_res = $lat + $long;
    }
	
    public function display()
    {
        echo $this->_lat;
        echo $this->_long;
        echo "res".$this->_res;
    }
}


$coordinate = new Coordinate(25, 5);
$coordinate->display(); 
/*$coord2 = new Coordinate(99, 1);
$coord2->display(); 
$coordinate->display();*/
?>
</body>





</html>
