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
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
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
