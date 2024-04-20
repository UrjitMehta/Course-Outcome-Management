<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<!-- @extends('layouts.app') -->
@include('Components.navbar')
@section('content')
@include('Components.sidebar')
@include('Components.footer')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style=" height: 80%;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chart</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Chart</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
        <div class="map_canvas">
        <canvas id="myChart" width="auto" height="100"></canvas>

        </div>
        </div>
    </div>
  </section>    
    <script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($labels) ?>,
        datasets: [{
            label: '',
            barThickness:71,
            data: <?php echo json_encode($arr); ?>,
            backgroundColor: [
              '#89CFF0',
              '#82B5E5',
              '#8899D3',
              '#927BB8',
              '#995D94',
              '#97406A'
            ],
            borderColor: [
              '#89CFF0',
              '#82B5E5',
              '#8899D3',
              '#927BB8',
              '#995D94',
              '#97406A'
            ],
            borderWidth: 5
        }]
    },
    options: {
        scales: {
            y: {
                max: 100,
                min: 0,
                ticks: {
                    stepSize: 20
                }
            }
        },
        plugins: {
            title: {
                display: false,
                text: 'Custom Chart Title'
            },
            legend: {
                display: false,
            }
        }
    }
    
});

// var a = document.createElement('a');
// a.href = myChart.toBase64Image();
// a.download = 'my_file_name.png';

// // Trigger the download
// a.click();

// const chartImageUrl = myChart.getUrl();
// // 
// // Or download to disk
// myChart.toFile('/tmp/mychart.png');
function fun_nsme()
{
  
}


</script>
@endsection 