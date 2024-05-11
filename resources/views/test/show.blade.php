<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='post[tag_id]'>
            {{-- titleとbodyを表示させましょう --}}
            <h2 class="title">
                {{ $post->title }}
            </h2>
            <p class="body">
                {{ $post->body }}
            </p>
            <p class="name">
                {{ $tag->name }}
            </p>
        </div>
        <a href="/test">戻る</a>
    </body>
</html>