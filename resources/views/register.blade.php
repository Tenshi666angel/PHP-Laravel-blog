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
  <input type="text" name="name" placeholder="name" />
  <input type="password" name="password" placeholder="password" />
  <button type="submit" class="regbtn">Enter</button>
</form>

