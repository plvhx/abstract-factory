<?php

namespace DesignPatterns\Creational\AbstractFactory\Contracts;

interface NameBagInterface
{
	/**
	 * Store first, middle, and last name into stack.
	 */
	public function store();

	/**
	 * Fetch value from stack.
	 */
	public function fetch();
}