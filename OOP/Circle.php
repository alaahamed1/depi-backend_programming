<?php
/**
 * Class `Circle` that defines a circle
 */
class Circle
{
	/** @var float $radius Public instance attribute: radius */
	public float $radius = 1;

	/** @var string $color Public instance attribute: color */
	public string $color = "red";

	/**
	 * Constructor method for the `Circle` class
	 * 
	 * @param float $radius The radius of the circle
	 * @param string $color The color of the circle
	 */
	function __construct(float $radius, string $color)
	{
		$this->radius = $radius;
		$this->color = $color;
	}

	/**
	 * Set the color of the circle
	 * 
	 * @param string $color The new color of the circle
	 * @return void
	 */
	function set_color(string $color): void
	{
		$this->color = $color;
	}

	/**
	 * Get the color of the circle
	 * 
	 * @return string The current color of the circle
	 */
	function get_color(): string
	{
		return $this->color;
	}

	/**
	 * Set the radius of the circle
	 * 
	 * @param float $radius The new radius of the circle
	 * @return void
	 */
	function set_radius(float $radius): void
	{
		$this->radius = $radius;
	}

	/**
	 * Get the radius of the circle
	 * 
	 * @return float The current radius of the circle
	 */
	function get_radius(): float
	{
		return $this->radius;
	}

	/**
	 * Calculate the area of the circle
	 * 
	 * @return float The area of the circle
	 */
	function get_area(): float
	{
		return pi() * pow($this->radius, 4);
	}
}

$circle = new Circle(4, "red");
var_dump($circle);
print_r($circle);

/**
 * Class `Cyliner` that defines a cylinder and extends the `Circle` class
 */
class Cyliner extends Circle
{
	/** @var float $height Public instance attribute: height */
	public float $height = 10;

	/**
	 * Constructor method for the `Cyliner` class
	 * 
	 * @param float $radius The radius of the cylinder's base (inherited from Circle)
	 * @param float $height The height of the cylinder
	 * @param string $color The color of the cylinder (inherited from Circle)
	 */
	function __construct(float $radius, float $height, string $color)
	{
		parent::__construct($radius, $color);
		$this->height = $height;
	}

	/**
	 * Set the height of the cylinder
	 * 
	 * @param float $height The new height of the cylinder
	 * @return void
	 */
	function set_height(float $height): void
	{
		$this->height = $height;
	}

	/**
	 * Get the height of the cylinder
	 * 
	 * @return float The current height of the cylinder
	 */
	function get_height(): float
	{
		return $this->height;
	}

	/**
	 * Calculate the volume of the cylinder
	 * 
	 * @return float The volume of the cylinder
	 */
	function get_volume(): float
	{
		return $this->get_area() * $this->height;
	}
}
$cyliner = new Cyliner(4, 10, "red");
var_dump($cyliner);
?>
