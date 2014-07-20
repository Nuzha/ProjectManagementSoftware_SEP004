<html>
  <head>
    <!--Load the AJAX API-->
  <?php 
   
    //Total user stories
    $totalUs = $userStory_qry[0]['num_of_userstories'];
    echo $totalUs;

    //Iteration Duration
    $duration = $days[0]['Duration'];
    echo $duration;
   
    //Iteration Start date
    $s_date = $start_date[0]['i_start_date'];
    echo $s_date;
  
    //Worked dates for actual values
    foreach ($end_dates->result() as $dates)
    {
         //echo $dates->end_date; 
         //echo date('y/m/d', strtotime($dates->end_date));   
        
         $dateArr[] = (date('d-m-y', strtotime($dates->end_date))); 
    }
    ?>
    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the chart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the chart, passes in the data and
      // draws it.
      function drawChart() {      
        
        var days = <?php echo json_encode($duration); ?>;
        var userStories = <?php echo json_encode($totalUs); ?>;
        var itrStartDate = new Date(2014, 7, 1);
      //<?php //echo json_encode($s_date); ?>;
        //var usEndDates = <?php //echo json_encode($dateArr); ?>;
        var usEndDates = [new Date(2014, 7, 2), new Date(2014, 7, 10), new Date(2014, 7, 20), new Date(2014, 7, 22), new Date(2014, 7, 24)];
        
        var daysPerUserStory = days / userStories;
        
        var DAY = 24 * 60 * 60 * 1000;
        var actualVals = [];
        var currentDate = new Date();
        currentDate.setTime(itrStartDate.getTime() - DAY); // chart starts at 0 not 1
        var currentUS = 0;
        
        for (var i = 0; i <= days; i++) {
          if (currentUS < usEndDates.length && currentDate.getTime() == usEndDates[currentUS].getTime()) {
            i--; // have to check the same day next time. there could be two or more user stories ending on the same day
            currentUS++;
          } else {
            currentDate.setTime(currentDate.getTime() + DAY);
          }
          actualVals.push(userStories - currentUS);
        }
        
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('number', 'Day');
        data.addColumn('number', 'Planned');
        data.addColumn('number', 'Actual');
        for (var i = 0; i <= days; i++) {
          data.addRow([i, userStories - i / daysPerUserStory, actualVals[i]]);
        }

        // Set chart options
        var options = {'title':'Burnt Down Chart',
                       'width':500,
                       'height':400,
                       'colors': ['blue', 'red'],
                       'vAxis': {
                          viewWindow:{
                            'max': Math.ceil(userStories / 4) * 4
                          }
                        }
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the chart-->
    <div id="chart_div"></div>
   
  </body>
</html>