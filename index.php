<?php
/**
 * User Interface Page: index.php
 * Displays the Person object details in an HTML table using the Person class methods.
 */

// Require the Person class definition
require_once 'person.php';

// Instantiate 5 Person objects (2 of which have an empty address line 2)
$people = [
    new Person("John", "Doe", "123 Main St", "Apt 4B", "Richmond", "VA", "23220"),
    new Person("Jane", "Smith", "456 Oak Ave", "", "Virginia Beach", "VA", "23451"), // No Address Line 2
    new Person("Robert", "Johnson", "789 Pine Rd", "Suite 100", "Norfolk", "VA", "23510"),
    new Person("Emily", "Davis", "321 Elm St", "", "Chesapeake", "VA", "23320"),      // No Address Line 2
    new Person("Michael", "Wilson", "654 Maple Dr", "Unit 12", "Roanoke", "VA", "24011")
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name Wk 2 Performance Assessment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f4f6f9;
            color: #333;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 8px;
        }
        h2 {
            color: #34495e;
            margin-top: 25px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #dddddd;
        }
        th {
            background-color: #3498db;
            color: #ffffff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <!-- Page Title with Your Name -->
    <h1>Your Name - Week 2 Performance Assessment</h1>

    <!-- Header retrieved via static method from Person class -->
    <h2><?php echo Person::getHeaderLabel(); ?></h2>

    <!-- Data Table -->
    <table>
        <thead>
            <tr>
                <!-- Column Headers retrieved via static methods from Person class -->
                <th><?php echo Person::getFullNameLabel(); ?></th>
                <th><?php echo Person::getAddressLabel(); ?></th>
                <th><?php echo Person::getCityStateZipLabel(); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $person): ?>
                <tr>
                    <!-- Data cells retrieved via non-static methods on each Person instance -->
                    <td><?php echo htmlspecialchars($person->getFormattedName()); ?></td>
                    <td><?php echo htmlspecialchars($person->getFormattedAddress()); ?></td>
                    <td><?php echo htmlspecialchars($person->getFormattedLocation()); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
