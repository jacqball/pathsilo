<?php
use Jacq\PathSilo\DatePathSilo;

class DatePathSiloTest extends \PHPUnit_Framework_TestCase
{
    private $slash=DIRECTORY_SEPARATOR;
    public function testValidDateParsing(){
        $slash=$this->slash;
        //just some date strings to test
        $tests=array(
            '20160823'=>'2016'.$slash.'08'.$slash.'23',
            '20170217'=>'2017'.$slash.'02'.$slash.'17',
            '20181225'=>'2018'.$slash.'12'.$slash.'25',
            '20190101'=>'2019'.$slash.'01'.$slash.'01'
        );
        $s=new DatePathSilo();
        foreach($tests as $in=>$out){
            $this->assertSame($out,$s->getPath($in));
        }
    }

    public function testBadDate(){
        //$this->expectException(BadDateException);
        $this->setExpectedException('Exception');
        $s=new DatePathSilo();
        $s->getPath('this is not a date');
    }
}
