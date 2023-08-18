<?php

class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary cannot be negative.");
        }
    }
}

// Impliment Employee Class
try {
    $employee = new Employee('John Doe', 50000);
    echo "Employee Name: " . $employee->getName() . "\n";
    echo "Employee Salary: $" . $employee->getSalary() . "\n";

    // Try to set a negative salary
    $employee->setSalary(-1000);

    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}