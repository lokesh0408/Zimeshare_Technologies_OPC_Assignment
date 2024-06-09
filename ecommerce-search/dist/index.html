<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Clothes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
        }
        #search-bar {
            transition: box-shadow 0.3s ease-in-out;
        }
        #search-bar:focus {
            box-shadow: 0 0 10px rgba(34, 139, 230, 0.6);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="container mx-auto p-4">
        <div class="max-w-xl mx-auto">
            <input type="text" id="search-bar" class="border border-gray-300 p-4 w-full rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search for clothes...">
        </div>
        <div id="results" class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto"></div>
    </div>

    <script>
        document.getElementById('search-bar').addEventListener('input', function() {
            const query = this.value;
            if (query.length < 4) {
                document.getElementById('results').innerHTML = '';
                return;
            }

            fetch(`/search?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    const results = document.getElementById('results');
                    results.innerHTML = '';
                    data.forEach(item => {
                        const itemDiv = document.createElement('div');
                        itemDiv.className = 'bg-white border border-gray-200 p-4 rounded-lg shadow-sm';

                        const img = document.createElement('img');
                        img.src = item.image_url;
                        img.alt = item.name;
                        img.className = 'w-full h-auto mb-4 rounded';

                        const name = document.createElement('p');
                        name.textContent = item.name;
                        name.className = 'text-lg font-semibold truncate';

                        const price = document.createElement('p');
                        price.textContent = `₹${item.price.toFixed(2)} INR*`;
                        price.className = 'text-green-500';

                        const brand = document.createElement('p');
                        brand.textContent = `Brand: ${item.brand}`;
                        brand.className = 'text-gray-500';

                        itemDiv.appendChild(img);
                        itemDiv.appendChild(name);
                        itemDiv.appendChild(price);
                        itemDiv.appendChild(brand);

                        results.appendChild(itemDiv);
                    });
                });
        });
    </script>
</body>
</html>
