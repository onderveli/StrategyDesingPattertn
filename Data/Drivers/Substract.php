<?php
namespace Data\Drivers;

class Substract implements \Data\Strategy
{
	public function doOperation($num1,$num2)
	{
		return $num1-$num2;
	}
}