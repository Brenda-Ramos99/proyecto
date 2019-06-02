<?php
 //require '../Modelo/conexion.php';
 require '../Modelo/daoVoto.php';
 $votos= new daoVoto(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery.js"></script>	
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                location.reload();
            },60000);
        });
    </script>
    </head>
    <body>
        <script src="code/highcharts.js"></script>
        <script src="code/modules/data.js"></script>
        <script src="code/modules/drilldown.js"></script>
        <script src="code/modules/series-label.js"></script>
        <script src="code/modules/exporting.js"></script>
        <script src="code/modules/export-data.js"></script>
        <div class="container" >
        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div></div>
        <script type="text/javascript">
        // Crear el grafico
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'NIVEL NACIONAL'
            },
            subtitle: {
                text: 'El salvador'
            },
            colors: ['#1cb646', '#974acf', ' #48aaee ', '#d5ef18'],
            xAxis: {
                type: 'category',

            },
            yAxis: {
                title: {
                    text: 'Total de votos'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:1f}'
                    }
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f}</b> votos<br/>'
            },
            series: [
                {
                    name: "Partidos",
                    colorByPoint: true,
                    data: [
                        {
                            name: "Partido A",
                            y:<?php $votos->mostrar(1);?>,// cambiar solo el valor de lo spartidos que desea mostrar su barra
                        },
                        {
                            name: "Partido B",
                            y: <?php $votos->mostrar(2);?>,// cambiar solo el valor de lo spartidos que desea mostrar su barra
                        },
                        {
                            name: "Partido C",
                            y: <?php $votos->mostrar(3);?>,// cambiar solo el valor de lo spartidos que desea mostrar su barra
                        },
                        {
                            name: "Partido D",
                             y:<?php $votos->mostrar(4);?>,// cambiar solo el valor de lo spartidos que desea mostrar su barra
                        }
                    ]
                }
            ]
        });
        </script>
    </body>
</html>
