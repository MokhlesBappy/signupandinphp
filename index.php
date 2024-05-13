
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section class="">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="min-h-screen flex items-center justify-center ">
                <div class="bg-black p-8 rounded shadow-md w-96">
                    <div class="grid justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="10.5" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                    </div>
                    <h2 class="text-xl font-semibold mb-4 text-white">Sign Up</h2>
                    <div>
                        <button class="w-full bg-red-500 text-white items-center justify-center gap-2 py-2 flex rounded-md hover:bg-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="13.34375" viewBox="0 0 488 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#63E6BE" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                            Sign Up with Google</button>
                    </div>
                    <hr class="my-4">
                    <form action="signup.php" method="POST">
                        <div class="mb-4">
                            <span for="username" class="block text-white">Name</span>
                            <input type="text" id="username" name="username" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter Your Full Name" required>
                        </div>
                        <div class="mb-4">
                            <span for="email" class="block text-white">Email</span>
                            <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter Your Email Address"  required>
                        </div>
                        <div class="mb-4">
                            <span for="password" class="block text-white">Password</span>
                            <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="At least 8 caracters" required>
                        </div>
                        <div class="mb-4 flex items-center">
                            <input type="checkbox" id="terms" name="terms" class="mr-2">
                            <span for="terms" class="text-white">
                                I accept the <a href="#" class="text-yellow-400 underline underline-offset-1">
                                Terms
                             </a>and
                             <a href="#" class="text-yellow-400 underline underline-offset-1">
                                Privacy
                             </a>
                            </span>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-blue-600">Sign Up</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    
                    <div class="block text-white text-center pt-2">
                        Already have an Account?
                    </div>
                    <div class="block text-yellow-400 text-xm font-black text-center pt-2 hover:text-yellow-700">
                        <a href="#"> Log in</a>
                    </div>
                </div>
            </div>
            <div class="min-h-screen flex items-center justify-center">
                <div class="bg-black p-8 rounded shadow-md w-96">
                <div class="grid justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="10.5" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                    </div>
                    <h2 class="text-xl font-semibold mb-4 text-white">Log in</h2>
                    <div>
                        <button class="w-full bg-red-500 text-white items-center justify-center gap-2 py-2 flex rounded-md hover:bg-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="13.34375" viewBox="0 0 488 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#63E6BE" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                            Log in with Google</button>
                    </div>
                    <hr class="my-4">
                    <form action="login.php" method="POST">
                        <div class="mb-4">
                            <span for="email" class="block text-white">Email</span>
                            <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter Your Email Address" required>
                        </div>
                        <div class="mb-4">
                            <span for="password" class="block text-white">Password</span>
                            <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter Your Password"  required>
                        </div>
                        <div class="mb-4 flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="mr-2">
                            <span for="remember" class="text-white">Remember Me</span>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-blue-600">Log in</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    
                    <div class="text-center">
                        <a href="#" class="text-blue-500 hover:underline  ">Forgot password?</a>
                    </div>
                    <div class="block text-white text-center pt-2">
                        Don't have an Account?
                    </div>
                    <div class="block text-yellow-400 text-xm font-black text-center pt-2 hover:text-yellow-700">
                        <a href="#"> Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Process your form data here, e.g., save to database

    // For demonstration, let's just print the received data
    echo "<h1>Thank you for signing up!</h1>";
    echo "<p>Username: $username</p>";
    echo "<p>Email: $email</p>";
    // Do not display the password in real-life scenarios
}
?> -->