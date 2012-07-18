<?php
namespace CodeGenerator\Builder\Shortcut;

trait NamespaceTrait {

	protected $namespace;

	public function setNamespace($namespace) {
		
		if ($this->_validateNamespace($namespace)===false) {
			throw new \InvalidArgumentException("Namespace ({$namespace}) is not valid");
		}
		
		$this->namespace = (string)$namespace;
		return $this;
	}

	public function getNamespace() {
		return $this->namespace;
	}

	public function hasNamespace() {
		return !empty($this->namespace);
	}

	protected function _validateNamespace($name) {
		// @todo
	}

}