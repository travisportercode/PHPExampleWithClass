<?php

class Spinach extends Vegetable{
     var $cooked = false;

   function __construct()
   {
       parent::__construct(true, "green");
   }

   function cook_it()
   {
       $this->cooked = true;
   }

   function is_cooked()
   {
       return $this->cooked;
   }

}
