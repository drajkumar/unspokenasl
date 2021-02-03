<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Unspoken Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('/admin/css/signin.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="container">
    <div class="row">
    <div class="col-md-4 offset-md-4">
  
    
    <form class="form-signin" method="POST" action="{{ route('login') }}">
      @csrf
  
        <img class="mb-4" src="{{asset('frontend/images/logo_color.png') }}" alt="" width="250" height="70">
        <h2 class="h3 mb-3 font-weight-normal personalSignin">Unspoken Admin Singin</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror mb-3 rounded-0" name="email" value="{{ old('email') }}"  placeholder="Email address" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                 
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror mb-4 rounded-0" name="password" placeholder="Password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}> Remember me
            </label>
        </div>
        <div class="forgetPwd">
            <label>
                   
                        
                    
        </div>
        <button class="btn btn-lg btn-success btn-block signTxt rounded-0" type="submit">Sign in</button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</form>
</div>
   </div>
</div>
</body>
</html>
