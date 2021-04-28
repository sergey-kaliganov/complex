<?php

class Complex {
	private $re, $im;
	
	function __construct($re = 0, $im = 0){
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
    $this->re *= $x->re;
    $this->im *= $x->im;
  }

  function div(Complex $x){
    $this->re /= $x->re;
    $this->im /= $x->im;
  }

	function __toString(){
	  return "a=$this->re; bi=$this->im";
  }
}

$a = new Complex(10, 20);
$b = new Complex(-15, 30);

$a->sum($b);
echo $a . "\n";
$a->sub($b);
echo $a . "\n";
$a->multi($b);
echo $a . "\n";
$a->div($b);
echo $a;