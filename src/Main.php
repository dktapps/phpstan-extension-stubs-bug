<?php

class Main{

	public function test() : void{
		\PHPStan\dumpType((new Class1())->getThing());
		\PHPStan\dumpType((new \DateTime('now'))->getTimestamp());
	}
}
