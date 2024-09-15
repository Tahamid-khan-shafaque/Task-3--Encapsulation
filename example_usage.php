<?php

require_once 'Employee.php';

// Create a new employee
$employee = new Employee("123", "john doe", "Software Developer", 50000);
// Set the employee's salary
if ($employee->setSalary(75000)) {
    echo "Salary set successfully.\n";
} else {
    echo "Invalid salary.\n";
}

// Display employee information
echo $employee->displayInfo() . "\n";

// Get the annual salary
echo "Annual Salary: $" . number_format($employee->getAnnualSalary(), 2) . "\n";

// Try to set an invalid salary
if ($employee->setSalary(-5000)) {
    echo "Salary set successfully.\n";
} else {
    echo "Invalid salary.\n";
}
