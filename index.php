<!DOCTYPE html>
<html>
<head>
  <title>LOOP</title>
  <meta charset="utf-8" />
  <meta name="description" content="Speed of light in different mediums" />
  <meta name="keywords" content="immaculata, icd2o" />
  <meta name="author" content="Kukwac" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-32x32.png" />
  <link rel="manifest" href="./Favicons/site.webmanifest" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <?php 'calculate.php'; ?>

  <form method="post" action="">
    <table>
      <tr>
        <td>
          <h6>Min Number</h6>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="number" name="minNumber" required />
            <label class="mdl-textfield__label">Enter number ...</label>
          </div>
        </td>
        <td>
          <h6>Max Number</h6>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="number" name="maxNumber" required />
            <label class="mdl-textfield__label">Enter number ...</label>
          </div>
        </td>
      </tr>
    </table>
    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
      Display Result
    </button>
  </form>

  <br />
  <div id="min"><?php echo $minOutput; ?></div>
  <div id="max"><?php echo $maxOutput; ?></div>

</body>
</html>
