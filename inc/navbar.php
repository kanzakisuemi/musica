<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/musicproject/index.php">Music Rec</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="/musicproject/index.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/musicproject/pages/form.php">Form</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/musicproject/pages/printrecomend.php">Show</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/musicproject/pages/editpage.php">Edit</a>
        </li>
      </ul>
      <form class="d-flex" action="/musicproject/searchbar.php" role="search" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" required>
        <button class="btn btn-outline-info" type="submit" name="submit_search">Search</button>
      </form>
    </div>
  </div>
</nav>
