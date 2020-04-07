<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF -8">
<meta name = "viewport" content="device-width, initial scale = 1.0">
<meta http-equiv="x-UA-Compatible" content="ie=edge">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script type="text/javascript" src="chart.js"></script>
	<title>owowowowo</title>
</head>
<body style="background:url(bak.jpg); ">
<style >
    #bag {
        margin-top: 50px;
    }    
</style>


<div class="container-fluid" id="bag">
  <div class="row">
    <div class="col-md-4" >
        <canvas id="graf" style="background-color:#DFDEDC ; opacity : 90%;"></canvas>
    </div> 
    <div class="col-md-4" >
        <canvas id="grafi" style="background-color:#DFDEDC ; opacity : 90%;"></canvas>
    </div> 
    <div class="col-md-4" >
        <canvas id="grafik" style="background-color:#DFDEDC ; opacity : 90%;"></canvas>
    </div> 
   </div>
</div>
<?php

    // $datares = $_GET[''];
    // $datakol = $_GET[''];
    // $dataom = $_GET[''];

?>
<script>
	var defolt = document.getElementById("");



	var ctx = document.getElementById('graf').getContext('2d');
	var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
        datasets: [{
            label: 'Resi Barcode',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30]
        }]
    },

    // Configuration options go here
    options: {}
});

 /////////////////////////////

    var ctx = document.getElementById('grafi').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
        datasets: [{
            label: 'Koli / Jumlah Barang',
            borderColor: 'rgb(112, 199, 125)',
            data: [0, 1, 5, 22, 50, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});

 //////////////////////////////////

    var ctx = document.getElementById('grafik').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Omset',
            borderColor: 'rgb(62, 99, 342)',
            data: [0, 45, 5, 2, 20, 32, 2]
        }]
    },

    // Configuration options go here
    options: {}
});
</script>
</body>
</html>