<?php
class Circle
{
	public float $radius = 1;
	public string $color = "red";

	function __construct(float $radius, string $color)
	{
		$this->radius = $radius;
		$this->color = $color;
	}
	function set_color(string $radius): void
	{
		$this->color = $radius;
	}
	function get_color($color)
	{
		$this->color = $color;
	}

	function set_radius($radius)
	{
		$this->radius = $radius;
	}

	function get_radius()
	{
		return $this->radius;
	}

	function get_area()
	{
		return pi() * pow($this->radius, 2);
	}
}
$circle = new Circle("1", "red");
print_r($circle);

class Cyliner extends Circle
{
	public float $height = 1;

	function __construct(float $radius, float $height, string $color)
	{
		$this->height = $height;
	}
	function set_height($height)
	{
		$this->height = $height;
	}

	function get_height()
	{
		return $this->height;
	}

	function get_volume($height)
	{
		return $this->get_area() * $height;
	}
}
