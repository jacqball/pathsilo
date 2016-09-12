<?php
namespace Jacq\PathSilo;

// Silos data based on date in form Ymd 
class DatePathSilo implements Siloable {
    //expects String in format Ymd 
    public function getPath($key){
        if(!preg_match('/(\d\d\d\d)(\d\d)(\d\d)$/',$key,$matches)){
            throw new \Exception("Key must be a date in Ymd format, e.g. 20160822");
        } else {
            $slash=DIRECTORY_SEPARATOR;
            return $matches[1].$slash.$matches[2].$slash.$matches[3];
        }
    }
}
