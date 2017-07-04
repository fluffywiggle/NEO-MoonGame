<?php // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT bestScore, GROUP_CONCAT(address)as address FROM Accounts GROUP by bestScore ORDER BY bestScore DESC";
$result = $conn->query($sql);
      $i = 1;
if ($result->num_rows > 0) {

echo	'<table style="max-width:500px; ">
    <tr>
        <th width="100">Rank</td>
    <th width="100">User</td>
        <th width="100">Score</td>
          <th width="100">Reward</td>

    </tr>';
    // output data of each row
    while($i <= $numAmount) {

      $row = $result->fetch_assoc();

    //  $address = $row["address"];
      $address = explode(',', $row['address']);
  //    $user = substr($address, 0, 10);
          $score = $row["bestScore"];
          $reward = array("1 GAS","0.5 GAS","0.3 GAS","0.1 GAS","0.1 GAS");
          $arraynum = $i - 1;

        echo '<tr><td><b>'.$i.'</b></td>
                               <td>';


            for ($d =0; $d < count($address); $d++ ) {
              echo substr($address[$d], 0, 10);
              if (count($address) > 1){
                echo "<br>";
              }
            }
            echo '</td>
                                <td>'.number_format($score).'</td>
                  <td>'.$reward[$arraynum].'</td></tr>'




                  ;
$i++;


    }
 echo '</table>'; }

else {
    echo "0 results";
}
$conn->close();
?>
