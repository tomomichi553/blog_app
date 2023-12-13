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
            {{$post->title}}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{$post->body}}</p>
            </div>
            <div>
                <h4>カテゴリー</h4>
                <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
            </div>
        </div>
        <br>
        <div class="edit"><a href="/posts/{{$post->id}}/edit">edit</a></div>
        <div class="footeer">
            <a href="/">戻る</a>
        </div>
    <!--</body>-->
    </x-app-layout>
</html>