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
            background-image:url('images/background_usuarios.png');
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
                    <!-- Carousel items will be injected here -->
                </div>
                <!-- Navigation buttons -->
                <button class="nav-button prev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                    </svg>
                </button>
                <button class="nav-button next">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>
                </button>
            </div>
        </div>
    </template>

    <!-- Card Template -->
    <template id="card-template">
        <div class="carousel-item p-4">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Juego</h5>
                </div>
            </div>
        </div>
    </template>

    <!-- Main Container -->
    <div id="main-container"></div>

    <script>
        const genres = {
            'Acción': ['Grand Theft Auto V', 'The Legend of Zelda: Breath of the Wild', 'Red Dead Redemption 2'],
            'Terror': ['Resident Evil 2 (Remake)', 'Silent Hill 2', 'Outlast'],
            'Supervivencia': ['Minecraft', 'ARK: Survival Evolved', 'Subnautica'],
            'Mundo Abierto': ['The Elder Scrolls V: Skyrim', 'The Witcher 3: Wild Hunt', 'Assassin\'s Creed Odyssey']
        };
        const mainContainer = document.getElementById('main-container');
        const carouselSectionTemplate = document.getElementById('carousel-section-template').content;
        const cardTemplate = document.getElementById('card-template').content;

        // Function to add cards to a carousel
        function addCards(carousel, games) {
            games.forEach(game => {
                const newCard = cardTemplate.cloneNode(true);
                newCard.querySelector('h5').textContent = game;
                carousel.appendChild(newCard);
            });
        }

        // Function to add a carousel section
        function addCarouselSection(genre, games) {
            const newSection = carouselSectionTemplate.cloneNode(true);
            newSection.querySelector('.section-title span').textContent = genre;
            const carousel = newSection.querySelector('.carousel');
            const prevButton = newSection.querySelector('.prev');
            const nextButton = newSection.querySelector('.next');

            addCards(carousel, games); // Add games to the carousel

            nextButton.addEventListener('click', () => {
                carousel.scrollBy({ left: carousel.clientWidth, behavior: 'smooth' });
            });

            prevButton.addEventListener('click', () => {
                carousel.scrollBy({ left: -carousel.clientWidth, behavior: 'smooth' });
            });

            mainContainer.appendChild(newSection);
        }

        // Add carousels for each genre
        Object.keys(genres).forEach(genre => {
            addCarouselSection(genre, genres[genre]);
        });
    </script>
</body>
</html>
