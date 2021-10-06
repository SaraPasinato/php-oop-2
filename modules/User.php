<?php

 class User{
    /*//! attributes */
    protected $username;
    protected $email;
    protected $password;

    /*//? contruct */

   public function __construct($_username,$_email,$_password)
   {
       $this->setUsername($_username);
       $this->setEmail($_email);
       $this->setPassword($_password);
   }
    /*//? getter */

    public function getUsername(){
       return $this->username;
   }
    public function getEmail(){
       return $this->email;
   }
    public function getPassword(){
       return $this->password;
   }
    /*//? setter */
   protected function setUsername($_username){
       if (is_numeric($_username)) {
           throw new Exception('hai inserito un valore numerico');
       }else if(strlen($_username)<6){
           throw new Exception(('hai inserito meno di 6 caratteri'));
       }else{
           $this->username=$_username;
       }
   }

   protected function setEmail($_email){
       if (is_numeric($_email)) {
           throw new Exception('hai inserito un valore numerico');
       }else if(strpos($_email,'@')<=0 || strpos($_email,'.')<=0){
           throw new Exception(('hai inserito  @ o  il dominio'));
       }else if(strlen($_email)<6){
        throw new Exception(('hai inserito meno di 6 caratteri'));
       }else{
           $this->email=$_email;
       }
   }

   protected function SetPassword($_password){
       if (is_numeric($_password)) {
           throw new Exception('hai inserito un valore solo numerico');
       }else if(strlen($_password)<6){
           throw new Exception(('hai inserito meno di 6 caratteri'));
       }else{
           $this->password=$_password;
       }
   }

}
