<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <span class="text-xl font-semibold text-gray-900">MyApp</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-gray-500 mr-4">Welcome, {{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-500 hover:text-gray-700">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>
                        <p class="mb-4">You are logged in as {{ auth()->user()->email }}</p>
                        
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h2 class="text-lg font-medium mb-2">User Information</h2>
                            <ul class="space-y-2">
                                <li><strong>Name:</strong> {{ auth()->user()->name }}</li>
                                <li><strong>Email:</strong> {{ auth()->user()->email }}</li>
                                <li><strong>Account Created:</strong> {{ auth()->user()->created_at->diffForHumans() }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>