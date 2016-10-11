<?php

class Practice
{
  public function array_until($stopPoint, $arr){

    $index = array_search($stopPoint, $arr);

    if(false === $index)
    {
      throw new InvalidArgumentException('Key does not exist in array');
    }

    return array_slice($arr, 0, $index);
  }

}

 ?>
