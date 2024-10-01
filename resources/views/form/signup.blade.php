<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Signup Form</title>
    <style>
        .image-input {
            display: none;
            /* Hide the file input */
        }
    </style>
</head>

<body class="bg-gradient-to-r from-purple-400 to-blue-500 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Create an Account</h2>

        @include('sweetalert::alert')

        <form action="{{route('submit')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col items-center mb-4">
                <div class="w-24 h-24 border-4 border-gray-300 rounded-full flex items-center justify-center overflow-hidden mb-2">
                    <img id="image-preview" src="#" alt="Profile Image" class="hidden w-full h-full object-cover rounded-full">
                </div>
                <label for="image" class="cursor-pointer text-gray-400 bg-gray-200 hover:bg-gray-300 rounded py-2 px-4">
                    Upload Your Profile Image
                </label>
                <input type="file" id="image" name="img" accept="image/*" class="image-input" onchange="previewImage(event)" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center justify-center">
                <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign Up</button>
            </div>
            <div class="text-center mt-4">
                <a href="{{route('login')}}" class="text-purple-600 hover:underline">Already have an account?</a>
            </div>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('image-preview');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                imagePreview.src = reader.result;
                imagePreview.classList.remove('hidden'); // Show the image
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>