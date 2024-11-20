<!-- Top Navigation -->
<nav class="bg-blue-800 px-6 py-3 flex items-center justify-between sticky top-0 z-20">
    <h2 class="text-xl font-semibold text-white ml-8 lg:ml-0">Dashboard</h2>
    
    <div class="relative">
        <button class="flex items-center space-x-2 text-white hover:text-blue-200 focus:outline-none" onclick="toggleDropdown()">
            <img src="https://ui-avatars.com/api/?name=Admin&background=2563eb&color=fff" class="w-8 h-8 rounded-full">
            <span class="hidden sm:inline">Admin</span>
            <i class="fas fa-chevron-down text-sm"></i>
        </button>
        
        <div id="dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">
                <i class="fas fa-user mr-2 text-blue-600"></i>Profil
            </a>
            <hr class="my-2">
            <a href="{{ url('/auth/login') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">
                <i class="fas fa-sign-out-alt mr-2 text-blue-600"></i>Keluar
            </a>
        </div>
    </div>
</nav>

<script>
function toggleDropdown() {
    const dropdown = document.getElementById('dropdown');
    dropdown.classList.toggle('hidden');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('dropdown');
    const button = event.target.closest('button');
    if (!button && !dropdown.classList.contains('hidden')) {
        dropdown.classList.add('hidden');
    }
});
</script>
