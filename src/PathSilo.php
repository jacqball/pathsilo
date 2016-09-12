<?php
namespace Jacq\PathSilo;

class PathSilo implements Siloable {
    private $tempSeparator="~";
    public function getPath($key){
        return $this->addSeparators($this->separateNumbers($this->normalizeSeparators($key)));
    }
    //exists only to facilitate testing
    protected function getStandardSeparator(){
        return $this->tempSeparator;
    }
    protected function normalizeSeparators($key){
        //first convert all candidate separators to one temp separator
        //replace spaces,_ and - with temp separator
        $key=preg_replace('/[_-\s]/',$this->tempSeparator,$key);
        return $this->normalizeCamelCase($key);
    }
    protected function normalizeCamelCase($key){
        $key=preg_replace('/([a-z])([A-Z])/','$1'.$this->tempSeparator.'$2',$key);
        return $key;
    }
    // converts z9 to z/9, 9Z to 9/Z
    protected function separateNumbers($key){
        $key=preg_replace('/([a-zA-Z])(\d)/','$1'.$this->tempSeparator.'$2',$key);
        $key=preg_replace('/(\d)([a-zA-Z])/','$1'.$this->tempSeparator.'$2',$key);
        return $key;
    }
    protected function addSeparators($key){
        $slash=DIRECTORY_SEPARATOR;
        //replace with separator AND make sure we don't end up two adjacent separators
        // e.g., don't end up with x//y, when should be x/y
        return preg_replace('/~{1,}/',$slash,$key);
    }
}
