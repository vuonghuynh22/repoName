<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 API Documentation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8fafc;
        }
        .container { max-width: 1200px; margin: 0 auto; }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .endpoint {
            background: white;
            padding: 20px;
            margin: 15px 0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-left: 4px solid #667eea;
        }
        .method {
            font-weight: bold;
            color: #fff;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            display: inline-block;
            min-width: 60px;
            text-align: center;
        }
        .get { background: #28a745; }
        .post { background: #007bff; }
        .put { background: #ffc107; color: #000; }
        .delete { background: #dc3545; }
        pre {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            border: 1px solid #e9ecef;
        }
        .url {
            font-family: 'Courier New', monospace;
            background: #e9ecef;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: bold;
        }
        .section { margin: 30px 0; }
        .curl-section {
            background: #2d3748;
            color: #e2e8f0;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .curl-section h3 { color: #63b3ed; margin-top: 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 Laravel 11 API Documentation</h1>
            <p>API endpoints for Keploy testing with Laravel 11</p>
        </div>

        <div class="section">
            <h2>📋 Available Endpoints</h2>

            <div class="endpoint">
                <span class="method get">GET</span>
                <span class="url">/api/health</span>
                <p>Health check endpoint - Test if API is running</p>
            </div>

            <div class="endpoint">
                <span class="method get">GET</span>
                <span class="url">/api/posts</span>
                <p>Get all posts</p>
            </div>

            <div class="endpoint">
                <span class="method post">POST</span>
                <span class="url">/api/posts</span>
                <p>Create a new post</p>
                <pre>{
    "title": "My New Post",
    "content": "This is the content of my post",
    "author": "Your Name",
    "published": true
}</pre>
            </div>

            <div class="endpoint">
                <span class="method get">GET</span>
                <span class="url">/api/posts/{id}</span>
                <p>Get a specific post by ID</p>
            </div>

            <div class="endpoint">
                <span class="method put">PUT</span>
                <span class="url">/api/posts/{id}</span>
                <p>Update a specific post</p>
                <pre>{
    "title": "Updated Title",
    "published": true
}</pre>
            </div>

            <div class="endpoint">
                <span class="method delete">DELETE</span>
                <span class="url">/api/posts/{id}</span>
                <p>Delete a specific post</p>
            </div>

            <div class="endpoint">
                <span class="method get">GET</span>
                <span class="url">/api/posts-published</span>
                <p>Get only published posts</p>
            </div>
        </div>

        <div class="curl-section">
            <h3>🔧 Test with cURL Commands</h3>
            <pre>
# Health check
curl -X GET http://localhost:8000/api/health

# Get all posts
curl -X GET http://localhost:8000/api/posts

# Create a new post
curl -X POST http://localhost:8000/api/posts \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "title": "Keploy Test Post",
    "content": "Testing API with Keploy",
    "author": "Keploy Tester",
    "published": true
  }'

# Get specific post (replace 1 with actual post ID)
curl -X GET http://localhost:8000/api/posts/1

# Update a post
curl -X PUT http://localhost:8000/api/posts/1 \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "title": "Updated by Keploy",
    "published": true
  }'

# Get published posts only
curl -X GET http://localhost:8000/api/posts-published

# Delete a post
curl -X DELETE http://localhost:8000/api/posts/1
            </pre>
        </div>

        <div class="section">
            <h2>🧪 Keploy Testing Steps</h2>
            <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <ol>
                    <li><strong>Start Laravel:</strong> <code>php artisan serve --port=8000</code></li>
                    <li><strong>Start Keploy Recording:</strong> <code>keploy record</code></li>
                    <li><strong>Run the cURL commands above</strong></li>
                    <li><strong>Stop recording and run tests:</strong> <code>keploy test</code></li>
                </ol>
            </div>
        </div>
    </div>
</body>
</html>