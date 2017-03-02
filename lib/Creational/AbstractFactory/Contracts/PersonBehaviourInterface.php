<?php

namespace DesignPatterns\Creational\AbstractFactory\Contracts;

interface PersonBehaviourInterface
{
	/**
	 * First name setter.
	 */
	public function setFirstName($firstName);

	/**
	 * Middle name setter.
	 */
	public function setMiddleName($middleName);

	/**
	 * Last name setter.
	 */
	public function setLastName($lastName);
}