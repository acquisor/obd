<?php
require 'connect.php';
$qry = "SELECT `time`, `rpm`, `speed`, `engineload`, `throttle` from `obd_log` WHERE `date`='2019-04-14' ORDER BY `time` ASC";
$result = $conn->query($qry);

if($result === FALSE) {
    echo mysqli_errno($result) .": ". mysqli_error($result) ."/n";
    die(mysqli_error());
}
    $i = 0; //iteration counter - start at 0

    $totalRows = mysqli_num_rows($result); // we need this to know when to change the output
    $targetRows = $totalRows - 1; //row indies start from 0, not 1.

    foreach ($result as $row){ 

        $comTime = str_replace(":",",",$row['time']); // for each row, remove the : and put , in its place
        if ($targetRows == $i) { // if the index is the same value as the target (ie, it's the last row)...

            $temp = "[[".$comTime."],".($row['rpm']/1000).",".($row['speed']).",".($row['engineload']).",".($row['throttle'])."]". PHP_EOL;
            } else {
            $temp = "[[".$comTime."],".($row['rpm']/1000).",".($row['speed']).",".($row['engineload']).",".($row['throttle'])."],". PHP_EOL;
            }
        $i = $i + 1; 
        $rows[] = $temp; 
    }

 $table = $rows;
 $data = implode($table); //format the table as a single string, with line returns

//echo $i;
//echo $data;

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  </head>
  <body>
    <div id="chart" style="width: 900px; height: 500px"></div>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart(){
        var data = new google.visualization.DataTable();
            data.addColumn('timeofday','Time'); 
            data.addColumn('number','RPM X 1000');
            data.addColumn('number','Speed(kmph)');
            data.addColumn('number','EngineLoad(%)');
            data.addColumn('number','Throttle(%)');

            data.addRows([              
                <?php echo $data; ?> //dump the result into here, as it's correctly formatted   
            ]);

        var options = {
            title: 'OBD data log plot',
            legend: { position: 'bottom' },
            width: 900,
            height: 500,
            hAxis: { format: 'hh:mm:ss' }
        }; 

    var chart = new google.visualization.LineChart(document.getElementById('chart'));
      chart.draw(data, options);    
      }
    </script>
  </body>
</html>