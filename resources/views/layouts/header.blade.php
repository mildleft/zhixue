<ul class="layui-nav">
  <li class="layui-nav-item">
    <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>
  </li>
  @guest
  <li class="layui-nav-item">
    <a href="{{ route('login') }}">{{ __('Login') }}</a>
  </li>
  <li class="layui-nav-item">
    <a href="{{ route('register') }}">{{ __('Register') }}</a>
  </li>
  @else
  <li class="layui-nav-item">
    <a href="">{{ Auth::user()->name }}</a>
    <dl class="layui-nav-child">
      <dd><a href="{{ route('logout') }}"></a></dd>
      <form action="{{ route('logout') }}" method="post" class="layui-none">
        @csrf
      </form>
    </dl>
  </li>
  @endguest
</ul>
