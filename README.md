# jelai.php-hashing

jelai.php Hashing abstraction

## What is jelai.php?

Please see this [gist](https://gist.github.com/srph/2e2d51d46dadfdbc38e3).

## Usage

The package provides a built-in for *md5*.

```php
require __DIR__ . '/path/to/src/SRPH/Jelai/Hashing/MD5Hasher.php';
$hasher = new SRPH\Jelai\Hashing\MD5Hasher;
$hasher->make('123'); // '202cb962ac59075b964b07152d234b70'
$hasher->check('123', '202cb962ac59075b964b07152d234b70') // true
```

The abstraction simply provides an interface (```HashingInterface```).

```php
<?php namespace MyApp\Hashing;

use SRPH\Jelai\Hashing\HashingInterface;

class BcryptHasher implements HashingInterface {
	
	public function make()
	{
		//
	}
	
	public function check()
	{
		//
	}
}
```

It's much more appreciated when paired with an *IoC Container*, wherein you can *dependency inject* objects. For instance, in Laravel, you can bind interfaces to a class when called, like so:

```php
# Laravel 4.x
<?php namespace MyApp\Hashing;

use MyApp\Hashing\BcryptHasher;
use Illuminate\Support\ServiceProvider;

class HashingServiceProvider extends ServiceProvider {
	
	/**
	 * Bind `SRPH\Jelai\Hashing\HashingInterface` to `MyApp\Hashing\BycryptHasher`
	 */
	public function register()
	{
		$this->app->bind('SRPH\Jelai\Hashing\HashingInterface', 'MyApp\Hashing\BycryptHasher');
	}
}
```

\* *This hashing abstraction is mostly a mimic of Laravel's hashing abstraction.*

## API

#### ```HashingInterface```

The interface requires to have methods ```make``` and ```check```.

- ```make``` (```$value```, *```array```* ```$options```)
- ```check``` (```$value```, ```$hashedValue```, *```array```* ```$options```)

\* *Check the example, [MD5Hasher](https://github.com/srph/jelai.php-hashing/blob/master/src/SRPH/Jelai/Hashing/MD5Hasher.php).*

## Acknowledgement

**jelai.php-hashing** © 2015+, Kier Borromeo (srph). **jelai.php** is released under the [MIT](mit-license.org) license.

> [srph.github.io](http://srph.github.io) &nbsp;&middot;&nbsp;
> GitHub [@srph](https://github.com/srph) &nbsp;&middot;&nbsp;
> Twitter [@_srph](https://twitter.com/_srph)

*(Above text is copied from [```rstacruz/cheatsheets/badges```](https://rstacruz.github.io/cheatsheets/badges))*
