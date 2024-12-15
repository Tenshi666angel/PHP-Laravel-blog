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
</style>

<form method="POST" action={{ route('dologin') }} class="logform">
  @csrf
  <input type="text" name="email" placeholder="email" />
  <input type="password" name="password" placeholder="password" />
  <button type="submit" class="logbtn">Enter</button>
  {{ $msg }}
</form>
