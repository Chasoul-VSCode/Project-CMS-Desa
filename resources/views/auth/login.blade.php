<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Sistem Informasi Desa</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md space-y-4 sm:space-y-8">
            <div class="bg-white rounded-t-2xl shadow-lg p-6 sm:p-8 border-b-4 border-blue-800">
                <div class="flex justify-center">
                    <div class="bg-blue-800 rounded-full p-3 sm:p-4 shadow-lg">
                        <i class="fas fa-house-user text-3xl sm:text-4xl text-white"></i>
                    </div>
                </div>
                <h1 class="mt-4 sm:mt-6 text-2xl sm:text-3xl font-extrabold text-center text-blue-800">SI Desa</h1>
                <h2 class="mt-2 text-center text-lg sm:text-xl font-medium text-blue-600">Selamat Datang Kembali!</h2>
                <p class="mt-2 text-center text-xs sm:text-sm text-blue-500">Silakan login untuk mengakses dashboard</p>
            </div>
            
            <div class="bg-white rounded-b-2xl shadow-lg p-6 sm:p-8">
                <form class="space-y-4 sm:space-y-6" action="{{ url('/app/dashboard') }}" method="POST">
                    @csrf
                    <div class="space-y-4 sm:space-y-5">
                        <div>
                            <label for="email" class="block text-sm font-semibold text-blue-700">Email</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-blue-400"></i>
                                </div>
                                <input id="email" name="email" type="email" required 
                                    class="block w-full pl-10 pr-3 py-2.5 sm:py-3 text-sm border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                                    placeholder="Masukkan email anda">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-semibold text-blue-700">Password</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-blue-400"></i>
                                </div>
                                <input id="password" name="password" type="password" required
                                    class="block w-full pl-10 pr-3 py-2.5 sm:py-3 text-sm border-2 border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                                    placeholder="Masukkan password anda">
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-3 sm:space-y-0">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember_me" type="checkbox"
                                    class="h-4 w-4 sm:h-5 sm:w-5 text-blue-600 focus:ring-blue-500 border-blue-300 rounded transition-all cursor-pointer">
                                <label for="remember_me" class="ml-2 block text-sm text-blue-700 cursor-pointer hover:text-blue-900">
                                    Ingat saya
                                </label>
                            </div>

                            <div class="text-sm">
                                <a href="#" class="font-medium text-blue-600 hover:text-blue-800 transition-colors">
                                    Lupa password?
                                </a>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full flex justify-center py-2.5 sm:py-3 px-4 border border-transparent rounded-lg text-sm font-medium text-white bg-blue-800 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition-all hover:scale-[1.02] active:scale-[0.98] shadow-lg">
                            <span class="mr-2">Login</span>
                            <i class="fas fa-sign-in-alt"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
