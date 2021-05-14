@extends('elements.sidebarAdmin')

@section('links')
<link rel="stylesheet" href="{{URL::asset('/css/styleAdmin.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection()


@section('body')
<div class="container-fluid main3">
    <div class="card shadow-lg p-3 mb-3 bg-white rounded">
        
        <canvas id="myChart" width="400" height="180"></canvas>
    </div>
</div>
@endsection()
@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.1.1/dist/chart.min.js"></script>
<script type="text/javascript" src="{{URL::asset('/js/main.js')}}"></script>
<script>

//ASI PASO LA VARIRABLE DE ELOQUENT A SCRIP
var sites = {!! json_encode($array) !!};


var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Derechohabientes', 'No derechohabientes', 'Anónimo'],
        datasets: [{
            label: ' Quejas, Sugerencias o Felicitaciones enviadas',
            data: sites,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',

            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endsection()