<?php
namespace CodeGenerator\Builder\Shortcut;


trait NameTrait {
	
	protected $name;
	
	public function setName($name) {
		
		if ($this->_validateName($name)===false) {
			throw new \InvalidArgumentException("Name ({$name}) is not valid");
		}
		
		$this->name = (string)$name;
		return $this;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function hasName() {
		return !empty($this->name);
	}
	
	protected function _validateName($name) {
		// @todo
	}
	
}