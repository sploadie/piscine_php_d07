<?php

class UnholyFactory {
	private $_models = array();

	public function absorb($model) {
		if (is_subclass_of($model, 'Fighter') && !array_key_exists($model->type, $this->_models)) {
			$this->_models[$model->type] = $model;
			print("(Factory absorbed a fighter of type " . $model->type . ")" . PHP_EOL);
		} else if (array_key_exists($model->type, $this->_models)) {
			print("(Factory already absorbed a fighter of type " . $model->type . ")" . PHP_EOL);
		} else {
			print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
		}
	}

	public function fabricate($type) {
		if (array_key_exists($type, $this->_models)) {
			print("(Factory fabricates a fighter of type " . $type . ")" . PHP_EOL);
			return (clone $this->_models[$type]);
		} else {
			print("(Factory hasn't absorbed any fighter of type " . $type . ")" . PHP_EOL);
		}
	}
}

			// print("" . PHP_EOL);
?>