<?php

namespace Owllog\SolveIo\MacberTest;

use PDO;

class MacberTest3
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=mysql;dbname=solve_db", "meklad", "password");
    }

    public function insertData()
    {
        $queries = [
            "DROP DATABASE solve_db",
            "CREATE DATABASE solve_db",
            "USE solve_db",
            "CREATE TABLE IF NOT EXISTS Employee (id INT, name VARCHAR(255), salary INT, departmentId INT)",
            "CREATE TABLE IF NOT EXISTS Department (id INT, name VARCHAR(255))",
            "TRUNCATE TABLE Employee",
            "INSERT INTO Employee (id, name, salary, departmentId) VALUES ('1', 'Ahmed', '85000', '1')",
            "INSERT INTO Employee (id, name, salary, departmentId) VALUES ('2', 'Hany', '80000', '2')",
            "INSERT INTO Employee (id, name, salary, departmentId) VALUES ('3', 'Samy', '60000', '2')",
            "INSERT INTO Employee (id, name, salary, departmentId) VALUES ('4', 'Mona', '90000', '1')",
            "INSERT INTO Employee (id, name, salary, departmentId) VALUES ('5', 'Jalela', '69000', '1')",
            "INSERT INTO Employee (id, name, salary, departmentId) VALUES ('6', 'Ramy', '85000', '1')",
            "INSERT INTO Employee (id, name, salary, departmentId) VALUES ('7', 'Waled', '70000', '1')",
            "TRUNCATE TABLE Department",
            "INSERT INTO Department (id, name) VALUES ('1', 'DEV')",
            "INSERT INTO Department (id, name) VALUES ('2', 'Support')"
        ];

        foreach ($queries as $query) {
            $this->pdo->exec($query);
        }
    }

    public function findHighEarners(): array
    {
        $query = "
            WITH RankedSalaries AS (
                SELECT
                    e.id AS employeeId,
                    e.name AS employee,
                    e.salary,
                    e.departmentId,
                    d.name AS department,
                    DENSE_RANK() OVER (PARTITION BY e.departmentId ORDER BY e.salary DESC) AS salaryRank
                FROM
                    Employee e
                    JOIN Department d ON e.departmentId = d.id
            )
            
            SELECT
                department,
                employee,
                salary
            FROM
                RankedSalaries
            WHERE
                salaryRank <= 3;
        ";

        $statement = $this->pdo->query($query);

        if (!$statement) {
            die("Query failed: " . $this->pdo->errorInfo()[2]);
        }

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}