<?php 
$role = $this->session->userdata('id_role'); 
$siswaL=0;
$siswaD=0;
$chart = json_decode($chart);
$chart = $chart!=null?$chart->data:array();
$chartdata = json_encode($chart);
?>
<div class="container-fluid">
    <h1>Dashboard</h1><hr>    
   <div class="col-sm-12"><h3>Data Calon Siswa Baru Madrasah Qudsiyyah Kudus</h3></div>
</div>

    <!-- Grafik Total Pengadaan -->
    <div class="row-fluid">
    	<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6"><i class="fa fa-line-chart"></i> Grafik Calon Siswa Baru</div>
                    <div class="col-md-6 div_filter_chart">
                        
                    </div>
                </div>
            </div>
            <div class="panel-body text-center">
            	<div class="col-md-12"><h3>Grafik Calon Siswa Baru</h3></div>
            	<div class="col-md-12" id="conchart2" style="height:400px;">  
                </div>
                <div class="col-md-12" id="chart2-legend"></div>
            </div>
        </div>
    </div>
    
    
 
    
    
<script type="application/javascript">
    
$(document).ready(function() {
    
    // --------------- Chart2 ---------------
    var chart2 = AmCharts.makeChart("conchart2", {
        "theme": "light",
        "type": "serial",
        "dataProvider": <?php echo $chartdata ?>,
        "valueAxes": [{
            "stackType": "none",
            "unit": "",
            "position": "left",
            "title": "Jumlah",
        }],
        "startDuration": 1,
        "graphs": [
        
        {
            "balloonText": "Total Calon Siswa [[category]]: <b>[[value]]</b>",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
            "lineColor": "#634AA5",
            "title": "Total Calon Siswa",
            "type": "column",
            "valueField": "tot_siswaL"
        },
        
         {
            "balloonText": "Total Siswa Baru [[category]]: <b>[[value]]</b>",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
            "lineColor": "#FFFF00",
            "title": "Total Siswa Baru ",
            "type": "column",
            "valueField": "tot_siswabaru"
        },
        
        ],
        "plotAreaFillAlphas": 0.1,
        "depth3D": 60,
        "angle": 30,
        "categoryField": "tahun",
        "categoryAxis": {
            "gridPosition": "start",
            "title": "Tahun"
        },
        "legend":{
            "useGraphSettings": true
        },
        "export": {
            "enabled": true
         }
    });
   
});     


</script>
