@extends('admindashboardlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart', 'bar']
        });
        // google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        google.charts.setOnLoadCallback(drawChart2);
        google.charts.setOnLoadCallback(drawChart3);
        google.charts.load('current', {
            'packages': ['corechart']
        });

        function drawChart3() {
            var data = google.visualization.arrayToDataTable([
                ['Year Performance', 'Year Performance'],
                <?php echo $ChartData3;
                ?>
            ]);
            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };
            var chart = new google.visualization.LineChart(document.getElementById('barchart_material'));
            chart.draw(data, options);
        }

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Done', 'Not Done'],
                <?php echo $ChartData;
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
                <?php echo $ChartData2;
                ?>
            ]);

            var options = {
                title: 'Doctor VS. Patient'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

            chart.draw(data, options);
        }
    </script>
@endsection

@section('js')
    <div id="piechart"></div>
    <div id="piechart2"></div>
    <div id="barchart_material"></div>
@endsection
