<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Videojuegos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <style>
        body {
            background-image: url('images/background_usuarios.png');
            background-size: cover; /* Asegura que el fondo cubra toda la pantalla */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    </style>
</head>
<body class="p-6 bg-gray-900 bg-opacity-75">
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-4xl font-bold text-white">Tabla de Videojuegos</h1>
            <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Agregar Fila</button>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-800 bg-opacity-90 border border-gray-700 rounded-lg shadow-lg">
                <thead>
                    <tr class="text-gray-300 text-center">
                        <th class="px-4 py-2 border-b border-gray-600">Juego</th>
                        <th class="px-4 py-2 border-b border-gray-600">Empresa</th>
                        <th class="px-4 py-2 border-b border-gray-600">Categoría</th>
                        <th class="px-4 py-2 border-b border-gray-600 text-left">Descripción</th>
                        <th class="px-4 py-2 border-b border-gray-600">Calificación General</th>
                        <th class="px-4 py-2 border-b border-gray-600">Calificación Optimización</th>
                        <th class="px-4 py-2 border-b border-gray-600">Calificación Historia</th>
                        <th class="px-4 py-2 border-b border-gray-600">Calificación Jugabilidad</th>
                        <th class="px-4 py-2 border-b border-gray-600">Calificación Gráficos</th>
                        <th class="px-4 py-2 border-b border-gray-600">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-gray-200 text-center">
                        <td class="px-4 py-2 border-b border-gray-700">Juego 1</td>
                        <td class="px-4 py-2 border-b border-gray-700">Empresa 1</td>
                        <td class="px-4 py-2 border-b border-gray-700">Éxito</td>
                        <td class="px-4 py-2 border-b border-gray-700 text-left">Descripción del juego en un máximo de 100 palabras.</td>
                        <td class="px-4 py-2 border-b border-gray-700">4.5</td>
                        <td class="px-4 py-2 border-b border-gray-700">4.0</td>
                        <td class="px-4 py-2 border-b border-gray-700">4.7</td>
                        <td class="px-4 py-2 border-b border-gray-700">4.8</td>
                        <td class="px-4 py-2 border-b border-gray-700">4.9</td>
                        <td class="px-4 py-2 border-b border-gray-700">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded-lg hover:bg-yellow-600 mr-2">Editar</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
                        </td>
                    </tr>
                    <tr class="text-gray-200 text-center">
                        <td class="px-4 py-2 border-b border-gray-700">Juego 2</td>
                        <td class="px-4 py-2 border-b border-gray-700">Empresa 2</td>
                        <td class="px-4 py-2 border-b border-gray-700">Fracaso</td>
                        <td class="px-4 py-2 border-b border-gray-700 text-left">Descripción del juego en un máximo de 100 palabras.</td>
                        <td class="px-4 py-2 border-b border-gray-700">2.5</td>
                        <td class="px-4 py-2 border-b border-gray-700">3.0</td>
                        <td class="px-4 py-2 border-b border-gray-700">2.7</td>
                        <td class="px-4 py-2 border-b border-gray-700">3.8</td>
                        <td class="px-4 py-2 border-b border-gray-700">2.9</td>
                        <td class="px-4 py-2 border-b border-gray-700">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded-lg hover:bg-yellow-600 mr-2">Editar</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-lg hover:bg-red-600">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Más filas según sea necesario -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
