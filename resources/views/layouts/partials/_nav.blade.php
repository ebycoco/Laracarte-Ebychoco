

<nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home_path')}}">Laracarte</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{route('home_path')}}">Home</a></li>
              <li><a href="{{route('about_path')}}">About</a></li>
              <li><a href="#">Artisans</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="https://laravel.com">Laravel.com</a></li>
                  <li><a href="https://laravel.io">Laravel.io</a></a></li>
                  <li><a href="https://Laracast.com">Laracast</a></li>
                  <li><a href="https://Larajobs.com">Larajobs</a></li>
                  <li><a href="https://laravel-news.com">Laravel News</a></li>
                  <li><a href="https://Larachat.com">Larachat</a></li>
                </ul>
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav  navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registrer</a>
                </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
