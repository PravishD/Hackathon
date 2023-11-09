<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Forum</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(
            function(){
                $("form").on("submit",function(){
                    //alert($("#comment").val());
                    $.ajax({
                        url:"commentAjax.php",
                        method:"POST",
                        data:{
                            txt_comment:$("#comment").val()
                        },
                        success: function(data) {
                // Append the new comment to the comment section
                $(".comment-section").append(data);

                // Clear the form field after submitting a comment
                $("#comment").val('');
            },
            error: function() {
                alert("Error processing comment");
            }

                    });
                    //alert ("sent");
                });
            }
        );
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .comment-section {
            margin-top: 20px;
        }

        .comment {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            background-color: #fff;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h1>Simple Forum</h1>
    </header>

    <main>
        <div class="comment-section">
            <?php 
            require_once "../backend/db_connect.php";
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $commentQuery = "SELECT message_submitted
                                FROM comment_tbl
                                WHERE flag = '0'
                ";
                $result = $conn->query($commentQuery);
                while ($value = $result->fetch()) { 
                    echo '<div class="comment">
                    <p>'.$value['message_submitted'].'</p>
                    </div>';
                }
            ?>
            <!-- Add more comments as needed -->
        </div>

        <form method='post' action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="comment">Your Comment:</label>
            <textarea id="comment" name="txt_comment" rows="4" required></textarea>
            <button type="submit">Submit Comment</button>
        </form>
    </main>


</body>

</html>