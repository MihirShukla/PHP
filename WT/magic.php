<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php
		class Test{
			public $name;
			public $enroll;
			
			function __construct()
			{
				$this->name="a";
				$this->enroll="";
			}
			public function setName($a,$s)
			{
				$this->name=$a;
				$this->enroll=$s;
			}
			public function getName()
			{
				return $this->name;
				return $this->enroll;
			}
		}
			$t=new Test();
			$t->setName("Mihir Shukla","160470107054");
			print $t->name;
			echo "<br/>";
			print $t->enroll;
	?>
</body>
</html>