<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Salary, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Adrina Peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Salary, in PHP</title>

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />

  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Salary, in PHP</span>
      </div>
    </header>

    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/income_tax.jpg" alt="Income Tax Image" onerror="this.style.display='none'">
      </div>

      <div class="page-content-php">
        <div id="user-info">
          <?php
          // calculate take-home pay
          function calculateTakeHomePay($hoursWorked, $hourlyWage) {}
          // Calculate pay
          $grossPay = $hoursWorked * $hourlyWage;
          $taxRate = 0.18;
          $taxAmount = $grossPay * $taxRate;
          $takeHomeSalary = $grossPay - $taxAmount;

          // Output
          echo "<p>Your take-home pay: <strong>$" . number_format($takeHomeSalary, 2) . "</strong></p>";
          echo "<p>Taxes deducted: <strong>$" . number_format($taxAmount, 2) . "</strong></p>";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>