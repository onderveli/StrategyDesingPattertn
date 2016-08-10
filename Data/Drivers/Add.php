<?php
namespace Data\Drivers;

class Add implements \Data\Strategy
{
	public function doOperation($num1,$num2)
	{
		return $num1+$num2;
	}
}