<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiz</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!--import the navigation bar and set phising as active-->
  <?php
  $active = "fake websites";
  include("quiz_navbar.php");
  ?>


  <!--Identity theft quiz starts here-->
  <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Fake Website Quiz</h5><br>
        <h6 class="card-subtitle mb-2 text-body-secondary">Question:</h6>
        <p class="card-text" id="question">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

        <div class="d-grid gap-2" id="answer-buttons">
          <button class="btn active btn-outline" type="button">True</button>
          <button class="btn active btn-outline" type="button">False</button>
        </div>
        <br>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-primary" type="button" style="display: none;" id="next-btn">Next</button>
        </div>
      </div>
    </div>
  </div>

  <!--Identity theft quiz ends here-->
  <script src="fakewebsitequiz.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>