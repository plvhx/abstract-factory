<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Contracts\PersonBehaviourInterface;
use DesignPatterns\Creational\AbstractFactory\NameBag;

class Dosen implements PersonBehaviourInterface
{
	private $firstName;

	private $middleName;

	private $lastName;

	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}

	public function setMiddleName($middleName)
	{
		$this->middleName = $middleName;
	}

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}

	public function get()
	{
		return (new NameBag)->store($this->firstName, $this->middleName, $this->lastName)
			->fetch();
	}
}