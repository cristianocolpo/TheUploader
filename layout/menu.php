	<div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Dumpshare</a>
          <div class="nav-collapse collapse navbar-responsive-collapse">
            <ul class="nav">
              <li class="active"><a href="dumpshare.php">Home</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Widget</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Affiliati</a></li>
              <li><a href="#">TOS</a></li>
              <li><a href="#">Contatti</a></li>
            </ul>
            <ul class="nav pull-right">
	          <form class="navbar-search pull-left" action="">
	              <input type="text" class="search-query span2" placeholder="Search">
	          </form>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?if($user["name"]){echo $user["name"];}else{echo 'SirSeleucio';}?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Files</a></li>
                  <li><a href="#">Immagini</a></li>
                  <li><a href="#">Impostazioni</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Esci</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.nav-collapse -->
        </div>
      </div><!-- /navbar-inner -->
    </div>