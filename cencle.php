<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cancelled</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-red-400 to-orange-500 min-h-screen flex items-center justify-center">

    <div class="bg-white rounded-2xl shadow-xl p-10 max-w-md text-center">

        <div class="flex items-center justify-center w-20 h-20 mx-auto mb-6 rounded-full bg-red-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mb-3">
            Action Cancelled ❌
        </h1>
        <p class="text-gray-600 mb-6">
            Your request was not completed. You can try again or return to the home page.
        </p>

        <div class="flex justify-center gap-4">
            <a href="index.html" class="bg-gray-200 text-gray-800 px-6 py-3 rounded-full font-semibold hover:bg-gray-300 transition">
                Go Home
            </a>
            <a href="retry.html" class="bg-red-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-red-700 transition">
                Try Again
            </a>
        </div>
    </div>

</body>

</html>