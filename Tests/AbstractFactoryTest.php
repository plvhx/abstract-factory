<?php

namespace Tests;

require_once __DIR__ . DIRECTORY_SEPARATOR . '../vendor/autoload.php';

use DesignPatterns\Creational\AbstractFactory\MahasiswaFactory;
use DesignPatterns\Creational\AbstractFactory\DosenFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
	public function testCanCreateMahasiswa()
	{
		$factory = new MahasiswaFactory();
		$mahasiswa = $factory->create();

		$this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Mahasiswa', $mahasiswa);
	}

	public function testCanCreateDosen()
	{
		$factory = new DosenFactory();
		$dosen = $factory->create();

		$this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Dosen', $dosen);
	}
}