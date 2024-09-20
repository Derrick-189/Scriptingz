<?php 
$Name=readline ("enter your name: ");
$Date_of_Birth=readline ("enter your Date of Birth: ");
$Home_address =readline ("enter Home address: ");
$Birthyear=(int)readline("enter Birth year: ");
$Currentyear=(int)readline("enter Current year: ");
$Age=$Currentyear-$Birthyear;
print"welcome home {$Name} and your now
{$Age} years old";
?>
