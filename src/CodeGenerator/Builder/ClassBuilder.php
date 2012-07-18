<?php
namespace CodeGenerator\Builder;

use CodeGenerator\Keywords;
use CodeGenerator\Builder\Shortcut\NamespacedNameTrait;
use CodeGenerator\Builder\Shortcut\AbstractTrait;
use CodeGenerator\Builder\Shortcut\FinalTrait;

/**
 * 
 * @todo Namespace support
 * @todo Traits support
 * 
 * @author OmeZ
 *
 */
class ClassBuilder extends AbstractBuilder {
	
	use NamespacedNameTrait, AbstractTrait, FinalTrait;
	
	protected $parent;
	
	protected $implements = array();
	
	
	
	public function getParent() {
		return ;
	}
	
	public function setParent($classname) {
		
		if (!$classname) {}
		
		
		return $this;
	}
	
	public function addInterface() {
		
	}
	
	public function removeInterface() {
		
	}
	
	
	public function renderClassDefinition() {
		$result = '';
		
		// class definition
		$classDefinition = array();
		
		if ($this->isFinal()) {
			$classDefinition[] = Keywords::KW_FINAL;
		} elseif ($this->isAbstract()) {
			$classDefinition[] = Keywords::KW_ABSTRACT;
		}
		
		$classDefinition[] = Keywords::KW_CLASS;
		
		if (!$this->hasName()) {
			throw new \RuntimeException('Class has no name');
		}
		$classDefinition[] = $this->getShortName();
		
		
		// @todo add extends and implements
		
		
		$result.= implode(' ', $classDefinition);
		
		return $result;
	}
	
	public function renderClassBody() {
		$result = '';
		
		return $result;
	}
	
	
	public function render() {
		$result = parent::render();
		
		$result.= $this->renderClassDefinition();
		
		
		$result.= ' '.Keywords::KW_BRACE_OPENER;
		
		$body = $this->renderClassBody();
		if ($body) {
			$body = str_replace("\n", "\n\t", "\n".$body);
			$body = rtrim($body, "\t");
			$result.= $body;
		}
		
		$result.= Keywords::KW_BRACE_CLOSER."\n";
		
		return $result;
	}
	
	
}