<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Verification Code</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full bg-gray-100">
    <div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950">
        <div class="bg-white w-full dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200">Enter Verification Code</h1>
            <form action="{{ route('verify-code') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="verification_code" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Verification Code</label>
                    <input type="text" name="verification_code" id="verification_code" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter verification code" required>
                </div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Verify</button>
            </form>
        </div>
    </div>
</body>
</html>
