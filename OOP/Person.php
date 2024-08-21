<?php

/**
 * Class `Person` represents a person with a name and address.
 */
class Person
{
	/** @var string $name The name of the person */
	public string $name;

	/** @var string $address The address of the person */
	public string $address;

	/**
	 * Constructor method for the `Person` class.
	 * 
	 * @param string $name The name of the person
	 * @param string $address The address of the person
	 */
	function __construct(string $name, string $address)
	{
		$this->name = $name;
		$this->address = $address;
	}

	/**
	 * Set the address of the person.
	 * 
	 * @param string $address The new address of the person
	 * @return void
	 */
	function set_address(string $address): void
	{
		$this->address = $address;
	}

	/**
	 * Get the address of the person.
	 * 
	 * @return string The current address of the person
	 */
	function get_address(): string
	{
		return $this->address;
	}
}

/**
 * Class `Student` represents a student, which is a specific type of person.
 */
class Student extends Person
{
	/** @var string $program The program of the student */
	public string $program;

	/** @var int $year The year of study of the student */
	public int $year;

	/** @var float $fee The fee of the student */
	public float $fee;

	/**
	 * Constructor method for the `Student` class.
	 * 
	 * @param string $name The name of the student
	 * @param string $address The address of the student
	 * @param string $program The program of the student
	 * @param int $year The year of study of the student
	 * @param float $fee The fee of the student
	 */
	function __construct(string $name, string $address, string $program, int $year, float $fee)
	{
		parent::__construct($name, $address);
		$this->program = $program;
		$this->year = $year;
		$this->fee = $fee;
	}

	/**
	 * Set the program of the student.
	 * 
	 * @param string $program The new program of the student
	 * @return void
	 */
	function set_program(string $program): void
	{
		$this->program = $program;
	}

	/**
	 * Get the program of the student.
	 * 
	 * @return string The current program of the student
	 */
	function get_program(): string
	{
		return $this->program;
	}

	/**
	 * Set the year of study of the student.
	 * 
	 * @param int $year The new year of study of the student
	 * @return void
	 */
	function set_year(int $year): void
	{
		$this->year = $year;
	}

	/**
	 * Get the year of study of the student.
	 * 
	 * @return int The current year of study of the student
	 */
	function get_year(): int
	{
		return $this->year;
	}

	/**
	 * Set the fee of the student.
	 * 
	 * @param float $fee The new fee of the student
	 * @return void
	 */
	function set_fee(float $fee): void
	{
		$this->fee = $fee;
	}

	/**
	 * Get the fee of the student.
	 * 
	 * @return float The current fee of the student
	 */
	function get_fee(): float
	{
		return $this->fee;
	}
}

$student1 = new Student("John Doe", "123 Main St", "Computer Science", 3, 4000);
echo "Student Name: " . $student1->name . "\n";

/**
 * Class `Staff` represents a staff member with a school and pay.
 */
class Staff extends Person
{
	/** @var string $school The school where the staff member works */
	public string $school;

	/** @var float $pay The pay of the staff member */
	public float $pay;

	/**
	 * Constructor method for the `Staff` class.
	 * 
	 * @param string $name The name of the staff member
	 * @param string $address The address of the staff member
	 * @param string $school The school where the staff member works
	 * @param float $pay The pay of the staff member
	 */
	function __construct(string $name, string $address, string $school, float $pay)
	{
		parent::__construct($name, $address);
		$this->school = $school;
		$this->pay = $pay;
	}

	/**
	 * Set the school where the staff member works.
	 * 
	 * @param string $school The new school of the staff member
	 * @return void
	 */
	function set_school(string $school): void
	{
		$this->school = $school;
	}

	/**
	 * Get the school where the staff member works.
	 * 
	 * @return string The current school of the staff member
	 */
	function get_school(): string
	{
		return $this->school;
	}

	/**
	 * Set the pay of the staff member.
	 * 
	 * @param float $pay The new pay of the staff member
	 * @return void
	 */
	function set_pay(float $pay): void
	{
		$this->pay = $pay;
	}

	/**
	 * Get the pay of the staff member.
	 * 
	 * @return float The current pay of the staff member
	 */
	function get_pay(): float
	{
		return $this->pay;
	}
}
?>
