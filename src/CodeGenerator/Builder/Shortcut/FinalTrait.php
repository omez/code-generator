<?php
namespace CodeGenerator\Builder\Shortcut;

trait FinalTrait {
	
	protected $is_final = false;
	
	public function isFinal() {
		return $this->is_final;
	}
	
	public function setFinal($flag = true) {
		$this->is_final = (bool)$flag;
		return $this;
	}
}