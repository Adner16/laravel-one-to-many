
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Post</title>
</head>
<body>
        <form action="{{route('admin.posts.update', $post->id)}}" method='POST'>
            @csrf 
            @method('PATCH')
            <label for="title">Title</label>
            <input id="title" value="{{$post->title}}" type="text" name="title">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
            <label for="image">Image</label>
            <input value="{{$post->image}}" id="image" name="image" type="text">

            <label for="category_id">Categoria</label>
            <select id="category_id" name="category_id">
                <option value="">nessuna categoria</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}" @if($post->category_id == $category->id) selected @endif>{{$category->label}}</option>
            @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">
            {{$message}}
            </div>
            @enderror

            <button type="submit">Invia</button>
        </form>
        <a href="{{route('admin.posts.index')}}" class='btn'>Annulla</a>
</body>
</html>