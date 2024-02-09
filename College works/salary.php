<?php

function calculateNetSalary($basic_pay) {
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
    
    return $net_salary;
}

// Test the function
$basic_pay = readline("Enter the basic pay in PHP: ");
$net_salary = calculateNetSalary($basic_pay);
echo "Net Salary: PHP " . round($net_salary, 2);
?>