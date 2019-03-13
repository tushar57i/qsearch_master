<!DOCTYPE html>
<html lang="en-us">
<body onload="ld()">
  <script>
    function ld(){
      document.search_bar.search.focus();
    }
  </script>

  <header class="text-dark text-right" style="margin-bottom: 100px; padding: 5px;">
    <div class="container" style="font-weight: bold;">
    <ul>
      <a href="login.php"><i class="fas fa-user"></i> Sign In</a> &nbsp;
      <a href="addweb.php"><i class="fas fa-plus"></i> Add Web</a> &nbsp;

      <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="NAv1">
          &#9776;
      </button>-->
    </ul>
    </div>
  </header>
    <div class="container">
    <h1 class="text-center rainbow display-3"><img src="img/q.png" alt="Q" height="80px"><span style="font-weight: bold;">Search</span></h1><br>
    </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-sm-12" style="padding: 0px 30px;">
              <form class="navbar-form" role="search" action="results.php" method="post" name="search_bar">
                <div class="input-group mb-3">
                <input class="form-control" placeholder="Search Anything" name="search" id="search" type="text" aria-describedby="basic-addon2">
                <div class="input-group-append">
                <input class="btn btn-outline-success" type="submit" name="submit" value="Search">
              </div>
              </div>
              </form>
        </div>
        <div class="col-md-2"></div>
      </div>
</body>
</html>


