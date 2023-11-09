<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        body{
            font-family: 'Open Sans', sans-serif;
        }
        /* Define the layout for the two columns */
        .container {
            display: flex;
            align-items: center;
            height: calc(100vh - 62px);
            justify-content: center;
        }

        /* Style for the first column (image) */
        .column1 {
            flex: 40%; /* 40% width of the container */
            padding: 10px;
            align-items: center;
        }

        /* Style for the second column (text) */
        .column2 {
            flex: 60%; /* 60% width of the container */
            padding-right: 10%;
            align-items: center;
        }

        /* Style for the sub-columns in the second column */
        .sub-column {
            padding: 10px;
        }

        /* Add additional styles as needed */
        /* For example, you can set a maximum width for images in the first column */
        .column1 img {
            max-width: 600px; /* Adjust the maximum width as needed */
            height: auto;
        }

        .title h1{
            text-align: center;
            font-size: 50px;
            margin: 0;
            color: #000F62;
        }

        /* Style the introduction */
        .intro {
            font-size: 16px;
            font-weight: 400px;
            line-height: 31.5px;
            color: #1F309F;
            margin: 30px 0;
        }

        @media (max-width: 1020px) {
            .column1 img {
                max-width: 400px; /* Adjust the maximum width as needed */
                height: auto;
            }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column; /* Stack columns vertically */
                text-align: center; /* Center content within columns */
                width: 100%;
            }
            .column1,
            .column2 {
                flex: 100%; /* Full width for both columns */
                padding: 0 20px;
            }

            .title h1{
                font-size: 35px;
            }
            .intro{
                font-size: 14px;
            }

            .column1 img {
                max-width: 100%; /* Adjust the maximum width as needed */
                height: auto;
            }
        }

        .btn {
            background-color: #E4A629;
            padding: 15px 30px;
            text-decoration:none;
            font-weight:bold;
            border-radius:5px;
            cursor:pointer;
            color: whitesmoke;
        }
    </style>
</head>
<body>

        <script>
            window.embeddedChatbotConfig = {
            chatbotId: "Fibkt4bxRnVTgZYguEMkn",
            domain: "www.chatbase.co"
            }
            </script>
            <script
            src="https://www.chatbase.co/embed.min.js"
            chatbotId="Fibkt4bxRnVTgZYguEMkn"
            domain="www.chatbase.co"
            defer>
        </script>

    <?php include 'C:\xampp\htdocs\Hackathon\navbar.php';?>
    
    <div class="container">
        <div class="column1">
            <img src="homeimage.png" alt="Image description">
        </div>
        <div class="column2">
            <div class="sub-column">
                <div class="title">
                    <h1>Online Frauds</h1>
                </div>
            </div>
            <div class="intro">
                <p>
                    Welcome to our online safety hub! 🌟 Learn how to protect yourself and your loved ones from sneaky online scams. Explore different types of fraud, take fun quizzes, and share your experiences in our safe forum. Together, we can outsmart the scammers and stay safe online!
                </p>
            </div>

            <a class="btn" href="templatemo_588_ebook_landing\index.php">Get Started</a>
        
        </div>
    </div>
</body>
</html>