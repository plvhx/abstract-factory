<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Contracts\PersonInterface;
use DesignPatterns\Creational\AbstractFactory\Mahasiswa;

class MahasiswaFactory implements PersonInterface
{
	public function create()
	{
		return new Mahasiswa();
	}
}