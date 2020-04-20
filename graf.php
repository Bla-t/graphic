<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF -8">
<meta name = "viewport" content="device-width, initial scale = 1.0">
<meta http-equiv="x-UA-Compatible" content="ie=edge">
<script src="ajax.googleapis.js"></script>
<script src="cdnjs.cloudflare.js"></script>
<script src="bootstrapcdn.js"></script>
<link rel="stylesheet" href="bootstrap.css">
<script src="chart.js"></script>
    <title>owowowowo</title>
</head>
<body style="background:url(bak.jpg) fixed; ">
<!-- <body style="background-color:  #a2a2a2 ;"> -->
<style >
    #bag {
        margin-top: 50px;
    }    
</style>

<div class="container mt-3">
  <h2 class="display-3"style="text-align: center;">tungtangces</h2><br/>
   <form>
   <div class="col-md-5">
      <div class="form-group row">
             <select class="form-control" id="tarif-from" name="dari" onchange="update();"required>

                  <option selected="" disabled="" >Data :</option>

                  <option value=""></option>

                  <option value=""> </option>
              
                  <option value=""> </option>
                              
                  <option value=""> </option>

            </select>
        </div>
    </div>
  </form>
</div>
<div class="container fluid" id="bag">
  <div class="row">
    <div class="col-md-6" style="opacity: 80%;">
      <label><h2 class="text-primary"> RESI BARCODE</h2></label>
        <canvas id="graf" style="background-color:#DFDEDC ; opacity : 90%;"></canvas>
    </div>
   <div class="col-md-6" style="opacity: 80%;">
    <label ><h2>JUMLAH BARANG</h2></label>
      <canvas id="grafi" style="background-color:#DFDEDC ; opacity : 90%;"></canvas>
    </div> 
  </div>
</div><br/>
   <div class="container fluid">
    <div class="col-md-7 offset-md-3" style="opacity: 80%;">
     <label><h2>OMSET</h2></label>
      <canvas id="grafik" style="background-color:#DFDEDC ; opacity : 90%;"></canvas>
    </div> 
   </div>
</div><br/>
   <div class="container fluid">
    <div class="col-lg-7 offset-lg-3" style="opacity: 80%;">
     <label><h2>pie</h2></label>
      <canvas id="pie" style="opacity : 90%;"></canvas>
    </div> 
   </div>
<!-- <?php

    $datares = $_GET[''];
    $datakol = $_GET[''];
    $dataom = $_GET[''];

?> -->
<script>

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
            data: [0, 10, 51, 2, 20, 30],
        }]
    },

    // Configuration options go here
    options: {}
});

    function update(){

        chart.data.datasets[3].data = [25, 15, 51, 25, 25, 38];
        chart.update();
}

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
            data: [0, 1, 53, 22, 50, 30, 45]
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
            data: [0, 45, 5, 2, 20, 32, 24]
        }]
        
    },

    // Configuration options go here
    options: {}
});

 ///////////////////////////////

  var ctx = document.getElementById('pie').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: ['1 Hari', '2 Hari', '3 Hari', '4 Hari', 'Lebih Dari 4 Hari'],
        datasets: [{
             data: [ 45, 56, 20, 32, 14],
             backgroundColor: [ 

                 'rgb(0, 162, 255)', 
                 'rgb(143, 255, 0)',
                 'rgb(255, 234, 0)',
                 'rgb(250, 122, 0)',
                 'rgb(250, 47, 0)'

             ]
        }]
    },

    // Configuration options go here
    options: {}
});


</script>
</body>
</html>