<!DOCTYPE html>
 <html>
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <?php
      $data = require("data.php");

      ?>
    <!--  <pre> <?php var_dump($chunks) ?></pre> -->
      <table>
        <caption>Liste des Dépenses Militaires par Pays</caption>
        <thead>
          <tr>
            <th>#</th>
            <th>Pays</th>
            <th>Dépenses militaires (M$)</th>
            <th>% du PIB</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $count = isset($_GET["count"]) ? $_GET["count"]: 15;
          $page = isset($_GET["page"]) ? $_GET["page"]: 0;
          $chunks = array_chunk($data, $count);
          $data = $chunks[$page];
          ?>
          <?php
          function validate_input($param, $name, $min, $max, $defaultValue){
            if (!isset($param[$name])){
              return $defaultValue;
            }
          }
          ?>
          <!--work here-->
          <?php
          // iterate through first level of $data array
          for ($i = 0; $i < count($data); $i++){
            $tr = "";
          // iterate through second level of $data array
            for ($j = 0; $j < count($data[$i]); $j++){
              //add item to line
              $tr = $tr . "<td>" . $data[$i][$j] . "</td>";
            }
            echo "<tr>$tr</tr>";
          }
          ?>

        </tbody>
        <tfoot>
          <tr><td colspan="4">
            <!-- work here pages -->
            <?php
            for ($pageNumber = 0; $pageNumber < count($chunks); $pageNumber++) {
            echo "<a href='?page=$pageNumber&count=$count'>  " . ($pageNumber + 1) . "  </a>";
          }
            ?>
            <?php
            for ($i = 0; $i < count($chunks); $i++){
              echo "<a href='?page=$i&count=$count'> Page" . ($i + 1) . "</a>";
            }
            ?>

          </td></tr>
        </tfoot>
      </table>
    </body>
  </html>
