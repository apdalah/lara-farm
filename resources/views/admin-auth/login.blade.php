<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <form method="POST" action="{{ route('adminLogin') }}">
        @csrf

        <h2>Admin Login</h2>
        
        <div>
            <input type="text" name="email" class="text-field @error('email') is-invalid @enderror" placeholder="E-mail" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div>
            <input class="text-field @error('password') is-invalid @enderror" placeholder="Password" id="password" type="password"  name="password" required autocomplete="current-password" />
            
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


     
        <div style="text-align: left; margin: 7px 16%;">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>

     
            <div>
                <button type="submit" class="button">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

    </form>

</body>

<style>

body {
    font-family: Elephant;
}

h2 {
    color: #336895;
}


/* LOGIN & REGISTER FORM */

form {
    width: 280px;
    height: 280px;
    margin: 200px auto;
    background: white;
    border-radius: 3px;
    box-shadow: 0 0 10px rgba(0,0,0, .4); 
    text-align: center;
    padding-top: 1px;
}

form.register{                                                                              /* Register form height */
    height: 420px;
}

form .text-field {                                                                          /* Input fields; Username, Password etc. */
    border: 1px solid #a6a6a6;
    width: 230px;
    height: 40px;
    border-radius: 3px;
    margin-top: 10px;
    padding-left: 10px;
    color: #6c6c6c;
    background: #fcfcfc;
    outline: none;
}

form .text-field:focus {
    box-shadow: inset 0 0 2px rgba(0,0,0, .3);
    color: #a6a6a6;
    background: white;
}

form .button {                                                                              /* Submit button */
    border-radius: 3px;
    border: 1px solid #336895;
    box-shadow: inset 0 1px 0 #8dc2f0;
    width: 242px;
    height: 40px;
    margin-top: 20px;
    
    background: linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
    background: -o-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
    background: -moz-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
    background: -webkit-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
    background: -ms-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
    
    cursor: pointer;
    color: white;
    font-weight: bold;
    text-shadow: 0 -1px 0 #336895;
    
    font-size: 13px;
}

form .button:hover {
    background: linear-gradient(bottom, #5c96c9 0%, #6bafea 100%);
    background: -o-linear-gradient(bottom, #5c96c9 0%, #6bafea 100%);
    background: -moz-linear-gradient(bottom, #5c96c9 0%, #6bafea 100%);
    background: -webkit-linear-gradient(bottom, #5c96c9 0%, #6bafea 100%);
    background: -ms-linear-gradient(bottom, #5c96c9 0%, #6bafea 100%);
}

form .button:active {
    background: linear-gradient(bottom, #5BA7E9 0%, #4889C2 100%);
    background: -o-linear-gradient(bottom, #5BA7E9 0%, #4889C2 100%);
    background: -moz-linear-gradient(bottom, #5BA7E9 0%, #4889C2 100%);
    background: -webkit-linear-gradient(bottom, #5BA7E9 0%, #4889C2 100%);
    background: -ms-linear-gradient(bottom, #5BA7E9 0%, #4889C2 100%);
    
    box-shadow: inset 0 0 2px rgba(0,0,0, .3), 0 1px 0 white;
}
</style>