      <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Branding Image -->
                  @guest                      
                  <a class="navbar-brand" href="{{ url('/') }}">
                      {{ config('app.name', 'Laravel Apps') }}
                  </a>
                  @else
                  <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    {{ config('app.name', 'Laravel Apps') }}
                </a>                      
                  @endguest
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                      &nbsp;
                  </ul>
                  <ul class="nav navbar-nav">
                    @guest
                      <li><a href="/">Home</a></li>
                      <li><a href="/about">About Us</a></li>
                      <li><a href="/services">Our Services</a></li>
                      <li><a href="/posts">Blog</a></li>
                      <li><a href="https://github.com/arieffathony">My Github</a></li>
                    @else
                      <li><a href="/dashboard">Dashboard</a></li>               
                      <li><a href="/about">About Us</a></li>
                      <li><a href="/services">Our Services</a></li>
                      <li><a href="/posts">Blog</a></li>
                      <li><a href="https://github.com/arieffathony">My Github</a></li>
                    @endguest
                    </ul>
                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                      @guest
                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu">
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-off"></span>
                                            Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>