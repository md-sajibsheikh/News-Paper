@extends('admin')

@section('main-content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Table with Delete Icon</title>
</head>

<body class="bg-gradient-to-r from-purple-400 to-blue-500 flex items-center mt-8">
    <div class="bg-white ml-96 mt-20 p-2 rounded-lg shadow-lg mt-10 w-full">
        <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">User Share Information</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white mb-10 border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-4 px-6 text-gray-700 text-sm font-bold uppercase border-b border-gray-300 text-left">Name</th>
                        <th class="py-4 px-6 text-gray-700 text-sm font-bold uppercase border-b border-gray-300 text-left">Email</th>
                        <th class="py-4 px-6 text-gray-700 text-sm font-bold uppercase border-b border-gray-300 text-left">Subject</th>
                        <th class="py-4 px-6 text-gray-700 text-sm font-bold uppercase border-b border-gray-300 text-left">Message</th>
                        <th class="py-4 px-6 text-gray-700 text-sm font-bold uppercase border-b border-gray-300 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($share as $data)
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-300 text-gray-700">{{$data->name}}</td>
                        <td class="py-4 px-6 border-b border-gray-300 text-gray-700">{{$data->email}}</td>
                        <td class="py-4 px-6 border-b border-gray-300 text-gray-700">{{$data->subject}}</td>
                        <td class="py-4 px-6 border-b border-gray-300 text-gray-700">{{$data->message}}</td>
                        <td class="py-4 px-6 border-b border-gray-300 text-gray-700">
                            <a href="" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

@endsection