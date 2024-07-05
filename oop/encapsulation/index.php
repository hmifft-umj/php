<?php

class Payment {

    public $price = 100_000;

    /* Private melarang untuk melakukan akses dari luar class
    hal ini dimaksudkan untuk melindungi properties atau methods
    */
    private $balance = 0;
    private $discount = 0;    

    private function price_calculate(){
        $discountPrice = $this->price * $this->discount;        
        return $this->price - $discountPrice;
    }

    /* Cara untuk melakukan akses pada properties private adalah 
    dengan menggunakan methods public yang ada pada kelasnya */    
    public function set_balance($amount, $discount = 0.2){
        $this->balance += $amount;
        $this->discount += $discount;
    }

    public function get_change(){        
        return $this->balance - $this->price_calculate();
    }
}

$payment = new Payment();
$setBalance = $payment->set_balance(100_000);
$getBalance = $payment->get_change();
print("Kembalian saya Rp.{$getBalance} \n");

?>