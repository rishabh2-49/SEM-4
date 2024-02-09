<?php

$basic_pay = 5000;
    // Calculate Dearness Allowance (DA)
    $da = 0.5 * $basic_pay;
    
    // Calculate House Rent Allowance (HRA)
    $hra = 0.1 * $basic_pay;
    
    // Calculate Medical allowance
    $medical = 0.04 * $basic_pay;
    
    // Calculate Gross Salary
    $gross_salary = $basic_pay + $da + $hra + $medical;
    
    // Calculate Insurance
    $insurance = 0.07 * $gross_salary;
    
    // Calculate Provident Fund (PF)
    $pf = 0.05 * $gross_salary;
    
    // Calculate Deduction
    $deduction = $insurance + $pf;
    
    // Calculate Net Salary
    $net_salary = $gross_salary - $deduction;
    

// Test the function


echo "Dearness allowance is : $da </br>";

echo "Net Salary is : $net_salary</br>";

echo "Provident Fund is : $pf</br>";

echo "Deduction Salary is : $deduction</br>";

echo "Insurance is : $insurance</br>";

echo "Medical Expenditure is : $medical</br>";

echo "House Rent Allowance is : $hra</br>";

echo "Gross Salary is : $gross_salary</br>";


?>
