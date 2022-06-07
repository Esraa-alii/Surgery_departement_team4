<!DOCTYPE html>

<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.css">

    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    </script><script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart','bar']});
      // google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.load('current', {'packages':['corechart']});
      function drawChart3() {
        var data = google.visualization.arrayToDataTable([
          ['Year Performance', 'Year Performance'],
          <?php echo $ChartData3
          ?>
        ]);
        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('barchart_material'));
        chart.draw(data, options);
      }

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Done', 'Not Done'],
          <?php echo $ChartData
          ?>
        ]);

        var options = {
          title: 'Tasks'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Done', 'Not Done'],
          <?php echo $ChartData2
          ?>
        ]);

        var options = {
          title: 'Doctor VS. Patient'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
        }




    </script>
  </head>
  <body>
  <div class="sidebar">
        <img src="../css/img/blank-profile-picture-973460_640.png" alt="profile" id="side_profile">
        <h2 >Admin Name</h2>
        <p class="vertical_line"> </p>

        <a href="../html/dashboard.html"><i class=" icon home fa-solid fa-house" > </i>Home</a>


        <a href="../html/dashboard_ad_tasks.html"><i class=" icon fa-solid fa-list-check"></i>
                Tasks </a>
                <a href="../html/dashboard_ad_appo.html"><i class="icon fa-solid fa-calendar-check"></i> Appointments</a>
                <p class="vertical_line"> </p>

                <a href="../html/dashboard_ad_doctors.html"> <i class="icon fa-solid fa-user-doctor"></i> Doctors</a>
        <a href="../html/dashboard_ad_patient.html"><i class="icon fa-solid fa-bed-pulse"></i> patient</a>
        <p class="vertical_line"> </p>

        <a href="#"><i class=" icon  fa-solid fa-right-from-bracket"></i> Log out</a>
      </div>
      <div class="container">
          <div class="row">
            <div class="col">
             <h3 class="title"> Admin Dashboard</h5>
            </div>

          </div>
      </div>
    <div class="contentt">
      <div id="piechart" ></div>
      <div id="piechart2"></div>
      <div id="barchart_material"></div>
    </div>

  </body>
</html>