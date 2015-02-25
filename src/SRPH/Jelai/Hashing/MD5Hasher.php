<?php namespace SRPH\Jelai\Hashing;

class MD5Hasher implements HashingInterface {

	/**
	 * Checks if provided (unhashed) password is equal
	 * to the hashed value
	 *
	 * @param string $value Value to check
	 * @param string $hashedValue Hashed value to be checked against
	 * @param array $options
	 * @return boolean
	 */
	public function check($value, $hashedValue, array $options = array())
	{
		return $this->make($value) === $hashedValue;
	}

	/**
	 * Hash the given value
	 *
	 * @param $value Value to be hashed
	 * @param array $options
	 * @return string
	 */
	public function make($value, array $options = array())
	{
		return md5($value);
	}

}
