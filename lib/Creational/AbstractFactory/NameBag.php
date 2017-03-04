<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Contracts\NameBagInterface;

class NameBag implements NameBagInterface
{
	private $bag = [ ];

	/**
	 * {@inheritdoc}
	 */
	public function store()
	{
		array_walk(func_get_args(), function($q) {
			array_push($this->bag, $q);
		});
	}

	/**
	 * {@inheritdoc}
	 */
	public function fetch()
	{
		return json_encode($this->bag, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT);
	}
}