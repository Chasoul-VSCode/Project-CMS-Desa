<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda - Sistem Informasi Desa</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">

<div class="flex">
    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button" class="lg:hidden fixed top-4 left-4 z-50 bg-blue-800 text-white p-2 rounded-lg">
        <i class="fas fa-bars"></i>
    </button>

    @include('layout.sidebar')

    <!-- Main Content -->
    <div class="flex-1 lg:ml-64">
        @include('layout.navbar')

        <!-- Main Content Area -->
        <div class="p-4 lg:p-6">
            <!-- Header -->
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-gray-800">Agenda Desa</h1>
                    <button class="bg-blue-800 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center gap-2">
                        <i class="fas fa-plus"></i>
                        <span>Tambah Agenda</span>
                    </button>
                </div>
            </div>

            <!-- Filter & Search -->
            <div class="bg-white p-4 rounded-lg shadow-md mb-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Filter Tanggal</label>
                        <input type="date" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                        <select class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Semua Kategori</option>
                            <option value="rapat">Rapat</option>
                            <option value="kegiatan">Kegiatan</option>
                            <option value="pelatihan">Pelatihan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pencarian</label>
                        <div class="relative">
                            <input type="text" placeholder="Cari agenda..." class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 pl-10">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Agenda List -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Agenda Card 1 -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Rapat</span>
                            <div class="flex gap-2">
                                <button class="text-gray-500 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                                <button class="text-gray-500 hover:text-blue-800"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Rapat Pembangunan Desa</h3>
                        <p class="text-gray-600 text-sm mb-4">Pembahasan rencana pembangunan infrastruktur desa untuk tahun 2024.</p>
                        <div class="flex items-center text-sm text-gray-500 gap-4">
                            <span class="flex items-center gap-1">
                                <i class="fas fa-calendar-alt"></i>
                                20 Agustus 2023
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="fas fa-clock"></i>
                                09:00 WIB
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Agenda Card 2 -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Kegiatan</span>
                            <div class="flex gap-2">
                                <button class="text-gray-500 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                                <button class="text-gray-500 hover:text-blue-800"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Gotong Royong</h3>
                        <p class="text-gray-600 text-sm mb-4">Kegiatan bersih-bersih lingkungan desa dan penanaman pohon.</p>
                        <div class="flex items-center text-sm text-gray-500 gap-4">
                            <span class="flex items-center gap-1">
                                <i class="fas fa-calendar-alt"></i>
                                22 Agustus 2023
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="fas fa-clock"></i>
                                07:00 WIB
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Agenda Card 3 -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Pelatihan</span>
                            <div class="flex gap-2">
                                <button class="text-gray-500 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                                <button class="text-gray-500 hover:text-blue-800"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Pelatihan UMKM</h3>
                        <p class="text-gray-600 text-sm mb-4">Pelatihan keterampilan dan manajemen usaha untuk pelaku UMKM desa.</p>
                        <div class="flex items-center text-sm text-gray-500 gap-4">
                            <span class="flex items-center gap-1">
                                <i class="fas fa-calendar-alt"></i>
                                25 Agustus 2023
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="fas fa-clock"></i>
                                13:00 WIB
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-6 flex justify-center">
                <nav class="flex items-center gap-2">
                    <button class="px-3 py-1 rounded-lg border text-gray-500 hover:bg-blue-50">Previous</button>
                    <button class="px-3 py-1 rounded-lg bg-blue-800 text-white">1</button>
                    <button class="px-3 py-1 rounded-lg border text-gray-500 hover:bg-blue-50">2</button>
                    <button class="px-3 py-1 rounded-lg border text-gray-500 hover:bg-blue-50">3</button>
                    <button class="px-3 py-1 rounded-lg border text-gray-500 hover:bg-blue-50">Next</button>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
function toggleDropdown() {
    const dropdown = document.getElementById('dropdown');
    dropdown.classList.toggle('hidden');
}

// Toggle mobile menu
document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('-translate-x-full');
});

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('dropdown');
    const button = event.target.closest('button');
    if (!button && !dropdown.classList.contains('hidden')) {
        dropdown.classList.add('hidden');
    }
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

</body>
</html>
