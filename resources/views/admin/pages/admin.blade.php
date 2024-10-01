@extends('admin')

@section('main-content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>User Information</title>
</head>

<body class="bg-gradient-to-r from-purple-400 to-blue-500 flex items-center mt-8">
    <div class="bg-white ml-96 mt-12 p-6 rounded-lg shadow-lg mt-10 w-full">
        <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">User Information</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-3 px-6 bg-gray-100 text-gray-700 text-sm font-bold uppercase border-b border-gray-300">Name</th>
                        <th class="py-3 px-6 bg-gray-100 text-gray-700 text-sm font-bold uppercase border-b border-gray-300">Email</th>
                        <th class="py-3 px-6 bg-gray-100 text-gray-700 text-sm font-bold uppercase border-b border-gray-300">Phone</th>
                        <th class="py-3 px-6 bg-gray-100 text-gray-700 text-sm font-bold uppercase border-b border-gray-300">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $data)
                    @if($data->is_admin == 1)
                    <tr class="hover:bg-gray-100">
                        <td class="py-4 px-6 border-b border-gray-300 text-gray-700">{{$data->name}}</td>
                        <td class="py-4 px-6 border-b border-gray-300 text-gray-700">{{$data->email}}</td>
                        <td class="py-4 px-6 border-b border-gray-300 text-gray-700">{{$data->phone}}</td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <span class="bg-green-500 text-white rounded-full px-3 py-1 text-sm font-semibold">Active</span>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</body>

@endsection