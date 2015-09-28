#!/bin/bash
echo  -e "please input two number"
read -p "Pleas input number a:" numberA
read -p "Pleas input number b:" numberB
total=$(($numberA*$numberB))
echo -e "total is  $numberA * $numberB = $total"
