<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            <meta charset="utf-8">
            
            <title>Blog</title>
    
            <!-- Fonts -->
            
            <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        </x-slot>
    <!--<body>-->
            <h1 class="title">
                ブログ投稿
            </h1>
            <div class="submit">
                <form action="/posts" method="POST">
                    @csrf
                    <div class="title">
                        <h2> タイトル</h2>
                        <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}"></p>
                        <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
                    </div>
                    <div class="body">
                        <h2>内容</h2>
                        <textarea name="post[body]" placeholder="本文" value="{{old('post.body')}}"></textarea>
                        <p class="title_error" style="color:red">{{$errors->first('post.body')}}</p>
                    </div>
                    <div class="category">
                        <h2>Category</h2>
                        <select name="post[category_id]">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <p><input type="submit" value="保存"></p>
                </form>
            </div>
            
            <div class="footeer">
                <a href="/">戻る</a>
            </div>
    <!--</body>-->
    </x-app-layout>
</html>