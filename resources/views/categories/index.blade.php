<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<head>
    
</head> -->
<x-app-layout>
    <x-slot name="header">
        <meta charset="utf-8">
        <title>Blog</title>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </x-slot>
    <!--<body>-->
    <h1>Blogsite Name</h1>
    <a href="/posts/create">新規作成</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                        <br>
                        <a href="/categories/{{$post->category->id}}" style="font-size:10pt;">{{$post->category->name}}</a>
                    </h2>
                    <p class='body'>{{$post->body}}</p>
                    
                    <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{$post->id}})">削除</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div>
            <p>ログインユーザー:{{Auth::user()->name}}</p>
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id){
                'use strict'
                
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    <!--</body>-->
</x-app-layout>

</html><