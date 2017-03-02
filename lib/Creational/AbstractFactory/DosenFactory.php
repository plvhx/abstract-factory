<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Contracts\PersonInterface;
use DesignPatterns\Creational\AbstractFactory\Dosen;

class DosenFactory implements PersonInterface
{
	public function create()
	{
		return new Dosen();
	}
}