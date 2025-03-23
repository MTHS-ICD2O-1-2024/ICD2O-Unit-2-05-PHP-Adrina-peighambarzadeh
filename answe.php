<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Salary, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Adrina. peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Salary, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Salary, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/income_tax.jpg" alt="laptop image" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          // Function to calculate take-home pay
          function calculateTakeHomePay($hoursWorked, $hourlyWage)
          {
            // Process
            $grossPay = $hoursWorked * $hourlyWage;
            $taxAmount = $grossPay * 0.18;
            $takeHomeSalary = $grossPay - $taxAmount;

            // Output
            echo "Your pay will be: $" . number_format($takeHomeSalary, 2) . "<br>";
            echo "The government will take: $" . number_format($taxAmount, 2);
          }

          // Example usage (assuming values are passed via GET request)
          if (isset($_GET['hours-worked']) && isset($_GET['hourly-wage'])) {
            $hoursWorked = floatval($_GET['hours-worked']);
            $hourlyWage = floatval($_GET['hourly-wage']);
            calculateTakeHomePay($hoursWorked, $hourlyWage);
          }
          ?>
</html>