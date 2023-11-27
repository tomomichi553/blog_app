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
        ブログ投稿
    </h1>
    <div class="submit">
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <p> タイトル：<input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}"></p>
                <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
            </div>
            <div class="body">
                <p>　　内容：<textarea name="post[body]" placeholder="本文" value="{{old('post.body')}}"></textarea>
                <p class="title_error" style="color:red">{{$errors->first('post.body')}}</p>
            </div>
            
            <p><input type="submit" value="保存"></p>
        </form>
    </div>
    
    <div class="footeer">
        <a href="/">戻る</a>
    </div>
</body>
</html>