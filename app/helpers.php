<?php
function getTypeOfSwicth(string $type) {
  $arr = [];
  $type = str_split($type, 1);
  for($i=0; $i < count($type); $i++)
  {
    switch ($type[$i]) {
      case '0':
        $arr[$i] = "rozjazd";
        break;
      
      case '1':
        $arr[$i] = "rygiel";
        break;
      
      case '2':
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
