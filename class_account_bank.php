<?php
    require_once 'class_account.php';
   class AccountBank extends Account{
       public $customer;
       

       function __construct($nomor,$saldo,$customer){
           parent::__construct($nomor,$saldo);
           $this->customer = $customer;
       }

       public function transfer($ab_tujuan,$uang){
           $ab_tujuan->deposit($uang);
           $this->withdraw($uang);
           
       }

       public function cetak(){
           parent::cetak();
           echo '<br>Nama : '.$this->customer;
       }
   }
?>