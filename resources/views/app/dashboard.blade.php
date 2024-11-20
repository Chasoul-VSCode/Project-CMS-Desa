<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Sistem Informasi Desa</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">

<div class="flex">
    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button" class="lg:hidden fixed top-4 left-4 z-50 bg-slate-800 text-white p-2 rounded-lg">
        <i class="fas fa-bars"></i>
    </button>

    @include('layout.sidebar')

    <!-- Main Content -->
    <div class="flex-1">
        <!-- Main Content Area -->
        <div>
            @if(View::exists('pages.home'))
                @include('pages.home')
            @else
                @yield('content')
            @endif
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
