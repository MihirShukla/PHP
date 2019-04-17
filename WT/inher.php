<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php
		class HIFI{
			public $tape_pos;
			public $mode;
			
			public function __construct(){
				$this->mode="A";
				$this->tape_pos=0;
			}
			public function play()
			{
				$this->mode="play A";
			}
			public function ffwd()
			{
				$this->mode="ffwd A";
				$this->tape_pos++;
			}
			public function rewind()
			{
				$this->mode="rewind A";
				$this->tape_pos--;
			}
			public function stop()
			{
				$this->mode="stopped A";
			}
			public function mode()
			{
				return $this->mode;
			}
		}
		class super_HIFI extends HIFI{
			public $tape_memory;
			public function __construct()
			{
				parent::__construct();
				$this->tape_memory=0;
			}
			public function search($position)
			{
				$this->mode="search A";
				$this->tape_pos=$position;
			}
			public function mark()
			{
				$this->tape_memory=$this->tape_postion;
			}
		}
		$myHifi=new super_HIFI();
		$myHifi->play();
		echo "<br/>";
		print $myHifi->mode;
		echo "<br/>";
		$myHifi->search(210);
		echo "<br/>";
		print $myHifi->mode();
		echo "<br/>";
	?>
</body>
</html>