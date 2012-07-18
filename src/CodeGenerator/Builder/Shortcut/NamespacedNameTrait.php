<?php
namespace CodeGenerator\Builder\Shortcut;

use CodeGenerator\Keywords;

trait NamespacedNameTrait {
	
	use NameTrait, NamespaceTrait {
		
		NameTrait::getName as getShortName;
		NameTrait::setName as setShortName;
		NameTrait::hasName as hasShortName;
		
	}
	
	public function getName() {
	
		$fullname = $this->getShortName();
	
		if ($this->hasNamespace()) {
			$fullname = $this->getNamespace() . Keywords::KW_NAMESPACE_SEPARATOR . $fullname;
		}
	
		return $fullname;
	}
	
	public function setName($name) {
		$parts = explode(Keywords::KW_NAMESPACE_SEPARATOR, $name);
		
		if (count($parts)) {
			$this->setShortName(array_pop($parts));
		}
		
		if (count($parts)) {
			$this->setNamespace(implode(Keywords::KW_NAMESPACE_SEPARATOR, $parts));
		}
		
		return $this;
	}
	
	public function hasName() {
		return $this->hasShortName();
	}	

}