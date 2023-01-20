<?php

class Main{

	public function test() : void{
		\PHPStan\dumpType((new \DateTime('now'))->getTimestamp());
	}
}
