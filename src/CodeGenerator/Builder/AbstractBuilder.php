<?php
namespace CodeGenerator\Builder;

/**
 * Abstract builder class
 * 
 * @author OmeZ
 */
abstract class AbstractBuilder {
	
	const RENDER_IDENT = "\t";
	
	/**
	 * Constrcuts new builder
	 * 
	 * @param array|\Traversable $options
	 * @throws \InvalidArgumentException
	 * @return void
	 */
	public function __construct($options = null) {
		if (!is_array($options) && !$options instanceof \Traversable && $options!==null) {
			throw new \InvalidArgumentException('Factory only accept array or \Traversable argument');
		}
	}
	
	/**
	 * Factory method for generation
	 * 
	 * @param array|\Traversable $options
	 * @throws \InvalidArgumentException
	 * @return \CodeGenerator\Builder\AbstractBuilder
	 */
	static public function factory($options = null) {
		if (!is_array($options) && !$options instanceof \Traversable && $options!==null) {
			throw new \InvalidArgumentException('Factory only accept array or \Traversable argument');
		}
		
		$instance = new static($options);
		return $instance;
	}
	
	public function render() {
		return '';
		return sprintf('/* class %s generated: */ ', get_class($this)); // debug message
	}
	
	public function __toString() {
		return $this->render();
	}
}
