<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Forum</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(
            function(){
                $("form").on("submit",function(){
                    //alert($('#category').find(":selected").val());
                    
                    $.ajax({
                        url:"commentAjax.php",
                        method:"POST",
                        data:{
                            txt_comment:$("#comment").val(),
                            //txt_category:$('#category').find(":selected").text()
                            //txt_category:$( "#category option:selected" ).text()

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
    <?php include 'C:\xampp\htdocs\Hackathon\navbar.php';?>
    <header>
        <h1>Forum</h1>
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
        
        <div class="form-floating">
            <form method='post' action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <label for="comment">Your Comment:</label>

                <!-- <select class="form-select form-select-sm" aria-label=".form-select-sm example" required id="category">
                    <option>Choose category</option>
                    <option value="Phishing">Phishing</option>
                    <option value="Identity Theft">Identity Theft</option>
                    <option value="Online Shopping">Online Shopping</option>
                    <option value="Phone Frauds">Phone Frauds</option>
                    <option value="Messaging Scams">Messaging Scams</option>
                    <option value="Online Dating Scams">Online Dating Scams</option>
                    <option value="Job Offer Scams">Job Offer Scams</option>
                    <option value="Repair Scams">Repair Scams</option>
                </select> -->
                <br>
                <textarea id="comment" placeholder="Leave a comment" name="txt_comment" rows="4" required></textarea>
                <button class="btn-primary" type="submit">Submit Comment</button>
            </form>
        </div>
        
    </main>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>