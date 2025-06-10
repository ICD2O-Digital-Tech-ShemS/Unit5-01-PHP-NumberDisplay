<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Speed of light in different mediums" />
  <meta name="keywords" content="immaculata, icd2o" />
  <meta name="author" content="Kukwac" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LOOP</title>
</head>
<body>
  <form action="./results.php" method="post" target="results">
    <table>
      <tr>
        <td>
          <h6>Min Number</h6>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="number" name="MinNumber" />
          </div>
        </td>
        <td>
          <h6>Max Number</h6>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="number" name="MaxNumber" />
          </div>
        </td>
      </tr>
    </table>
    <input type="submit" value="ENTER">
  </form>

  <br/>
    <iframe id="" name="results">			
      <div id="$numbers"></div>
      <div id="$numbers2"></div>
    </iframe>
</body>
</html>
