<?php

class Class1{
	public function accepts(\Closure $func, mixed ...$args) : mixed{
		return $func();
	}
}
