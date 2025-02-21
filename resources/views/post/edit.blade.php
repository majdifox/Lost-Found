<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    
<div class="container mx-auto px-6 py-12 bg-white shadow-xl rounded-xl max-w-3xl border border-gray-300 mt-10">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">✏️ Edit Post</h2>

    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Title Field -->
        <div>
            <label class="block text-gray-700 font-bold mb-2">Title:</label>
            <input type="text" name="title" value="{{ post->title }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Description Field -->
        <div>
            <label class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $post->description }}</textarea>
        </div>

        <!-- Current Image Preview -->
        <div>
            <label class="block text-gray-700 font-bold mb-2">Current Image:</label>
            @if ($post->photo)
                <img src="{{ asset('storage/' . $post->photo) }}" class="w-full h-56 object-cover rounded-lg">
            @else
                <p class="text-gray-500">No image uploaded</p>
            @endif
        </div>

        <!-- Upload New Image -->
        <div>
            <label class="block text-gray-700 font-bold mb-2">Change Image:</label>
            <input type="file" name="photo" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="submit" class="px-6 py-3 bg-blue-500 text-white font-bold rounded-lg shadow-lg hover:bg-blue-600 transition duration-300">
                💾 Save Changes
            </button>
        </div>
    </form>
</div>

</body>
</html>
