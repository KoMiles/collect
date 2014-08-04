#/bin/bash
echo -e "You should input 2 numbers,i will cross them!\n"
read -p "Please input your first number:" firstnum
read -p "Please input your second number:" secondnum
echo $firstnum
echo $secondnum
total=$(($firstnum*$secondnum))
echo $total
echo -e "\nThe result of $firstnum X $secondnum is >> $total"
