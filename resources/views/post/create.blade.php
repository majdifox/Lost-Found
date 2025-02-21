<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-6 py-12">
        <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-xl border border-gray-300 p-8">
            <h1 class="text-4xl font-extrabold text-blue-700 text-center mb-6 drop-shadow-lg">Create New Post</h1>
            <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" id="description" rows="5" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            <div class="mb-4">
                <label for="categoryID" class="block text-gray-700 font-medium mb-2">Category</label>
                <select name="categoryID" id="categoryID" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach                    
                </select>
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-gray-700 font-medium mb-2">Photo</label>
                <input type="file" name="photo" id="photo" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700 font-medium mb-2">Date</label>
                <input type="date" name="date" id="date" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="location" class="block text-gray-700 font-medium mb-2">Location</label>
                <input type="text" name="location" id="location" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="contact" class="block text-gray-700 font-medium mb-2">Contact Information</label>
                <input type="text" name="contact" id="contact" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="text-center mt-6">
                <button type="submit" class="px-6 py-3 bg-blue-600 text-white text-lg font-bold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">Submit</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>
