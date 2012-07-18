<?php
namespace CodeGenerator\Builder;

trait VisibilityTrait {
	
	const VISIBILITY_PUBLIC = 'public';
	const VISIBILITY_PROTECTED = 'protected';
	const VISIBILITY_PRIVATE = 'private';
	
	protected $visibility = self::VISIBILITY_PUBLIC;
	
	public function getVisibility() {
		return $this->visibility;
	}
	
	public function setVisibility($visibility) {
		$visibility = strtolower($visibility);
		
		if (!in_array($visibility, array(self::VISIBILITY_PUBLIC, self::VISIBILITY_PRIVATE, self::VISIBILITY_PROTECTED))) {
			throw new \InvalidArgumentException("Visibility ({$visibility}) is not allowed, only ".implode(', ', self::$allowed_visibility).' are accepted');
		}
		
		$this->visibility = $visibility;
		return $this;
	}
	
}