<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Blog</title>

        <!-- Fonts -->
        
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <h1 class="title">
        ブログ編集
    </h1>
    <div class="submit">
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2> タイトル</h2>
                <input type="text" name="post[title]" value="{{$post->title}}">
                <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
            </div>
            <div class="body">
                <h2>内容</h2>
                <input type="text" name="post[body]" value="{{$post->body}}">
                <p class="title_error" style="color:red">{{$errors->first('post.body')}}</p>
            </div>
            
            <input type="submit" value="保存">
        </form>
    </div>
    
    <div class="footeer">
        <a href="/">戻る</a>
    </div>
</body>
</html>