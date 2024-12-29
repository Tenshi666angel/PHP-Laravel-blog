<x-nav/>

<style>
  .logform input {
    padding: 15px 15px;
    border: 1px solid teal;
    border-radius: 5px;
  }

  .logform {                                                                                                                   display: flex;
    justify-content: center;
    flex-flow: column;
    width: 40vw;
    margin: 0px auto;
  }

  .logbtn {
    padding: 5px 15px;
    background: transparent;
    border: 1px solid teal;
  }

  .logform input.is-invalid {
    border-color: red !important;
  }
</style>

<form method="POST" action={{ route('dologin') }} class="logform">
  @csrf
  <input class="@error('email') is-invalid @enderror" type="text" name="email" placeholder="email" />
  @error('email')
  {{ $message }}
  @enderror
  <input class="@error('password') is-invalid @enderror" type="password" name="password" placeholder="password" />
  @error('password')
  {{ $message }}
  @enderror
  <button type="submit" class="logbtn">Enter</button>
  {{ $msg }}
</form>
