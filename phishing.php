<!DOCTYPE html>
<html>
  <head>
    <title>Basic CSS Layout</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  

  <body>

    <header class="header">
      
    </header>

    <?php include 'nav.php';?>


    <div id="section">
      <h2>Phishing</h2>

      <div class="ratio ratio-16x9" id="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/kDFeSUUwRnA?si=i3kvDXd-mQCqQh1V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-container">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p>Test1</p>
                            </div>
                            <div class="carousel-item">
                              <p>Test2</p>
                            </div>
                            <div class="carousel-item">
                              <p>Test3</p>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="buttons">
      <a href="destination-page.html">
        <button type="button" class="button">Take Quiz</button>  
      </a>
      <a href="destination-page.html">
        <button type="button" class="button" >Next</button> 
      </a>
    
    
    
    
    </div>

    
 


    
    <div id="footer">
      &copy; 2023.
    </div>
  </body>
</html>