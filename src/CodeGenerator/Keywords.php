<?php
namespace CodeGenerator;

class Keywords {
	
	const KW_IDENT = "\t";

	const KW_BRACE_OPENER = '{';
	const KW_BRACE_CLOSER = '}';
	
	const KW_NAMESPACE_SEPARATOR = '\\';
	
	const KW_ABSTRACT = 'abstract'; 
	const KW_AND = 'and'; 
	const KW_ARRAY = 'array'; 
	const KW_AS = 'as'; 
	const KW_BREAK = 'break'; 
	const KW_CASE = 'case'; 
	const KW_CATCH = 'catch'; 
	const KW_CFUNCTION = 'cfunction'; 
	const KW_CLASS = 'class'; 
	const KW_CLONE = 'clone'; 
	const KW_CONST = 'const'; 
	const KW_CONTINUE = 'continue'; 
	const KW_DECLARE = 'declare'; 
	const KW_DEFAULT = 'default'; 
	const KW_DO = 'do'; 
	const KW_ELSE = 'else'; 
	const KW_ELSEIF = 'elseif'; 
	const KW_ENDDECLARE = 'enddeclare'; 
	const KW_ENDFOR = 'endfor'; 
	const KW_ENDFOREACH = 'endforeach'; 
	const KW_ENDIF = 'endif'; 
	const KW_ENDSWITCH = 'endswitch'; 
	const KW_ENDWHILE = 'endwhile'; 
	const KW_EXTENDS = 'extends'; 
	const KW_FINAL = 'final'; 
	const KW_FOR = 'for'; 
	const KW_FOREACH = 'foreach'; 
	const KW_FUNCTION = 'function'; 
	const KW_GLOBAL = 'global'; 
	const KW_GOTO = 'goto'; 
	const KW_IF = 'if'; 
	const KW_IMPLEMENTS = 'implements'; 
	const KW_INTERFACE = 'interface'; 
	const KW_INSTANCEOF = 'instanceof'; 
	const KW_NAMESPACE = 'namespace'; 
	const KW_NEW = 'new'; 
	const KW_OR = 'or'; 
	const KW_PRIVATE = 'private'; 
	const KW_PROTECTED = 'protected'; 
	const KW_PUBLIC = 'public'; 
	const KW_STATIC = 'static'; 
	const KW_SWITCH = 'switch'; 
	const KW_THROW = 'throw'; 
	const KW_TRY = 'try'; 
	const KW_USE = 'use'; 
	const KW_VAR = 'var'; 
	const KW_WHILE = 'while'; 
	const KW_XOR = 'xor'; 
	
	const KW_COMMENT_C = '//';
	const KW_COMMENT_PERL = '#';
	const KW_COMMENT_BLOCK_OPENER = '/*';
	const KW_COMMENT_BLOCK_CLOSER = '*/';
	const KW_COMMENT_DOCBLOCK_OPENER = '/**';
	const KW_COMMENT_DOCBLOCK_PREFIX = ' *';
	const KW_COMMENT_DOCBLOCK_CLOSER = ' */';
	
}