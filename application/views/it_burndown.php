<html>
  <head>
    <!--Load the AJAX API-->
   
    
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

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Date');
        data.addColumn('number', 'Planned');
        data.addColumn('number', 'Actual');
        data.addRows([
          [new Date(2014,7,18).toString(), 4, 4],
          [new Date(2014,7,18).toString(), 3, 2],
          [new Date(2014,7,18).toString(), 2, 2],
          [new Date(2014,7,18).toString(), 1, 2],
          [new Date(2014,7,18).toString(), 0, 0]
        ]);

        // Set chart options
        var options = {'title':'Iteration Burn Down',
                       'width':600,
                       'height':400,
                       'colors': ['blue', 'red']
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