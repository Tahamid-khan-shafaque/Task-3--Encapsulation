# Task 3: Encapsulation
# Employee Management System

## Overview

This system provides a simple Employee class to manage employee data, demonstrating the principle of encapsulation in object-oriented programming.

## Class: Employee

### Properties

- `id` (private): Unique identifier for the employee
- `name` (private): Employee's full name
- `position` (private): Employee's job position
- `salary` (private): Employee's salary

### Methods

- `__construct($id, $name, $position)`: Constructor to initialize employee data
- `getId()`: Returns the employee's ID
- `getName()`: Returns the employee's name
- `setName($name)`: Sets the employee's name
- `getPosition()`: Returns the employee's position
- `setPosition($position)`: Sets the employee's position
- `getSalary()`: Returns the employee's salary
- `setSalary($salary)`: Sets the employee's salary with validation
- `getAnnualSalary()`: Calculates and returns the annual salary
- `displayInfo()`: Returns a formatted string with employee information
- `isValidSalary($salary)` (private): Validates the salary input

## Explanation of Output

1. `Salary set successfully.`: Initial salary of $75,000 was successfully set.
2. `Employee ID: 1, Name: John Doe...`: Result of calling `displayInfo()` method.
3. `Annual Salary: $900,000.00`: Calculated annual salary (monthly salary * 12).
4. `Invalid salary.`: Message when trying to set an invalid salary (-5000).

## Key Features

1. Encapsulation: All properties are private, accessed through public methods.
2. Salary Validation: `setSalary()` method ensures salary is within acceptable range.
3. Formatted Output: `displayInfo()` provides neatly formatted employee details.
4. Annual Salary Calculation: `getAnnualSalary()` calculates yearly salary.

## Security Considerations

- Salary is private, accessed/modified only through getter and setter methods.
- Salary validation prevents setting invalid or unreasonable amounts.

## System Requirements

- PHP 7.0 or higher
- Command-line interface to run PHP scripts

## How to Run

1. Ensure PHP is installed on your system.
2. Save both `Employee.php` and `example_usage.php` in the same directory.
3. Open a terminal or command prompt.
4. Navigate to the directory containing the PHP files.
5. Run the command: `php example_usage.php`