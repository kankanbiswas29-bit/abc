<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-6xl mx-auto bg-white rounded-xl shadow-lg p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
            Product Table
        </h1>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold">PID</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Amount</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Status</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Live Mode</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-gray-700 font-medium">P001</td>
                        <td class="px-6 py-4 text-gray-700">₹1,200</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-sm bg-green-100 text-green-700">Active</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-sm bg-blue-100 text-blue-700">Live</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-gray-700 font-medium">P002</td>
                        <td class="px-6 py-4 text-gray-700">₹850</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-sm bg-yellow-100 text-yellow-700">Pending</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-sm bg-gray-200 text-gray-700">Offline</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-gray-700 font-medium">P003</td>
                        <td class="px-6 py-4 text-gray-700">₹2,499</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-sm bg-red-100 text-red-700">Inactive</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-sm bg-blue-100 text-blue-700">Live</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-gray-700 font-medium">P004</td>
                        <td class="px-6 py-4 text-gray-700">₹999</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-sm bg-green-100 text-green-700">Active</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-sm bg-gray-200 text-gray-700">Offline</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>