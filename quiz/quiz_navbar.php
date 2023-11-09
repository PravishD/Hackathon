<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Quiz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">QUIZ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a <?php if ($active == "phishing") {
                  echo "class='nav-link active'";
                  echo 'aria-current="page"';
                } else {
                  echo "class='nav-link'";
                } ?> href="/hackathon/quiz/phishingquiz.php">Phishing scams</a>
          </li>
          <li class="nav-item">
            <a <?php if ($active == "identity theft") {
                  echo "class='nav-link active'";
                  echo 'aria-current="page"';
                } else {
                  echo "class='nav-link'";
                } ?> href="/hackathon/quiz/identitytheftquiz.php">Identity theft</a>
          </li>
          <li class="nav-item">
            <a <?php if ($active == "online shopping") {
                  echo "class='nav-link active'";
                  echo 'aria-current="page"';
                } else {
                  echo "class='nav-link'";
                } ?> href="/hackathon/quiz/onlineshoppingquiz.php">Online shopping scams</a>
          </li>
          <li class="nav-item">
            <a <?php if ($active == "phone fraud") {
                  echo "class='nav-link active'";
                  echo 'aria-current="page"';
                } else {
                  echo "class='nav-link'";
                } ?> href="/hackathon/quiz/phonefraudquiz.php">Phone frauds</a>
          </li>
          <li class="nav-item">
            <a <?php if ($active == "popup ads") {
                  echo "class='nav-link active'";
                  echo 'aria-current="page"';
                } else {
                  echo "class='nav-link'";
                } ?> href="/hackathon/quiz/popupadsquiz.php">Popup ads scams</a>
          </li>
          <li class="nav-item">
            <a <?php if ($active == "online dating") {
                  echo "class='nav-link active'";
                  echo 'aria-current="page"';
                } else {
                  echo "class='nav-link'";
                } ?> href="/hackathon/quiz/onlinedating.php">Online dating scams</a>
          </li>
          <li class="nav-item">
            <a <?php if ($active == "repair scams") {
                  echo "class='nav-link active'";
                  echo 'aria-current="page"';
                } else {
                  echo "class='nav-link'";
                } ?> href="/hackathon/quiz/repairscamquiz.php">Repair scams</a>
          </li>
          <li class="nav-item">
            <a <?php if ($active == "messaging scams") {
                  echo "class='nav-link active'";
                  echo 'aria-current="page"';
                } else {
                  echo "class='nav-link'";
                } ?> href="/hackathon/quiz/messagingscamquiz.php">Messaging scams</a>
          </li>
          <li class="nav-item">
            <a <?php if ($active == "fake websites") {
                  echo "class='nav-link active'";
                  echo 'aria-current="page"';
                } else {
                  echo "class='nav-link'";
                } ?> href="/hackathon/quiz/fakewebsitequiz.php">Fake websites</a>
          </li>
          <li class="nav-item">
            <a <?php if ($active == "job offer") {
                  echo "class='nav-link active'";
                  echo 'aria-current="page"';
                } else {
                  echo "class='nav-link'";
                } ?> href="/hackathon/quiz/jobOfferQuiz.php">Job offer scams</a>
          </li>
        </ul>

      </div>
    </div>
  </div>
</nav>