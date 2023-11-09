<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Online Fraud Awareness</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-ebook-landing.css" rel="stylesheet">

        <style>
            /* Add your buttonSection styling here */

            /* Styling for the modal */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.5);
            }

            .modal-content {
                background-color: #fefefe;
                margin: 50px auto; /* Updated margin property */
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
            }

            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
            }
        </style>

<!--

TemplateMo 588 ebook landing

https://templatemo.com/tm-588-ebook-landing

-->
    </head>
    
    <body>

        <main>

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


            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-12">
                            <button class="btn btn-dark d-lg-none" id="toggleNavbar">Toggle Navbar</button>
                            <nav id="navbar-example3" class="h-100 flex-column align-items-stretch">
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link smoothscroll" href="#item-1"><strong>Phishing</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-2"><strong>Identity Theft</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-3"><strong>Online Shopping</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-4"><strong>Phone Frauds</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-5"><strong>Messaging scams</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-6"><strong>Online dating scams</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-7"><strong>Job offer scam</strong></a>


                                    <a class="nav-link smoothscroll" href="#item-8"><strong>Repair scams</strong></a>
                                </nav>
                            </nav>
                        </div>

                        <div class="col-lg-8 col-12">
                            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                                <div class="scrollspy-example-item" id="item-1">
                                    <h5>Phishing</h5>
                                    
                                    <p>
                                    Phishing is an online scam where fake emails or websites trick people into giving away personal information, leading to identity theft and fraud. Stay vigilant to avoid falling victim to these scams.</p>

                                    <blockquote class="blockquote">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/BnmneAjVrM4?si=0jxlt27Xhut4Rdfi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </blockquote>
                                
                                    
                                    <div class="buttonSection">

                                        <button type="button" class="button" onclick="openQuizModal1()">Take Quiz</button>

                                        <a href="#item-2">
                                            <button type="button" class="button">Next</button>
                                        </a>
                                    </div>
                                    <div id="quizModal1" class="modal">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeQuizModal1()">&times;</span>
                                            <!-- You can load your quiz content here -->
                                            <iframe src="../quiz/phishingquiz.php" width="100%" height="500px"></iframe>
                                        </div>
                                    </div>
                                
                                </div>

                                <div class="scrollspy-example-item" id="item-2">
                                    <h5>Identity Theft</h5>

                                    <p>
Identity theft is when someone steals your personal information to pretend they're you, making purchases or committing crimes in your name, causing harm and financial loss.</p>

                                    <blockquote class="blockquote">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kDFeSUUwRnA?si=2wWBEx-PIh_gwq0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </blockquote>
                                    
                                    <div class="buttonSection">
                                        <a href="#item-1">
                                            <button type="button" class="button">Previous</button>
                                        </a>

                                        <button type="button" class="button" onclick="openQuizModal2()">Take Quiz</button>

                                        <a href="#item-3">
                                            <button type="button" class="button">Next</button>
                                        </a>
                                    </div>
                                    <div id="quizModal2" class="modal">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeQuizModal2()">&times;</span>
                                            <!-- You can load your quiz content here -->
                                            <iframe src="../quiz/identitytheftquiz.php" width="100%" height="500px"></iframe>
                                        </div>
                                    </div>
                                </div>

                                <div class="scrollspy-example-item" id="item-3">
                                    <h5>Online Shopping</h5>

                                    <p>
                                    
Scammers create fake online stores with stolen logos and designs, offering low-priced items. They may deliver occasionally but often disappear, cautioning shoppers to be vigilant.</p>

                                    <blockquote class="blockquote">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/qRWpvcjpQNw?si=cYpVkUFHPuCzpP7N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </blockquote>
                                    
                                    <div class="buttonSection">
                                        <a href="#item-2">
                                            <button type="button" class="button">Previous</button>
                                        </a>

                                        <button type="button" class="button" onclick="openQuizModal3()">Take Quiz</button>

                                        <a href="#item-4">
                                            <button type="button" class="button">Next</button>
                                        </a>
                                    </div>
                                    <div id="quizModal3" class="modal">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeQuizModal3()">&times;</span>
                                            <!-- You can load your quiz content here -->
                                            <iframe src="../quiz/onlineshoppingquiz.php" width="100%" height="500px"></iframe>
                                        </div>
                                    </div>
                                
                                </div>

                                <div class="scrollspy-example-item" id="item-4">
                                    <h5>Phone Frauds</h5>

                                    <p>
                                    
                                        A scam call tricks you into giving money or personal details by pretending to be from a trusted organization. Stay cautious and avoid sharing sensitive information over the phone.</p>

                                    <blockquote class="blockquote">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OgXHUnRAwiQ?si=dYMRZXdrJQGEv5KM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </blockquote>
                                    
                                    <div class="buttonSection">
                                        <a href="#item-3">
                                            <button type="button" class="button">Previous</button>
                                        </a>

                                        <button type="button" class="button" onclick="openQuizModal4()">Take Quiz</button>

                                        <a href="#item-5">
                                            <button type="button" class="button">Next</button>
                                        </a>
                                    </div>
                                    <div id="quizModal4" class="modal">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeQuizModal4()">&times;</span>
                                            <!-- You can load your quiz content here -->
                                            <iframe src="../quiz/phonefraudquiz.php" width="100%" height="500px"></iframe>
                                        </div>
                                    </div>
                                   
                                
                                </div>


                                <div class="scrollspy-example-item" id="item-5">
                                    <h5>
                                        Messaging scams 
                                        
                                    </h5>

                                    <p>
                                    Online messaging scams trick people via texts or social media, urging them to reveal personal info or send money. Stay vigilant to avoid falling prey to these deceptive schemes.</p>

                                    <blockquote class="blockquote">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/lLlCc98R0_c?si=ZwZYKRfkU8OPq-6t" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </blockquote>
                                    
                                    <div class="buttonSection">
                                        <a href="#item-4">
                                            <button type="button" class="button">Previous</button>
                                        </a>

                                        <button type="button" class="button" onclick="openQuizModal5()">Take Quiz</button>

                                        <a href="#item-6">
                                            <button type="button" class="button">Next</button>
                                        </a>
                                    </div>
                                    <div id="quizModal5" class="modal">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeQuizModal5()">&times;</span>
                                            <!-- You can load your quiz content here -->
                                            <iframe src="../quiz/messagingscamquiz.php" width="100%" height="500px"></iframe>
                                        </div>
                                    </div>
                                
                                </div>
                                
                                <div class="scrollspy-example-item" id="item-6">
                                    <h5>Online dating scams </h5>

                                    <p>
                                    
                                    Online dating scams deceive people into relationships to steal money or personal info. Verify identities to stay safe.</p>

                                    <blockquote class="blockquote">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dV_IGkk6Fiw?si=lbP1YxN_TIU-Bctc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </blockquote>
                                    
                                    <div class="buttonSection">
                                        <a href="#item-5">
                                            <button type="button" class="button">Previous</button>
                                        </a>

                                        <button type="button" class="button" onclick="openQuizModal6()">Take Quiz</button>

                                        <a href="#item-7">
                                            <button type="button" class="button">Next</button>
                                        </a>
                                    </div>
                                    <div id="quizModal6" class="modal">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeQuizModal6()">&times;</span>
                                            <!-- You can load your quiz content here -->
                                            <iframe src="../quiz/onlinedating.php" width="100%" height="500px"></iframe>
                                        </div>
                                    </div>
                                
                                </div>

                                <div class="scrollspy-example-item" id="item-7">
                                    <h5>Job offer scams</h5>

                                    <p>
                                    
                                    
An online job offer scam tricks job seekers with fake opportunities, aiming to steal personal information or money. Stay cautious and verify job offers to avoid falling victim.</p>

                                    <blockquote class="blockquote">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xRKZBIHZoME?si=baXiu9Hf2TS18K4x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </blockquote>
                                    
                                    <div class="buttonSection">
                                        <a href="#item-6">
                                            <button type="button" class="button">Previous</button>
                                        </a>

                                        <button type="button" class="button" onclick="openQuizModal7()">Take Quiz</button>

                                        <a href="#item-8">
                                            <button type="button" class="button">Next</button>
                                        </a>
                                    </div>
                                    <div id="quizModal7" class="modal">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeQuizModal7()">&times;</span>
                                            <!-- You can load your quiz content here -->
                                            <iframe src="../quiz/jobOfferQuiz.php" width="100%" height="500px"></iframe>
                                        </div>
                                    </div>
                                
                                </div>

                                <div class="scrollspy-example-item" id="item-8">
                                    <h5>Repair scams</h5>

                                    <p>
                                  
                                    Online repair scams involve fake technicians claiming your device has issues, charging for unnecessary repairs, and potentially stealing personal information. Beware of pop-ups and verify service providers to avoid falling victim to these deceptive schemes</p>

                                    <blockquote class="blockquote">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/g1ZApugPgq0?si=GhXpSxglFpf39Gh9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </blockquote>
                                    
                                    <div class="buttonSection">
                                        <a href="#item-7">
                                            <button type="button" class="button">Previous</button>
                                        </a>

                                        <button type="button" class="button" onclick="openQuizModal8()">Take Quiz</button>

                                    </div>
                                    <div id="quizModal8" class="modal">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeQuizModal8()">&times;</span>
                                            <!-- You can load your quiz content here -->
                                            <iframe src="../quiz/repairscamquiz.php" width="100%" height="500px"></iframe>
                                        </div>
                                    </div>
                                   
                                
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
            <section class="reviews-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mb-5">
                            <h6>Confessions</h6>

                            <h2>What people saying...</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid avatar-image" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">Sandy</span>

                                        <strong class="d-block text-white">Artist</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    

                                    <p class="mb-0">I fell for an online lottery scam, losing thousands, believing I had won a prize that never existed.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 my-5 my-lg-0">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">John</span>

                                        <strong class="d-block text-white">Producer</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    

                                    <p class="mb-0">I shared my credit card details in an 'urgent' email, only realizing it was a phishing scam after unauthorized transactions drained my account.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="images/avatar/pretty-blonde-woman.jpg" class="img-fluid avatar-image" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">Candy</span>

                                        <strong class="d-block text-white">VP, Design</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    >

                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form ebook-download-form bg-white shadow" action="#" method="post" role="form">
                                <div class="ebook-download-form-body">
                                    <img src="fotterimage.png" alt="">
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <h6 class="mt-5">Say hi and talk to us</h6>

                            <h2 class="mb-4">Contact</h2>

                            <p class="mb-3">
                                <i class="bi-geo-alt me-2"></i>
                                London, United Kingdom
                            </p>

                            <p class="mb-2">
                                <a href="tel: 010-020-0340" class="contact-link">
                                    010-020-0340
                                </a>
                            </p>

                            <p>
                                <a href="mailto:info@company.com" class="contact-link">
                                    info@company.com
                                </a>
                            </p>

                            <h6 class="site-footer-title mt-5 mb-3">Social</h6>

                            <ul class="social-icon mb-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>
                                
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>

                        


                            <p class="copyright-text">Copyright © 2048 ebook company
                            <br><br><a rel="nofollow" href="https://templatemo.com" target="_blank">designed by templatemo</a></p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
        <script src="index.js"></script>                               
    </body>
</html>