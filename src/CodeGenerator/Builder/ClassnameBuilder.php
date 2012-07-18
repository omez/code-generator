<?php
namespace CodeGenerator\Builder;

use CodeGenerator\Builder\Shortcut\NamespacedNameTrait;

class ClassnameBuilder extends AbstractBuilder {

	use NamespacedNameTrait;
	
	public function render() {
		$result = parent::render();
		$result.= $this->getName();
		
		return $result;
	}
	
}
