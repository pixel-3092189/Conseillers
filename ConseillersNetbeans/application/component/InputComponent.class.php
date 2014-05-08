<?php

class InputComponent extends BaseComponent {

	private $input_name;
	private $input_type = "text";
	private $input_class;
	private $input_id;
	private $input_onblur;

	public function setType($type) {
		$this->input_type = $type;
	}

	public function setId($id) {
		$this->input_id = $id;
	}
	
	public function setName($name) {
		$this->input_name = $name;
	}

	public function setClass($class) {
		$this->input_class = $class;
	}

	public function setOnblur($action) {
		$this->input_onblur = $action;
	}

	public function createView($template = 'input_default') {
		$this->type = $this->input_type;
		$this->name = $this->input_name;
		$this->class = $this->input_class;
		$this->id = $this->input_id;
		$this->onblur = $this->input_onblur;

		return parent::createView($template);
	}

}

?>
