<?php
use CodeGenerator\Builder\ClassBuilder;
use CodeGenerator\Builder\CommentBuilder;

require_once 'vendor/autoload.php';


//$commentBuilder = new CommentBuilder();
//$commentBuilder->setContent("Something happens \nShit too");
//echo $commentBuilder->setType(CommentBuilder::TYPE_C_STYLE)->render()."\n";
// echo $commentBuilder->setType(CommentBuilder::TYPE_PERL_STYLE)->render()."\n";
// echo $commentBuilder->setType(CommentBuilder::TYPE_BLOCK)->render()."\n";
// echo $commentBuilder->setType(CommentBuilder::TYPE_BLOCK_NEWLINE)->render()."\n";
// echo $commentBuilder->setType(CommentBuilder::TYPE_DOCBLOCK)->render()."\n";




$classBuilder = new ClassBuilder();


$classBuilder->setName('Namespace\Namespace\Someclass');

$classBuilder->setFinal();
$classBuilder->setAbstract();




echo $classBuilder->render();


echo "\n >>> end \n";

