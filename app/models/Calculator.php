<?php

/**
 * Created by PhpStorm.
 * User: andres.cuervo
 * Date: 11/10/2016
 * Time: 18:44
 */
class Calculator
{
    protected $result = 0;
    protected $operands = [];
    protected $operation;

    public function getResult()
    {
        return $this->result;
    }

    public function setOperands()
    {
        $this->operands = func_get_args();
    }

    public function setOperation(Operation $operation)
    {
            $this->operation = $operation;
    }


    public function calculate()
    {
        foreach ($this->operands as $num)
        {
            if(!is_numeric($num))
                throw new InvalidArgumentException;

            $this->result = $this->operation->run($num, $this->result);
        }

        return $this->result;
    }

}

interface Operation{
    /**
     * Perform the arithmetic
     *
     * @param   integer $num
     * @param   integer $current
     * @return  integer
     */
    public function run($num, $current);
}

class Addition implements Operation
{
    public function run($num, $current)
    {
        return $current + $num;
    }
}

class Subtraction implements Operation
{
    public function run($num, $current)
    {
        return $current - $num;
    }
}

class Multiplication implements Operation
{
    public function run($num, $current)
    {
        if($current === 0) return $num;
        return $current * $num;
    }

}