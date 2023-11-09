<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>Stylish Forum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 32px;
        }
        .topic {
            background-color: #f8f8f8;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        h3 {
            font-size: 24px;
        }
        p {
            font-size: 16px;
        }
        .post {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .post h4 {
            font-size: 18px;
            color: #0074D9;
        }
        .reply-button {
            background-color: #0074D9;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.2s;
        }
        .reply-button:hover {
            background-color: #0056a2;
        }
    </style>
</head>
<body>
    <header>
        <h1>Stylish Forum</h1>
    </header>

    <div class="container">
        <h2>Welcome to the Forum</h2>
        <div class="topic">
            <h3>Topic 1</h3>
            <p>This is the first topic in the forum.</p>
            <div class="post">
                <h4>User 1</h4>
                <p>This is the first post in Topic 1.</p>
                <button class="reply-button">Reply</button>
            </div>
            <div class="post">
                <h4>User 2</h4>
                <p>This is the second post in Topic 1.</p>
                <button class="reply-button">Reply</button>
            </div>
        </div>
        <div class="topic">
            <h3>Topic 2</h3>
            <p>This is the second topic in the forum.</p>
            <div class="post">
                <h4>User 3</h4>
                <p>This is the first post in Topic 2.</p>
                <button class="reply-button">Reply</button>
            </div>
        </div>
        <!-- You can add more topics and posts here -->
    </div>
</body>
</html>
