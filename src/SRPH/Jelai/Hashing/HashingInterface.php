<?php namespace SRPH\Jelai\Hashing;

interface HashingInterface {

	/**
	 * Checks if provided (unhashed) password is equal
	 * to a hashed value
	 */
	public function check($value, $hashedValue, array $options = array());

	/**
	 * Hash the given value
	 */
	public function make($value, array $options = array());

}
