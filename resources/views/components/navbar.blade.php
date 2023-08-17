<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/">
            <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
    </div>
    <div class="mt-8 md:mt-0 items-center flex">
      @auth
        <span class="text-xs font-bold uppercase">Welcome , {{ auth()->user()->name }}</span>
        <form action="/logout" method="post" class="text-xs font-semibold text-blue-500 ml-6">
          @csrf
          <button type="submit">Logout</button>
        </form>
      @else
        <a href="register" class="text-xs font-bold uppercase">Register</a>
        <a href="login" class="text-xs font-bold uppercase ml-4 text-blue-500">Login</a>
      @endif

        <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Subscribe for Updates
        </a>
    </div>
</nav>