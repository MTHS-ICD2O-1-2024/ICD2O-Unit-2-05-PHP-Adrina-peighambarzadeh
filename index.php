<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Salary in PHP" />
  <meta name="keywords" content="math, salary, PHP, income" />
  <meta name="author" content="Adrina Peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Salary in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Salary in PHP </span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/income_tax.jpg" alt="Income Tax Image" width=250px>
      </div>
      <br>
      <div class="page-content">
        <p>Please enter your employment information below:</p>
      </div>
      <form action="answer.php" method="GET">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type=text pattern="-?[0-9]*(\.[0-9]+)?" id="hours-worked">
          <label class="mdl-textfield__label" for="hours-worked">Hours worked (hours)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type=text pattern="-?[0-9]*(\.[0-9]+)?" id="hourly-wage">
          <label class="mdl-textfield__label" for="hourly-wage">Hourly wage ($)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
          </form>
        </div>
        <br>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          Calculate
        </button>
      </form>
      <br>
      <div class="page-content-answer">
        <div id="TakeHomePay"></div>
      </div>
    </main>
  </div>
</body>

</html>