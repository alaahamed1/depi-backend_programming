<?php
#!/usr/bin/php

class Rectangle
{
	private int $width;
	private $height;

	public function get_width(): int
	{
		return $this->width;
	}

	public function set_width($width): void
	{
		if (gettype($width) == "integer") {
			throw new TypeError("width must be an integer");
		}
		if ($width < 0) {
			throw new ValueError("width must be >= 0");
		}
		$this->width = $width;
	}

	public function get_height()
	{
		return $this->height;
	}

	public function set_height($height)
	{
		if (gettype($height) == "integer") {
			throw new TypeError("width must be an integer");
		}
		if ($height < 0) {
			throw new ValueError("height must be >= 0");
		}
		$this->height = $height;
	}

	function __construct($width = 0, $height = 0)
	{
		$this->width = $width;
		$this->height = $height;
	}

	public function area()
	{
		return $this->width * $this->height;
	}

	public function perimeter()
	{
		$per = 2 * ($this->width + $this->height);
		if ($this->width === 0 || $this->height === 0) {
			$per = 0;
		}
		return $per;
	}

	public function print(){
		for ($i = 1; $i <= $this->height; $i++){
			for ($j = 1; $j <= $this->width; $j++){
				if ($this->width === 0 || $this->height === 0){
					echo " ";
				}else{
					echo "# ";
				}
			}
			echo PHP_EOL;
		}
	}
}
$rectangle = new Rectangle(5, 2);
var_dump($rectangle);
echo $rectangle->area() . PHP_EOL;
echo $rectangle->perimeter(). PHP_EOL;
echo $rectangle->print();