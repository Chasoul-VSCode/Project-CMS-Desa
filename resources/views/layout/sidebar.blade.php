<!-- Sidebar -->
<aside id="sidebar" class="fixed top-0 left-0 w-64 h-screen bg-blue-800 text-white transition-transform duration-300 ease-in-out -translate-x-full lg:translate-x-0">
    <!-- Logo -->
    <div class="flex items-center justify-center h-16 border-b border-blue-700">
        <a href="/" class="text-xl font-bold">CMS Desa</a>
    </div>   

<!-- User Info -->
    <div class="p-4 border-b border-blue-700">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 rounded-full bg-blue-700 flex items-center justify-center">
                <i class="fas fa-user"></i>
            </div>
            <div>
                <p class="font-semibold">Admin Desa</p>
                <p class="text-xs text-blue-200">admin@desaku.id</p>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="mt-4 px-4">
        <!-- Dashboard -->
        <div class="mb-4">
            <p class="text-blue-200 text-xs uppercase font-semibold mb-2">Dashboard</p>
            <a href="{{ url('/pages/home') }}" class="flex items-center space-x-2 text-gray-100 hover:text-white hover:bg-blue-700 px-4 py-2 rounded-lg">
                <i class="fas fa-home"></i>
                <span>Beranda</span>
            </a>
        </div>

        <!-- Master Data -->
        <div class="mb-4">
            <p class="text-blue-200 text-xs uppercase font-semibold mb-2">Master Data</p>
            <a href="#" class="flex items-center space-x-2 text-gray-100 hover:text-white hover:bg-blue-700 px-4 py-2 rounded-lg">
                <i class="fas fa-users"></i>
                <span>Data Penduduk</span>
            </a>
            <a href="#" class="flex items-center space-x-2 text-gray-100 hover:text-white hover:bg-blue-700 px-4 py-2 rounded-lg">
                <i class="fas fa-house-user"></i>
                <span>Data Keluarga</span>
            </a>
        </div>

        <!-- Layanan -->
        <div class="mb-4">
            <p class="text-blue-200 text-xs uppercase font-semibold mb-2">Layanan</p>
            <a href="#" class="flex items-center space-x-2 text-gray-100 hover:text-white hover:bg-blue-700 px-4 py-2 rounded-lg">
                <i class="fas fa-envelope"></i>
                <span>Surat Menyurat</span>
            </a>
            <a href="{{ url('/pages/agenda') }}" class="flex items-center space-x-2 text-gray-100 hover:text-white hover:bg-blue-700 px-4 py-2 rounded-lg">
                <i class="fas fa-calendar"></i>
                <span>Agenda</span>
            </a>
        </div>

        <!-- Informasi -->
        <div class="mb-4">
            <p class="text-blue-200 text-xs uppercase font-semibold mb-2">Informasi</p>
            <a href="#" class="flex items-center space-x-2 text-gray-100 hover:text-white hover:bg-blue-700 px-4 py-2 rounded-lg">
                <i class="fas fa-newspaper"></i>
                <span>Berita</span>
            </a>
            <a href="#" class="flex items-center space-x-2 text-gray-100 hover:text-white hover:bg-blue-700 px-4 py-2 rounded-lg">
                <i class="fas fa-bullhorn"></i>
                <span>Pengumuman</span>
            </a>
        </div>

        <!-- Pengaturan -->
        <div class="mb-4">
            <p class="text-blue-200 text-xs uppercase font-semibold mb-2">Pengaturan</p>
            <a href="#" class="flex items-center space-x-2 text-gray-100 hover:text-white hover:bg-blue-700 px-4 py-2 rounded-lg">
                <i class="fas fa-cog"></i>
                <span>Sistem</span>
            </a>
            <a href="#" class="flex items-center space-x-2 text-gray-100 hover:text-white hover:bg-blue-700 px-4 py-2 rounded-lg">
                <i class="fas fa-users-cog"></i>
                <span>Pengguna</span>
            </a>
        </div>
    </nav>
</aside>
