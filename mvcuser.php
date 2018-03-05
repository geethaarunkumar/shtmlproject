<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

//model is main class contain logic
class Model
{
public $text,$text1;


			public function __construct()
			{
			
			$this->text="Hello World";
			$this->text1="<br/>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
			
			}
}


//presentation in html to display output
class View
{
private $model;

			public function __construct(Model $model)
			{
			$this->model=$model;
			}
			
			public function output()
			{
			
			return '<a href="mvcuser.php?action=textClicked">'. $this->model->text .'</a>'."<p>".$this->model->text1."</p>";
			
			}
  
}

//controller is used to update data
class Controller
{
	private $model;
	
		public function __construct(Model $model)
		{
		$this->model=$model;
		}
		
	public function textClicked()
	{
	$this->model->text="Text Updated"."<br/><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>";
	}
}



//create variable
$Model= new model();

//assign variable to class
$View =new View($Model);
$Controller=new Controller($Model);

if(isset($_GET['action']))$Controller->{$_GET['action']}();

//output
echo $View->output();

?>
</body>
</html>
