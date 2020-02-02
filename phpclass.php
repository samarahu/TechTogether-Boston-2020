<html>
<body>

<?php

  $a=5;
  echo $a;
  echo"<br/>";

  $b=$a/2;
  echo $b;
  echo"<br/>";

  $myString="I looove dogs";
  echo $myString[6];
  echo"<br/>";

  $mySubString=substr($myString,2,6);
  echo $mySubString;
  echo"<br/>";

  $myarray= array("a","b","c","d","e");
  echo $myarray[1];
  echo"<br/>";

  $cde=array_slice($myarray,2);
  var_dump($cde);
  echo"<br/>";

  #You can get an array of names using the function explode
  #(split thing,string);
  $mystring="bob,mary,jane,john";
  $mynames=explode(",",$mystring);
  var_dump($mynames);
  echo"<br/>";

  

 ?>

</body>
</html>
