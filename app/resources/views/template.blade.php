<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(120deg, #a855f7, #6366f1, #06b6d4);
            background-size: 200% 200%;
            animation: gradient 15s ease infinite;
        }
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
    </style>
</head>
<body class="{{ $viewData->getBodyClasses() }}">

    <div class="max-w-md w-full bg-white rounded-xl shadow-2xl overflow-hidden card-hover">
        <div class="py-6 px-8">
            <div class="text-center">
                <div class="mx-auto w-24 h-24 rounded-full bg-purple-100 flex items-center justify-center mb-4">
                    <i class="fas fa-user-lock text-purple-600 text-4xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back</h2>
                <p class="text-gray-600 mb-8">Sign in to your account to continue</p>
            </div>

            <form>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" id="email" class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="you@example.com">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" id="password" class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="••••••••">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <button type="button" id="togglePassword" class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mt-2 text-right">
                        <a href="#" class="text-sm text-purple-600 hover:text-purple-800 font-medium">Forgot Password?</a>
                    </div>
                </div>

                <div class="flex items-center mb-6">
                    <input type="checkbox" id="remember" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 px-4 rounded-lg font-medium hover:from-purple-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-300 ease-in-out transform hover:-translate-y-0.5">
                    Sign In
                </button>
            </form>

            <div class="my-6 flex items-center">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="mx-4 text-gray-500 text-sm">or continue with</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <button class="py-2 px-4 border border-gray-300 rounded-lg font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-600">
                    <i class="fab fa-google text-red-500 mr-2"></i> Google
                </button>
                <button class="py-2 px-4 border border-gray-300 rounded-lg font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-600">
                    <i class="fab fa-github text-gray-800 mr-2"></i> GitHub
                </button>
            </div>

            <div class="text-center text-sm text-gray-600">
                Don't have an account? <a href="#" class="font-medium text-purple-600 hover:text-purple-800">Sign up</a>
            </div>
        </div>
        <div class="py-4 bg-gray-100 text-center text-xs text-gray-600">
            © 2023 Company Name. All rights reserved.
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle eye icon
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });

        // Form validation on submit
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (!email || !password) {
                alert('Please fill in all fields');
                return;
            }
            
            // Simulate successful login
            alert('Login successful! Redirecting...');
            // In a real application, you would submit the form to a server here
        });
    </script>
</body>
</html>