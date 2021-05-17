<?php

class Complex {
	private $re, $im;
	
	function __construct($re = 0, $im = 1){
		$this->re = $re;
		$this->im = $im;
	}

	function sum(Complex $x){
    $this->re += $x->re;
    $this->im += $x->im;
	}

  function sub(Complex $x){
    $this->re -= $x->re;
    $this->im -= $x->im;
  }

  function multi(Complex $x){
    $a1 = $this->re;
    $b1 = $this->im;
    if($b1 == 0) $b1 = 1;
    $a2 = $x->re;
    $b2 = $x->im;
    if($b2 == 0) $b2 = 1;
    $this->re = $a1 * $a2 - $b1 * $b2;
    $this->im = $a1 * $b2 + $a2 * $b1;
  }

  function div(Complex $x){
    $a1 = $this->re;
    $b1 = $this->im;
    if($b1 == 0) $b1 = 1;
    $a2 = $x->re;
    $b2 = $x->im;
    if($b2 == 0) $b2 = 1;
    $this->re = ($a1 * $a2 + $b1 * $b2) / ($a2 * $a2 + $b2 * $b2);
    $this->im = ($a2 * $b1 - $a1 * $b2) / ($a2 * $a2 + $b2 * $b2);
  }

	function __toString(){
	  return "a=$this->re; bi=$this->im";
  }
}

$a = new Complex(10, -20);
$b = new Complex(-15, 30);

$a->sum($b);
echo $a . "\n";
$a->sub($b);
echo $a . "\n";
$a->multi($b);
echo $a . "\n";
$a->div($b);
echo $a;
