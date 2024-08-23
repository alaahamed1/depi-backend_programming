<?php

class Studen
{
	private $firstname;
	private $gender;

	public function getFirstName()
	{
		return $this->firstname;
	}

	function setFirstName($fn)
	{
		$this->firstname = $fn;
		echo ("first name is set to: ");
		echo "<br>";
	}
	public function getgender()
	{
		return $this->gender;
	}

	function setgender($gn)
	{
		if ($gn != "male" && $gn != "female") {
			echo 'Set gender as Male or Female for gender';
			echo "<br>";
		}
		$this->gender = $gn;
		echo "Gender is set to " . $gn;
		echo "<br>";
	}
}
$student1 = new Studen();
$student1->setFirstName("alaa");
$student1->setgender("female");
var_dump($student1);
