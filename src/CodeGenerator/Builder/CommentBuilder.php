<?php
namespace CodeGenerator\Builder;

class CommentBuilder extends AbstractBuilder {
	
	const TYPE_C_STYLE = 		1;
	const TYPE_PERL_STYLE = 	2;
	const TYPE_BLOCK = 			3;
	const TYPE_BLOCK_NEWLINE = 	4;
	const TYPE_DOCBLOCK = 		5;
	
	protected $type = self::TYPE_C_STYLE;
	
	protected $content = null;
	
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		
		/*if (!in_array($type, array(self::TYPE_BLOCK, self::TYPE_DOCBLOCK, self::TYPE_C_STYLE, self::TYPE_PERL_STYLE))) {
			throw new \InvalidArgumentException("Comments can be only C/C++, Perl or DocBlock style");
		}*/
		
		$this->type = $type;
		
		return $this;
	}
	
	
	public function getContent() {
		return $this->content;
	}
	
	public function setContent($content) {
		$this->content = $content;
	}
	
	public function hasContent() {
		return !empty($this->content);
	}
	
	
	public function render() {
		$result = parent::render();
		
		if (!$this->hasContent()) return $result;
		
		$content = (string)$this->getContent();
		
		$code_line_prefix = '';
		$code_opener = '';
		$code_closer = '';
		
		
		switch ($this->getType()) {
			case self::TYPE_C_STYLE:
				$code_line_prefix = '// ';
				break;
				
			case self::TYPE_PERL_STYLE;
				$code_line_prefix = '# ';
				break;

			case self::TYPE_BLOCK;
				$code_opener = '/* ';
				$code_closer = ' */';
				break;
				
			case self::TYPE_BLOCK_NEWLINE;
				$code_opener = '/* '.PHP_EOL;
				$code_closer = ' */';
				break;
				
			case self::TYPE_DOCBLOCK;
				$code_line_prefix = ' * ';
				$code_opener = '/** '.PHP_EOL;
				$code_closer = ' */'.PHP_EOL;
				break;
				
			default:
				throw new \RuntimeException('Unable to detect correct comment type');
				break;	
		}
		
		
		$result.= $code_opener;
		
		$content_lines = explode("\n", $content);
		foreach ($content_lines as $line) {
			$result.= $code_line_prefix . rtrim($line) . PHP_EOL;
		}
		
		$result.= $code_closer;
		
		return $result;
	}
}