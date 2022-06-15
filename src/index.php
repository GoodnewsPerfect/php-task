<?php

function prime($input)
{
  // code goes here
  
  if ($input == 1)
   return 0;
   for ($i = 2; $i <= $input/2; $i++)
   {
      if ($input % $i == 0)
      return 0;
   }
   return 1;
  
}

//47 is an integer. you could change the numbers in testing for prime numbers 

$input = 47;
$flag_val = prime($input);
if ($flag_val == 1)
   echo "True";
else
   echo "False"
?>