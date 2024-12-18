<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
  <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">
  <title>Kwarta Klik | Login</title>
</head>
<body>
  <div class="landing">
    <div class="landing-decoration"></div>
    <div class="landing-info">
      <div class="logo">
        <svg class="icon-logo-vikinger">
          <use xlink:href="#svg-logo-vikinger"></use>
        </svg>
      </div>

      <h2 class="landing-info-pretitle">Welcome to</h2>
      <h1 class="landing-info-title">Kwarta Klik</h1>
      <p class="landing-info-text">Turn your Kliks into Kwarte, anytime, anywhere!</p>
      <div class="tab-switch">
        <p class="tab-switch-button login-register-form-trigger">Login</p>
        <p class="tab-switch-button login-register-form-trigger">Register</p>
      </div>
    </div>
    <div class="landing-form">
      <div class="form-box login-register-form-element">
        <img class="form-box-decoration overflowing" src="{{ asset('assets/img/landing/rocket.png') }}" alt="rocket">
        <h2 class="form-box-title">Account Login</h2>
        <form class="form" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-item">
                    <div class="form-input">
                        <label for="email">Username or Email</label>
                        <input type="text" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-item">
                    <div class="form-input">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                        @error('password')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row space-between">
                <div class="form-item">
                    <div class="checkbox-wrap">
                        <input type="checkbox" id="login-remember" name="login_remember" checked>
                        <label for="login-remember">Remember Me</label>
                    </div>
                </div>
                <div class="form-item">
                    <a class="form-link" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            </div>
            <div class="form-row">
                <div class="form-item">
                    <button class="button medium secondary">Login to your Account!</button>
                </div>
            </div>
        </form>
        
        <p class="lined-text">Login with your Social Account</p>
        <div class="social-links">
          <a class="social-link facebook" href="#">
            <svg class="icon-facebook">
              <use xlink:href="#svg-facebook"></use>
            </svg>
          </a>
          <a class="social-link gmail" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
              <path fill="#EA4335" d="M21.6 5.9L12 11.7 2.4 5.9 12 0l9.6 5.9z"></path>
              <path fill="#34A853" d="M0 18.1V5.9L12 12l12-6.1v12.2L12 24 0 18.1z"></path>
              <path fill="#4285F4" d="M12 12v12l9.6-5.9V5.9L12 12z"></path>
              <path fill="#FBBC04" d="M0 5.9v12.2L12 24V12L0 5.9z"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="form-box login-register-form-element">
        <img class="form-box-decoration" src="{{ asset('assets/img/landing/rocket.png') }}" alt="rocket">
        <h2 class="form-box-title">Create your Account!</h2>
        <form class="form" action="{{ route('register') }}" method="POST">
            @csrf
              <div class="form-row">
                <div class="form-item">
                  <div class="form-input">
                    <label for="email">Referral Code <span>(optional)</span></label>
                    <input type="text" id="referral_code" name="referral_code" value="{{ old('referral_code') }}">
                    @error('email')
                    <div class="error">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="form-item">
                  <div class="form-input">
                    <label for="email">Your Email</label>
                    <input type="text" id="register-email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="error">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
            
              <div class="form-row">
                <div class="form-item">
                  <div class="form-input">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}">
                    @error('username')
                    <div class="error">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              
              <div class="form-row">
                <div class="form-item">
                  <div class="form-input">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    @error('password')
                    <div class="error">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
            
              <div class="form-row">
                <div class="form-item">
                  <div class="form-input">
                    <label for="password-repeat">Repeat Password</label>
                    <input type="password" id="password-repeat" name="password_confirmation">
                    @error('password_confirmation')
                    <div class="error">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
          <div class="form-row">
            <div class="form-item">
              <div class="checkbox-wrap">
                <input type="checkbox" id="register-newsletter" name="register_newsletter" checked>
                <div class="checkbox-box">
                  <svg class="icon-cross">
                    <use xlink:href="#svg-cross"></use>
                  </svg>
                </div>
                <label for="register-newsletter">Send me news and updates via email</label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <button class="button medium primary">Register Now!</button>
            </div>
          </div>
        </form>
        <p class="form-text">You'll receive a confirmation email in your inbox with a link to activate your account. If you have any problems, <a href="#">contact us</a>!</p>
      </div>
    </div>
  </div>
<script src="{{ asset('assets/js/utils/app.js') }}"></script>
<script src="{{ asset('assets/js/vendor/xm_plugins.min.js') }}"></script>
<script src="{{ asset('assets/js/form/form.utils.js') }}"></script>
<script src="{{ asset('assets/js/landing/landing.tabs.js') }}"></script>
<script src="{{ asset('assets/js/utils/svg-loader.js') }}"></script>
</body>
</html>
