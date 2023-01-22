<?php

class Main{

	public function test() : void{
		$threaded = new Class1();
		\PHPStan\dumpType($threaded->accepts(function() : int{
			return 1;
		}));
	}
}
