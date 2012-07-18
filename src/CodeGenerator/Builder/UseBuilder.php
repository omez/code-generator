<?php
namespace CodeGenerator\Builder;

use CodeGenerator\Keywords;

class UseBuilder extends AbstractBuilder {

	protected $classname;
	
	protected $alias;
	
	public function getClass() {
		return $this->classname;
	}
	
	public function setClass($classname, $alias = null) {
		$this->classname = $classname;
		if ($alias) $this->setAlias($alias);
		return $this;
	}
	
	public function getAlias() {
		return $this->alias;
	}
	
	public function setAlias($alias) {
		$this->alias = $alias;
		return $this;
	}
	
	public function hasAlias() {
		return !empty($this->alias);
	}
	
	public function render() {
		$result = parent::render();
		
		$result.= Keywords::KW_USE;

		if ($this->hasAlias()) {
			$result.= sprinf(" %s %s", Keywords::KW_AS, $this->getAlias()); 
		}
		
		$result.= ';';
		
		return $result;
	}
	
}
