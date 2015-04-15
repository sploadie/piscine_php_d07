<?php

class NightsWatch {
	private $_members = array();

	public function recruit($noob) {
		if (class_implements(get_class($noob), IFighter) == True) {
			$this->_members[] = $noob;
		}
	}

	public function fight() {
		foreach ($this->_members as $member) {
			$member->fight();
		}
	}
}

?>