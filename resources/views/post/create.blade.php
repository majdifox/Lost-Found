<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    index

    <form method="post" action="{{route('post.store')}}">
        @csrf
        @method('post')
    <div>
        <label>Title</label>
        <input type="text" name="title" placeholder="Title" required />
    </div>
    <div>
        <label>Description</label>
        <textarea name="description" placeholder="Description" required></textarea>
    </div>
    <div>
        <label>Photo</label>
        <input type="file" name="photo" accept="image/*" required />
    </div>
    <div>
        <label>Location</label>
        <input type="text" name="location" placeholder="Location" required />
    </div>
    <div>
        <label>Contact</label>
        <input type="text" name="contact" placeholder="Contact" required />
    </div>
    <div>
        <label>User</label>
        <input type="text" name="user" placeholder="User" required />
    </div>
    <div>
        <input type="submit" value="Create a New Post" />
    </div>
</form>

</body>
</html>