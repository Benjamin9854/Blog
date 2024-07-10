<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crítica de Videojuego</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-image: url('images/background_usuarios.png');
            background-size: cover; /* Asegura que el fondo cubra toda la pantalla */
        }
        .chart-container {
            width: 75px;
            height: 75px;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="bg-gradient-to-r to-teal-300 from-blue-600 text-white p-4">
        <h1 class="text-3xl font-bold">Videojuego</h1>
    </header>

    <main class="max-w-4xl mx-auto p-4">
        <section class="bg-gradient-to-r to-yellow-500 from-red-600 p-6 rounded-lg shadow-lg mb-6">
            <img src="./images/juego_exito_terror_2.jpg" alt="Imagen del Juego" class="w-full h-64 object-cover rounded-lg mb-4">
            <h2 class="text-2xl font-bold mb-2">Silent Hill 2</h2>
            <p class="text-gray-600 mb-4">Empresa Desarrolladora: <span class="font-semibold">Konami</span></p>
            <p class="text-gray-800 mb-4">Descripción: Considerado un clásico del género por su narrativa psicológica y atmósfera opresiva, dejando una marca indeleble en los juegos de terror.</p>
            
            <div class="mb-4 flex items-center">
                <h3 class="text-xl font-semibold mr-4">Calificación General: <span class="text-green-600">4.5/5</span></h3>
                <div class="chart-container">
                    <canvas id="generalRatingChart"></canvas>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-blue-900 p-4 rounded-lg shadow flex flex-col items-center">
                    <h4 class="font-semibold text-gray-300">Optimización</h4>
                    <p class="text-green-600 text-lg">4.7/5</p>
                    <div class="chart-container">
                        <canvas id="optimizacionChart"></canvas>
                    </div>
                </div>
                <div class="bg-blue-900 p-4 rounded-lg shadow flex flex-col items-center">
                    <h4 class="font-semibold text-gray-300">Historia</h4>
                    <p class="text-green-600 text-lg">4.2/5</p>
                    <div class="chart-container">
                        <canvas id="historiaChart"></canvas>
                    </div>
                </div>
                <div class="bg-blue-900 p-4 rounded-lg shadow flex flex-col items-center">
                    <h4 class="font-semibold text-gray-300">Jugabilidad</h4>
                    <p class="text-green-600 text-lg">4.8/5</p>
                    <div class="chart-container">
                        <canvas id="jugabilidadChart"></canvas>
                    </div>
                </div>
                <div class="bg-blue-900 p-4 rounded-lg shadow flex flex-col items-center">
                    <h4 class="font-semibold text-gray-300">Gráficos</h4>
                    <p class="text-green-600 text-lg">4.6/5</p>
                    <div class="chart-container">
                        <canvas id="graficosChart"></canvas>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-blue-900 text-white p-4 text-center">
        <p>&copy; 2024 CGM - Blog de Críticas de Videojuegos</p>
    </footer>

    <script>
        const createChart = (ctx, score) => {
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [score, 5 - score],
                        backgroundColor: ['#f7ec0c', '#1c1c1a'],
                        borderWidth: 0
                    }]
                },
                options: {
                    cutoutPercentage: 70,
                    tooltips: { enabled: false },
                    hover: { mode: null },
                    plugins: {
                        legend: { display: false }
                    }
                }
            });
        };

        window.onload = function() {
            createChart(document.getElementById('generalRatingChart').getContext('2d'), 4.5);
            createChart(document.getElementById('optimizacionChart').getContext('2d'), 4.7);
            createChart(document.getElementById('historiaChart').getContext('2d'), 4.2);
            createChart(document.getElementById('jugabilidadChart').getContext('2d'), 4.8);
            createChart(document.getElementById('graficosChart').getContext('2d'), 4.6);
        };
    </script>

</body>
</html>
