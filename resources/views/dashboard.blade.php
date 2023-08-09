<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Application For Interview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <body>

    <nav class="navbar navbar-expand-lg navbar-light  border-bottom">
        <div class="container">
          <a class="navbar-brand" href=""><b>Web Application For Interview</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link">{{ Auth::user()->name }}</a>
              </li>
              <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="nav-link text-danger text-decoration-none" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Sign Out') }}
                            </a>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<!-- content ------------------------------>

      <div class="container">
        <h3 class="text-center pt-5">Personal Information</h3>
        <div class="detail pt-4">
            <p class="text-center mt-3">
                <b>Name : </b>{{ Auth::user()->name }}
            </p>
            <p class="text-center">
                <b>Email : </b>{{ Auth::user()->email }}<br>
            </p>
            <p class="text-center">
                <b>Created At : </b>{{ Auth::user()->created_at }}<br>
            </p>
            <p class="text-center">
                <b>Updated At : </b>{{ Auth::user()->updated_at }}<br>
            </p>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
