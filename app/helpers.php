<?php

use SebastianBergmann\Type\NullType;

function getTypeOfSwitch(string $type)
{
  $arr = [];
  $type = str_split($type, 1);
  for ($i = 0; $i < count($type); $i++) {
    switch ($type[$i]) {
      case "0":
        $arr[$i] = "rozjazd";
        break;

      case "1":
        $arr[$i] = "rygiel";
        break;

      case "2":
        $arr[$i] = "wykolejnica";
        break;

      default:
        $arr[$i] = "?x";
        break;
    }
  }
  $str = implode(" / ", $arr);
  return ucfirst($str);
}

function getControl($control)
{
  if(isset($control)){
    $arr = [];
    $control = str_split($control, 1);
    for ($i = 0; $i < count($control); $i++) {
      switch ($control[$i]) {
        case "0":
          $arr[$i] = "-";
          break;

        case "1":
          $arr[$i] = "kn";
          break;

        default:
          $arr[$i] = "?x";
          break;
      }
    }
    $str = implode(" / ", $arr);
    return $str;
    }
}

function pre2($variable)
{
  echo "<pre>";
  print_r($variable);
  echo "</pre>";
}
