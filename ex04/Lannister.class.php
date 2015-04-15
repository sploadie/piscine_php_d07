<?php

abstract class Lannister {
	protected $sleepWithFamily = True;

	public function sleepWith($partner) {
		if (is_a($partner, Lannister) == false) {
			print("Let's do this." . PHP_EOL);
		} else if ($this->sleepWithFamily == True && $partner->sleepWithFamily == True) {
			print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		} else {
			print("Not even if I'm drunk !" . PHP_EOL);
		}
	}
}

?>
