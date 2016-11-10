<?php
use PHPUnit\Framework\TestCase;

class MD5HasherTest extends TestCase
{
	protected $hasher;

	public function setUp()
	{
		$this->hasher = new Hasher\MD5Hasher();
	}

	public function testMD5HasherMake()
	{
		$password = md5('password');
		$passwordTwo = $this->hasher->make('password');

		$this->assertEquals($password, $passwordTwo);

	}
}