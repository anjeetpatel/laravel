    <!DOCTYPE html>
    <html>
    <head>
        <title>Blog Posts</title>
    </head>
    <body>
        <h1>Blog Posts</h1>

        @foreach($posts as $post)
            <div style="margin-bottom: 20px;">
                <h2>Title: {{ $post['title'] }}</h2>
                <p><strong>Author:</strong> {{ $post['author'] }}</p>
                <p><strong>Content:</strong> {{ $post['content'] }}</p>
            </div>
        @endforeach
    </body>
    </html>