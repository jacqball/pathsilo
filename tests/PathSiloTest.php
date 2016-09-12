<?php
use Jacq\PathSilo\PathSilo;

class PathSiloTest extends \PHPUnit_Framework_TestCase
{
    private $slash=DIRECTORY_SEPARATOR;
    public function __construct(){
        $this->s=new PathSilo();
    }    

    public function testUnderscore(){
        $slash=$this->slash;
        $this->assertSame($this->s->getPath('Products_12'),'Products'.$slash.'12');
    }

    public function testUnderscores(){
        $slash=$this->slash;
        $this->assertSame($this->s->getPath('Products_thumb_13'),'Products'.$slash.'thumb'.$slash.'13');
    }
    
    public function testDash(){
        $slash=$this->slash;
        $this->assertSame($this->s->getPath('Products-thumb16'),'Products'.$slash.'thumb'.$slash.'16');
    }

    public function testCamelCase(){
        $slash=$this->slash;
        $this->assertSame($this->s->getPath('ProductsThumb14'),'Products'.$slash.'Thumb'.$slash.'14');
    }

    public function testMultipleRepeatedSeparators(){
        $slash=$this->slash;
        $this->assertSame($this->s->getPath('Products-_-__- thumb15'),'Products'.$slash.'thumb'.$slash.'15');
    }

    public function testSpaces(){
        $slash=$this->slash;
        $this->assertSame($this->s->getPath('Products thumb 15'),'Products'.$slash.'thumb'.$slash.'15');
    }

    public function testFileExtension(){
        $slash=$this->slash;
        $this->assertSame($this->s->getPath('productsMensShoes17.jpg'),'products'.$slash.'Mens'.$slash.'Shoes'.$slash.'17.jpg');
    }
}
