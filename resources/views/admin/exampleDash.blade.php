
<body class="min-h-screen bg-gray-100">

    <div class=" ">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-blue-400 p-4 rounded-lg shadow">
        <div class="flex items-center">
        <span class="icon text-3xl">
                                <ion-icon name="book-outline"></ion-icon>
                            </span> <!-- Book icon for Total Books -->
            <div class="ml-4">
                <p class="text-sm text-zinc-600 font-bold">Total Books</p> <!-- Bold heading -->
                <p class="text-xl font-bold">231</p>
            </div>
        </div>
        <div class="flex justify-end mt-4 cursor-pointer">
            <a href="#">More Info</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>

    <div class="bg-yellow-400 p-4 rounded-lg shadow">
        <div class="flex items-center">
        <span class="icon text-3xl">
                                <ion-icon name="people-outline"></ion-icon>
                            </span>
            <div class="ml-4">
                <p class="text-sm text-zinc-600 font-bold">Total ALC</p> <!-- Bold heading -->
                <p class="text-xl font-bold">3,650</p>
            </div>
        </div>
        <div class="flex justify-end mt-4 cursor-pointer">
            <a href="/components">More Info</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>

    <div class="bg-rose-500 p-4 rounded-lg shadow">
        <div class="flex items-center">
        <span class="icon text-3xl">
                                <ion-icon name="person-outline"></ion-icon>
                            </span>
            <div class="ml-4">
                <p class="text-md font-semibold text-zinc-900 font-bold">Total DLC</p> <!-- Bold heading -->
                <p class="text-xl font-bold">35</p>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <span class="cursor-pointer">More Info</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>

    <div class="bg-cyan-400 p-4 rounded-lg shadow">
        <div class="flex items-center">
        <span class="icon text-3xl">
                                <ion-icon name="newspaper-outline"></ion-icon>
                            </span>
            <div class="ml-4">
                <p class="text-sm text-zinc-600 font-bold">Pending Tasks</p> <!-- Bold heading -->
                <p class="text-xl font-bold">110</p>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <span class="cursor-pointer">More Info</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>
</div>

<!-- 
        <h1 class="text-center text-2xl font-bold my-4">Dashboard</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-center text-xl font-semibold mb-2">Asset by type</h2>
                <canvas id="assetTypesChart"></canvas>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-center text-xl font-semibold mb-2">Asset by status</h2>
                <div class="h-80 flex justify-center">
                    <canvas id="assetStatusChart"></canvas>
                </div>
            </div>
        </div> -->

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
            <div class="bg-white p-4 rounded shadow overflow-x-auto">
                <h2 class="text-center text-xl font-semibold mb-2">Recent Book activity</h2>
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="text-left p-2 font-medium text-gray-700">Book Name</th>
                            <th class="text-left p-2 font-medium text-gray-700">Assigned to</th>
                            <th class="text-left p-2 font-medium text-gray-700">Status</th>
                            <th class="text-left p-2 font-medium text-gray-700">Location</th>
                            <th class="text-left p-2 font-medium text-gray-700">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-50 border-b">
                            <td class="p-2">Python Learning</td>
                            <td class="p-2">Susanta Swain</td>
                            <td class="p-2 "><span class='bg-green-400 rounded-full p-2'>Submitted</span></td>
                            <td class="p-2">Khordha</td>
                            <td class="p-2">2024-07-30</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="p-2">Ai Office Productivity</td>
                            <td class="p-2">Sahil Singh</td>
                            <td class="p-2"><span class='bg-red-400 rounded-full p-2'>Returned</span></td>
                            <td class="p-2">CA Office</td>
                            <td class="p-2">2024-07-29</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-white p-4 rounded shadow overflow-x-auto">
                <h2 class="text-center text-xl font-semibold mb-2">Book Inventory</h2>
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="text-left p-2 font-medium text-gray-700">Name</th>
                            <th class="text-left p-2 font-medium text-gray-700">Author</th>
                            <th class="text-left p-2 font-medium text-gray-700">Quantity</th>
                            <th class="text-left p-2 font-medium text-gray-700">Avilable</th>
                            <th class="text-left p-2 font-medium text-gray-700">Status</th>
                            <th class="text-left p-2 font-medium text-gray-700">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-50 border-b">
                            <td class="p-2">RAMAYANA</td>
                            <td class="p-2">L.lenka</td>
                            <td class="p-2">29</td>
                            <td class="p-2">10</td>
                            <td class="p-2">N\A</td>
                            <td class="p-2 text-nowrap">2024-07-30</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="p-2">LC BOOK</td>
                            <td class="p-2">S.singh</td>
                            <td class="p-2">198</td>
                            <td class="p-2">33</td>
                            <td class="p-2">N\A</td>
                            <td class="p-2 text-nowrap">2024-07-29</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const assetTypesCtx = document.getElementById('assetTypesChart').getContext('2d');
            const assetTypesChart = new Chart(assetTypesCtx, {
                type: 'pie',
                data: {
                    labels: ['Laptops', 'Monitors', 'Phones', 'Others'],
                    datasets: [{
                        data: [25, 30, 20, 25],
                        backgroundColor: ['#4CAF50', '#FFC107', '#F44336', '#2196F3']
                    }]
                }
            });

            const assetStatusCtx = document.getElementById('assetStatusChart').getContext('2d');
            const assetStatusChart = new Chart(assetStatusCtx, {
                type: 'bar',
                data: {
                    labels: ['Assigned', 'In Maintenance', 'Available', 'Retired'],
                    datasets: [{
                        label: 'Assets by status',
                        data: [45, 20, 35, 10],
                        backgroundColor: ['#4CAF50', '#FFC107', '#2196F3', '#F44336']
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
        });
    </script>

</body>