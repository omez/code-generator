<?php
/**
 * If something has name - this trait implements this functionality
 * 
 * @author OmeZ
 */
trait HasNameTrait {
	
	protected $name;
	
	public function getName() {
		return $this->name;
	}
	
	public function setName() {
		return $this->name;
	}
	
}