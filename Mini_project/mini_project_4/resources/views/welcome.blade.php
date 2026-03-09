<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TeachConnect</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Custom Gradient Text */
        .text-gradient-purple {
            background: linear-gradient(to right, #d946ef, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen relative overflow-x-hidden selection:bg-purple-100 selection:text-purple-700">

    <div class="fixed inset-0 -z-10 pointer-events-none">
        <div class="absolute top-0 left-0 w-96 h-96 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-20 w-96 h-96 bg-pink-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col items-center justify-center min-h-screen">
        
        <div class="text-center mb-12">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="bg-gradient-to-br from-purple-500 to-pink-500 p-2 rounded-xl shadow-lg">
                    <i data-lucide="graduation-cap" class="w-8 h-8 text-white"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 tracking-tight">
                    <span class="text-purple-600">Teach</span><span class="text-blue-600">Connect</span>
                </h1>
            </div>
            <p class="text-gray-500 text-lg">
                Where Learning Meets <span class="font-semibold text-purple-600">Innovation</span>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-5xl mb-12">
            
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-white/50 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-purple-200">
                        <i data-lucide="users" class="w-8 h-8 text-white"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-3">I'm a Student</h2>
                    <p class="text-gray-500 mb-8 leading-relaxed">
                        Discover amazing courses from passionate teachers worldwide.
                    </p>
                    <button class="w-full py-3 px-6 rounded-xl bg-gradient-to-r from-purple-600 to-pink-500 text-white font-semibold shadow-lg shadow-purple-200 hover:shadow-purple-300 transition-all flex items-center justify-center gap-2 group">
                        <i data-lucide="sparkles" class="w-5 h-5 group-hover:rotate-12 transition-transform"></i>
                        Explore Courses
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-xl border border-white/50 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-blue-200">
                        <i data-lucide="graduation-cap" class="w-8 h-8 text-white"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-3">I'm a Teacher</h2>
                    <p class="text-gray-500 mb-8 leading-relaxed">
                        Share your knowledge and inspire students around the globe.
                    </p>
                    <button class="w-full py-3 px-6 rounded-xl bg-[#007AFF] text-white font-semibold shadow-lg shadow-blue-200 hover:bg-blue-600 transition-all flex items-center justify-center gap-2">
                        <i data-lucide="zap" class="w-5 h-5 fill-current"></i>
                        Start Teaching
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-6xl">
            
            <div class="bg-purple-50 rounded-2xl p-6 border border-purple-100 hover:bg-purple-100 transition-colors">
                <div class="flex flex-col items-center text-center">
                    <i data-lucide="video" class="w-8 h-8 text-purple-600 mb-3"></i>
                    <h3 class="font-bold text-gray-800 mb-2">Video Learning</h3>
                    <p class="text-sm text-gray-500">
                        Watch sample videos before enrolling in any course
                    </p>
                </div>
            </div>

            <div class="bg-cyan-50 rounded-2xl p-6 border border-cyan-100 hover:bg-cyan-100 transition-colors">
                <div class="flex flex-col items-center text-center">
                    <i data-lucide="globe" class="w-8 h-8 text-cyan-600 mb-3"></i>
                    <h3 class="font-bold text-gray-800 mb-2">Instant Connect</h3>
                    <p class="text-sm text-gray-500">
                        Contact teachers directly via Telegram in seconds
                    </p>
                </div>
            </div>

            <div class="bg-orange-50 rounded-2xl p-6 border border-orange-100 hover:bg-orange-100 transition-colors">
                <div class="flex flex-col items-center text-center">
                    <i data-lucide="stars" class="w-8 h-8 text-orange-500 mb-3"></i>
                    <h3 class="font-bold text-gray-800 mb-2">Flexible Options</h3>
                    <p class="text-sm text-gray-500">
                        Learn online from home or at physical locations
                    </p>
                </div>
            </div>

        </div>

    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>