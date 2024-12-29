<x-nav/>

<style>
  .regform input {
    padding: 15px 15px;
    border: 1px solid teal;
    border-radius: 5px;
  }

  .regform {
    display: flex;
    justify-content: center;
    flex-flow: column;
    width: 40vw;
    margin: 0px auto;
  }

  .regbtn {
    padding: 5px 15px;
    background: transparent;
    border: 1px solid teal;
  }
</style>

<form method="POST" action={{ route('register') }} class="regform">
  @csrf
  <input type="text" name="email" placeholder="email" />
  @error('email')
  {{ $message }}
  @enderror
  <input type="text" name="name" placeholder="name" />
  @error('name')
  {{ $message }}
  @enderror
  <input type="password" name="password" placeholder="password" />
  @error('password')
  {{ $message }}
  @enderror

  <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
  <script src='https://www.google.com/recaptcha/api.js'></script>

  @error('g-recaptha-response')
  {{ $message }}
  @enderror

  <button type="submit" class="regbtn">Enter</button>
</form>


