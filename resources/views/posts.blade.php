<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/posts.css">
        <script src="/js/posts.js"></script>
    </head>
    <body>
        <?php foreach ($posts as $post): ?>
            <article>
                <h1>
                    <a href="/post/<?= $post->slug ?>">
                        <?= $post->title ?>
                    </a>
                </h1>
                <p>
                    <?= $post->excerpt ?>
                </p>
            </article>
        <?php endforeach; ?>
    </body>
</html>
