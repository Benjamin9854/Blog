<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Carousel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .carousel {
            display: flex;
            overflow: hidden;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            margin-left: 57px;
        }
        .carousel-item {
            flex: none;
            scroll-snap-align: start;
            width: calc(100% / 3); /* Show 3 items at a time */
        }
        .nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(31, 41, 55, 0.8);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 50%;
            cursor: pointer;
            z-index: 10;
        }
        .nav-button:hover {
            background-color: rgba(31, 41, 55, 1);
        }
        body {
            background-image: url('images/background_usuarios.png');
            color: white;
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <h2 class="text-center text-2xl font-extrabold text-gray-900 dark:text-white md:text-4xl lg:text-5xl mb-8 mt-5">
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Mayores éxitos</span>
    </h2>

    <!-- Carousel Section Template -->
    <template id="carousel-section-template">
        <div class="carousel-section">
            <h3 class="text-left text-3xl font-extrabold text-gray-900 dark:text-white mb-4 mt-32 ml-14 section-title">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-yellow-500 from-red-600">Género</span>
            </h3>
            <div class="relative max-w-full mx-auto">
                <!-- Carousel container -->
                <div class="carousel">
                    <!-- Card Template -->
                </div>
                <!-- Navigation buttons -->
                <button class="nav-button left-4 prev">&#10094;</button>
                <button class="nav-button right-4 next">&#10095;</button>
            </div>
        </div>
    </template>

    <!-- Card Template -->
    <template id="card-template">
        <div class="carousel-item">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg" src="./images/not_image.jpg" alt="imagen no encontrada" />
                <div class="p-5">
                    <a href="#" class="card-link">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Juego</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Aquí está la descripción</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 card-link">
                        Ver crítica
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </template>

    <!-- Main Container -->
    <div id="main-container"></div>

    <script>
        const genres = ['Acción', 'Terror', 'Survival', 'Mundo_Abierto'];
        const mainContainer = document.getElementById('main-container');
        const carouselSectionTemplate = document.getElementById('carousel-section-template').content;
        const cardTemplate = document.getElementById('card-template').content;

        // Function to add cards to a carousel
        function addCards(carousel, num, genre) {
            for (let i = 1; i <= num; i++) {
                const newCard = cardTemplate.cloneNode(true);
                newCard.querySelector('h5').textContent = `Juego ${i}`;
                const linkUrl = `http://localhost/Blog/juego_exito_${genre.toLowerCase()}_${i}`;
                newCard.querySelectorAll('.card-link').forEach(link => link.href = linkUrl);
                const imgUrl = `./images/juego_exito_${genre.toLowerCase()}_${i}.jpg`;
                newCard.querySelector('img').src = imgUrl;
                carousel.appendChild(newCard);
            }
        }

        // Function to add a carousel section
        function addCarouselSection(genre) {
            const newSection = carouselSectionTemplate.cloneNode(true);
            newSection.querySelector('.section-title span').textContent = genre;
            const carousel = newSection.querySelector('.carousel');
            const prevButton = newSection.querySelector('.prev');
            const nextButton = newSection.querySelector('.next');

            addCards(carousel, 6, genre); // Add 6 cards per carousel

            nextButton.addEventListener('click', () => {
                carousel.scrollBy({ left: carousel.clientWidth, behavior: 'smooth' });
            });

            prevButton.addEventListener('click', () => {
                carousel.scrollBy({ left: -carousel.clientWidth, behavior: 'smooth' });
            });

            mainContainer.appendChild(newSection);
        }

        // Add carousels for each genre
        genres.forEach(genre => {
            addCarouselSection(genre);
        });
    </script>
</body>
</html>
