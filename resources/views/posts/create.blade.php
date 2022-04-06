
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Post</title>
</head>
<body>
        <form action="{{route('admin.posts.store')}}" method='POST'>
            @csrf
            <label for="title">Title</label>
            <input id="title" type="text" name="title">
            @error('title')
            <div class="invalid-feedback">
            {{$message}}
            </div>
            @enderror
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            @error('content')
            <div class="invalid-feedback">
            {{$message}}
            </div>
            @enderror
            <label for="image">Image</label>
            <input id="image" name="image" type="text">
            @error('image')
            <div class="invalid-feedback">
            {{$message}}
            </div>
            @enderror
            <button type="submit">Invia</button>
        </form>
        <a href="{{route('admin.posts.index')}}" class='btn'>Annulla</a>
</body>
</html>