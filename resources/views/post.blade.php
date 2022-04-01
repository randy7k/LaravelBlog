<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/posts.css">
        <script src="/js/posts.js"></script>
    </head>
    <body>
        <artucle>
            <h1>
                <?= $post->title ?>
            </h1>
            <p>
                <?= $post->body ?>
            </p>
        </artucle>
        <a href="/">Go back</a>
    </body>
</html>
