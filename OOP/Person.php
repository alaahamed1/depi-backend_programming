<?php

class Person
{
	public string $name;
	public string $address;

	function __construct($name, $address)
	{
		$this->name = $name;
		$this->address = $address;
	}

	function set_address($address): void
	{
		$this->address = $address;
	}

	function get_address(): string
	{
		return $this->address;
	}
}

class Student extends Person
{
	public string $program;
	public int $year;
	public float $fee;

	function __construct(string $name, string $address, string $program, int $year, float $fee)
	{
		parent::__construct($name, $address);
		$this->program = $program;
		$this->year = $year;
		$this->fee = $fee;
	}

	function set_program($program): void
	{
		$this->program = $program;
	}

	function get_program(): string
	{
		return $this->program;
	}



	function set_year($year): void
	{
		$this->year = $year;
	}

	function get_year(): int
	{
		return $this->year;
	}


	function set_fee($fee): void
	{
		$this->fee = $fee;
	}

	function get_fee(): float
	{
		return $this->fee;
	}
}

$student1 = new Student("John Doe", "123 Main St", "Computer Science", 3, 4000);
echo "Student Name: " . $student1->name . "\n";

class Staff
{
	public string $school;
	public float $pay;

	function __construct(string $name, string $address, string $school, float $pay)
	{
		$this->school = $school;
		$this->pay = $pay;
	}

	function set_school($school): void
	{
		$this->school = $school;
	}

	function get_school(): string
	{
		return $this->school;
	}
	function set_pay($pay): void
	{
		$this->pay = $pay;
	}

	function get_pay(): float
	{
		return $this->pay;
	}
}
