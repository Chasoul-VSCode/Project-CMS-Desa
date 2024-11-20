<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard CMS Desa</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f9fafb;
        }
        .metric-card {
            background: white;
            border-radius: 8px;
            padding: 1.25rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .chart-container {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .table-container {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50">

<div class="flex">
    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button" class="lg:hidden fixed top-4 left-4 z-50 bg-slate-800 text-white p-2 rounded-lg">
        <i class="fas fa-bars"></i>
    </button>

    @include('layout.sidebar')

    <!-- Main Content -->
    <div class="flex-1 lg:ml-64">
        @include('layout.navbar')

        <!-- Main Content Area -->
        <div class="container mx-auto px-4 py-8">
            <!-- Top Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="metric-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-gray-500 text-sm">Total Penduduk</h3>
                            <p class="text-2xl font-semibold mt-1">2,578</p>
                            <div class="flex items-center mt-2">
                                <span class="text-green-500 text-sm">+12</span>
                                <span class="text-gray-400 text-sm ml-2">bulan ini</span>
                            </div>
                        </div>
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <i class="fas fa-users text-blue-500"></i>
                        </div>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-gray-500 text-sm">Total Keluarga</h3>
                            <p class="text-2xl font-semibold mt-1">642</p>
                            <div class="flex items-center mt-2">
                                <span class="text-green-500 text-sm">+3</span>
                                <span class="text-gray-400 text-sm ml-2">bulan ini</span>
                            </div>
                        </div>
                        <div class="bg-green-50 p-3 rounded-lg">
                            <i class="fas fa-house-user text-green-500"></i>
                        </div>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-gray-500 text-sm">Layanan Surat</h3>
                            <div class="flex items-center mt-2">
                                <div class="w-16 h-16">
                                    <canvas id="trafficScore"></canvas>
                                </div>
                                <div class="ml-4">
                                    <div class="flex items-center">
                                        <span class="w-3 h-3 rounded-full bg-blue-500 mr-2"></span>
                                        <span class="text-sm text-gray-600">Selesai 85%</span>
                                    </div>
                                    <div class="flex items-center mt-1">
                                        <span class="w-3 h-3 rounded-full bg-red-500 mr-2"></span>
                                        <span class="text-sm text-gray-600">Proses 15%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                <div class="chart-container">
                    <h3 class="text-base font-semibold mb-3">Statistik Penduduk</h3>
                    <div class="h-48">
                        <canvas id="appRanking"></canvas>
                    </div>
                </div>

                <div class="chart-container">
                    <h3 class="text-base font-semibold mb-3">Distribusi Usia</h3>
                    <div class="h-48">
                        <canvas id="trafficDistribution"></canvas>
                    </div>
                </div>
            </div>

<script>
// Layanan Surat Doughnut Chart
const trafficScoreCtx = document.getElementById('trafficScore').getContext('2d');
new Chart(trafficScoreCtx, {
    type: 'doughnut',
    data: {
        labels: ['Selesai', 'Proses'],
        datasets: [{
            data: [85, 15],
            backgroundColor: ['#3b82f6', '#ef4444'],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        cutout: '70%'
    }
});

// Statistik Penduduk Bar Chart
const appRankingCtx = document.getElementById('appRanking').getContext('2d');
new Chart(appRankingCtx, {
    type: 'bar',
    data: {
        labels: ['Laki-laki', 'Perempuan', 'Balita', 'Remaja', 'Dewasa', 'Lansia'],
        datasets: [{
            label: '2023',
            data: [850, 920, 180, 450, 800, 228],
            backgroundColor: '#3b82f6',
            borderRadius: 4
        }, {
            label: '2022',
            data: [800, 880, 165, 420, 780, 215],
            backgroundColor: '#e11d48',
            borderRadius: 4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    display: false
                }
            },
            x: {
                grid: {
                    display: false
                }
            }
        },
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    boxWidth: 12,
                    padding: 10,
                    font: {
                        size: 11
                    }
                }
            }
        }
    }
});

// Distribusi Usia Pie Chart
const trafficDistributionCtx = document.getElementById('trafficDistribution').getContext('2d');
new Chart(trafficDistributionCtx, {
    type: 'pie',
    data: {
        labels: ['0-14 tahun', '15-44 tahun', '45-64 tahun', '65+ tahun'],
        datasets: [{
            data: [25, 45, 20, 10],
            backgroundColor: ['#3b82f6', '#ef4444', '#22c55e', '#eab308'],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    boxWidth: 12,
                    padding: 10,
                    font: {
                        size: 11
                    }
                }
            }
        }
    }
});

// Toggle mobile menu
document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('-translate-x-full');
});

// Close sidebar when clicking outside on mobile
document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const button = event.target.closest('#mobile-menu-button');
    const sidebarElement = event.target.closest('#sidebar');
    
    if (!button && !sidebarElement && !sidebar.classList.contains('-translate-x-full') && window.innerWidth < 1024) {
        sidebar.classList.add('-translate-x-full');
    }
});
</script>

<!-- Start Financial Report Here -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
    <!-- Income Card -->
    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-sm font-semibold text-gray-500">Total Pendapatan</h3>
                <h2 class="text-2xl font-bold text-gray-800">Rp 225,000,000</h2>
                <p class="text-green-500 text-sm">+8.2%</p>
            </div>
            <div>
                <button class="bg-blue-500 text-white px-3 py-1 rounded-lg">Bulanan</button>
                <button class="text-gray-500 px-3 py-1">Mingguan</button>
            </div>
        </div>
        <div class="mt-4">
            <canvas id="incomeChart"></canvas>
        </div>
    </div>

    <!-- Expenses Card -->
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h3 class="text-sm font-semibold text-gray-500">Total Pengeluaran</h3>
        <p class="text-xl font-bold text-gray-800">Rp 112,500,000</p>
        <h3 class="text-sm font-semibold text-gray-500 mt-4">Biaya Operasional</h3>
        <p class="text-xl font-bold text-gray-800">Rp 48,000,000</p>
        <h3 class="text-sm font-semibold text-gray-500 mt-4">Lain-lain</h3>
        <p class="text-xl font-bold text-gray-800">Rp 27,000,000</p>
    </div>

    <!-- Profit Card -->
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h3 class="text-sm font-semibold text-gray-500">Laba Bersih</h3>
        <div class="flex items-center mt-4">
            <div class="w-8 h-8 bg-green-500 text-white flex items-center justify-center rounded-full">LB</div>
            <div class="ml-4">
                <p class="text-sm text-gray-600">Laba Bersih</p>
                <p class="text-xl font-bold text-gray-800">Rp 112,500,000</p>
            </div>
        </div>
        <div class="flex items-center mt-4">
            <div class="w-8 h-8 bg-yellow-500 text-white flex items-center justify-center rounded-full">LK</div>
            <div class="ml-4">
                <p class="text-sm text-gray-600">Laba Kotor</p>
                <p class="text-xl font-bold text-gray-800">Rp 177,000,000</p>
            </div>
        </div>
    </div>
</div>

<script>
// Income Chart
const incomeChartCtx = document.getElementById('incomeChart').getContext('2d');
new Chart(incomeChartCtx, {
    type: 'line',
    data: {
        labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
        datasets: [{
            data: [30000000, 37500000, 45000000, 60000000, 75000000, 67500000, 52500000],
            backgroundColor: 'rgba(34, 197, 94, 0.1)',
            borderColor: '#22c55e',
            borderWidth: 2,
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            x: {
                grid: {
                    display: false
                }
            },
            y: {
                beginAtZero: true,
                grid: {
                    color: '#f3f4f6'
                }
            }
        }
    }
});
</script>
<!-- End Financial Report Here -->
</body>
</html>
