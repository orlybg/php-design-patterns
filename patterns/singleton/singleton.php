<?php

namespace Patterns\Singleton;
class Singleton
{

	/**
     * A static variable that holds reference to itself
     * @var Singleton
    */
	private $instance;

	/**
     * A private constructor ensures it can only be instantiated by itself
    */
	public function __construct() {}

	/**
     * A static method that return an instance of itself
     *
     * @return Singleton
    */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}