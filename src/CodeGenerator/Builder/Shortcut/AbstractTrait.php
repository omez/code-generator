<?php
namespace CodeGenerator\Builder\Shortcut;

trait AbstractTrait {
	
	protected $is_abstract = false;
	
	public function isAbstract() {
		return $this->is_abstract;
	}
	
	public function setAbstract($flag = true) {
		$this->is_abstract = (bool)$flag;
		return $this;
	}
}