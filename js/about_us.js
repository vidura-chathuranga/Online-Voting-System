<script>
<div id="piechart"></div>
        
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Task', 'Reviews'],
          ['Accuracy', 5],
          ['Transparency', 4],
          ['well planed architecture', 4],
          ['User Friendly', 4],
          ['Accessability', 2],
        ]);
        
          // Optional; add a title and set the width and height of the chart
          var options = {'title':'Customer reviews about our website', 'width':550, 'height':400};
        
          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }
        </script>
        
    

</script>