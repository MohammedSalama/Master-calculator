<?php
require "advancedcal.php";
require "abscal.php";
require "std/stdcal.php";
require "std/stddrawcal.php";
class cal extends abscal implements stdcal , stddrawcal
{
    //Property
    public $num;
    public $num1;
    public $op;
    

    public function __construct($n,$n1,$op)
    {
            //Property
        $this->num = $n;
        $this->num1 = $n1;
        $this->op = $op;

        if($this->op == "+")
        {
            echo $this->add();
        }
        elseif($this->op == "-")
        {
            echo $this->sub();
        }
        elseif($this->op == "*")
        {
            echo $this->mul();
        }
        elseif($this->op == "/")
        {
            echo $this->div();
        }
        elseif($this->op == "%")
        {
            echo $this->mod();
        }
        
    }

    //Adding
    public function add()
    {
        if(is_numeric($this->num) && is_numeric($this->num1))
        {
            return $this->num + $this->num1;
        }
        else 
        {
            echo "Access Denied";
        }
        
    }

    //Subtract
    public function sub()
    {
        if(is_numeric($this->num) && is_numeric($this->num1))
        {
            return $this->num - $this->num1;
        }
        else 
        {
            echo "Access Denied";
        }
    }

    //Multiply
    public function mul()
    {
        if(is_numeric($this->num) && is_numeric($this->num1))
        {
            return $this->num * $this->num1;
        }
        else 
        {
            echo "Access Denied";
        }
    }

    //Division
    public function div()
    {
        if(is_numeric($this->num) && is_numeric($this->num1))
        {
            return $this->num / $this->num1;
        }
        else 
        {
            echo "Access Denied";
        }
    }

    //Modivision
    public function mod()
    {
        if(is_numeric($this->num) && is_numeric($this->num1))
        {
            return $this->num % $this->num1;
        }
        else 
        {
            echo "Access Denied";
        }
    }

    static function drawcal()
    {
        echo 
        '
        <form action="index.php" method="post">
        <input type="text" name="x">
        <input type="text" name="y">
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="submit" name="submit" value="Enroll">

        </form>
        ';
    }
}