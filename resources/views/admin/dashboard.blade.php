@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row" style=" width: 80%; height: 300px; margin: auto">
            <canvas id="simpleChart"></canvas>
        </div>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let ctx = document.getElementById('simpleChart').getContext('2d');
        let dataLabels = [
            "Sliders", "Team Members", "Posts", "Destinations", "Packages", "Users", "Subscribers", "Tours"
        ];
        let dataValues = [
            {{ $total_slider }}, {{ $total_team_members }}, {{ $total_posts }},
            {{ $total_destinations }}, {{ $total_packages }}, {{ $total_users }}, {{ $total_subscribers }}, {{ $total_tours }}
        ];

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: dataLabels,
                datasets: [{
                    label: 'Statistiques',
                    data: dataValues,
                    backgroundColor: '#007bff',
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    datalabels: {
                        anchor: 'center',
                        align: 'center',
                        color: 'white',
                        font: {
                            weight: 'bold'
                        },
                        formatter: (value) => value, // Affiche la valeur des données
                    }
                }
            },
            plugins: [ChartDataLabels] // Assurez-vous d'ajouter le plugin ici
        });
    });
</script>

@endsection
