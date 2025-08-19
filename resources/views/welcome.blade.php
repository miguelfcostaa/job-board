<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel Job Board</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto py-8 mt-4">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Laravel Job Board</h1>
        <p class="text-lg text-gray-700 mb-6">This should be a big text with Tailwind CSS styling!</p>
        
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tailwind CSS Test</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-red-100 p-4 rounded">
                    <h3 class="text-red-800 font-bold">Red Card</h3>
                    <p class="text-red-600">This is a red card</p>
                </div>
                <div class="bg-green-100 p-4 rounded">
                    <h3 class="text-green-800 font-bold">Green Card</h3>
                    <p class="text-green-600">This is a green card</p>
                </div>
                <div class="bg-blue-100 p-4 rounded">
                    <h3 class="text-blue-800 font-bold">Blue Card</h3>
                    <p class="text-blue-600">This is a blue card</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>