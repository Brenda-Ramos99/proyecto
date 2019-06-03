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
        
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="jquery.js"></script>
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
                text: 'RESULTADOS A NIVEL NACIONAL'
            },
            subtitle: {
                text: 'Votaciones 2019, El salvador'
            },
            colors: ['#29E11A', '#1BDDC2', ' #9F6FD9 ', '#C62F61'],
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
                            name: "Partido 1",
                            y:<?php $votos->mostrar(1);?>,// cambiar solo el valor de lo spartidos que desea mostrar su barra
                        },
                        {
                            name: "Partido 2",
                            y: <?php $votos->mostrar(2);?>,// cambiar solo el valor de lo spartidos que desea mostrar su barra
                        },
                        {
                            name: "Partido 3",
                            y: <?php $votos->mostrar(3);?>,// cambiar solo el valor de lo spartidos que desea mostrar su barra
                        },
                        {
                            name: "Partido 4",
                             y:<?php $votos->mostrar(4);?>,// cambiar solo el valor de lo spartidos que desea mostrar su barra
                        }
                    ]
                }
            ]
        });
        </script>
    </body>
</html>
