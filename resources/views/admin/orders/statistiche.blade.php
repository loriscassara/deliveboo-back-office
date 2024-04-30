@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <h1>Statistiche</h1>
    </div>
    <div>
        <canvas id="myChart"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('myChart');

            if (ctx) {
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio','Agosto', 'Settembre', 'Ottobre','Novembre', 'Dicembre'],
                        datasets: [{
                            label: '# Vendite totali',
                            data: [0, 0, 50, 70],
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
            }
        });
    </script>
@endsection
