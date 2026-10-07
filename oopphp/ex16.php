<?php

class Employee
{
    public function __construct(
        public string $name,
        public string $jobTitle
    ) {
    }
}

class Department
{
    private array $employees = [];

    public function __construct(public string $name)
    {
    }

    public function addEmployee(Employee $employee): void
    {
        $this->employees[] = $employee;
    }

    public function getEmployees(): array
    {
        return $this->employees;
    }
}

$department = new Department("Engineering");
echo $department->name . "<br>";

$employee1 = new Employee("Himanshu", "Developer");
$department->addEmployee($employee1);
echo $employee1->name . " - " . $employee1->jobTitle . "<br>";

$employee2 = new Employee("Keval", "Designer");
$department->addEmployee($employee2);
echo $employee2->name . " - " . $employee2->jobTitle . "<br>";

?>