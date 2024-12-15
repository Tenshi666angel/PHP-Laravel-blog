<style>
    .nav {
        display: flex;
        height: 60px;
        align-items: center;
        background-color: black;
    }

    .nav a {
        text-decoration: none;
        margin-left: 10px;
        color: white;
    }
</style>

<nav class="nav">
    <a href="">Home</a>
    <a href="">Search</a>
    <a href="">About</a>

    @unless(auth()->check())
    <a href="{{ route('showlogin') }}">Login</a>
    @endunless

    @if(auth()->check())
    <a href="" id="logout-link">Logout</a>
    @endif
</nav>

<form method="POST" action={{ route('logout') }} id="logout-form" style="display: none;">
@csrf
</form>

<script>
    document.getElementById('logout-link').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('logout-form').submit();
    });
</script>
