<?php

class Date {
     /*//! attributes */
    protected $day;
    protected $month;
    protected $year;
    /*//? contruct */
    
   public function  __construct($d,$m,$y)
     {
         $this->setMonth($m);
         $this->setYear($y);
         $this->setDay($d,$m,$y);
     }
   /*//? getter */
    public function getDay(){
        return $this->day;
    }
     public function getMonth(){
        return $this->month;
    }
     public function getYear(){
        return $this->year;
    }
   
     /*//? setter */ 

     protected function setYear($y){
         if($y<date('Y') || $y>2100){
             throw new Exception('anno non valido ');
         }else if (!is_numeric($y)){
            throw new Exception('anno non numerico');
         }else{
             $this->year=$y;
         }
     }
     protected function setMonth($m){
         if($m < 1 || $m > 12){
             throw new Exception('mese non valido ');
         }else if (!is_numeric($m)){
            throw new Exception('anno non numerico');
         }else{
             $this->month=$m;
         }
     }
     protected function setDay($d,$m,$y){
         if($d < 1 || $d > ($this->dayInMonth($m,$y))){
             throw new Exception('mese non valido ');
         }else if (!is_numeric($d)){
            throw new Exception('anno non numerico');
         }else{
             $this->day=$d;
         }
     }

     protected function dayInMonth($m,$y){
         switch($m){
             case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                return 31;
                break;
            case 4: case 6: case 9: case 11:
                return 30;
                break;
            case 2: 
                return ($this->is_leap_year($y) ? 29 : 28);
                break;
         }
     }

     private function is_leap_year($y)
     {
       return ((($y % 4) == 0) && ((($y % 100) != 0) || (($y %400) == 0)));
     }
    
}


