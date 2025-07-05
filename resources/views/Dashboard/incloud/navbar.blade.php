   <nav class="navbar navbar-expand-md navbar-light sticky-top bg-light flex-md-nowrap p-0 ">
       <p class="navbar-brand col-md-3 col-lg-2 p-2 my-0 mx-auto text-white text-center" href="#">E-commers</p>

       <div class="w-100"></div>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarlteMenu"
           aria-controls="sidebarlteMenu" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>


       <ul class="navbar-nav px-3">
           <li class="nav-item dropdown">
               <a class="nav-link px-1 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                   aria-haspopup="true" aria-expanded="false">{{ __('trans.Lang') }} <i class="fa ms-1 fa-language"
                       aria-hidden="true">
                   </i> </a>
               <div class="dropdown-menu">
                   @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                       <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                           {{ $properties['native'] }}
                   @endforeach

                   </a>
               </div>

           </li>

           @guest
               <ul class="navbar-nav ms-auto">
                   <!-- Authentication Links -->
                   @if (Route::has('login'))
                       <li class="nav-item">
                           <a class="nav-link"
                               href="{{ LaravelLocalization::localizeUrl(route('login')) }}">{{ __('Login') }}</a>
                       </li>
                   @endif

                   @if (Route::has('register'))
                       <li class="nav-item">
                           <a class="nav-link"
                               href="{{ LaravelLocalization::localizeUrl(route('register')) }}">{{ __('Register') }}</a>
                       </li>
                   @endif
               </ul>
           @else
               <li class="nav-item dropdown">
                   <a class="nav-link px-1 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} <i class="fa fa-user   "
                           aria-hidden="true"></i>
                   </a>
                   <div class="dropdown-menu  ">
                       <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                       </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                       </form>
                   </div>
               </li>

           @endguest
       </ul>


   </nav>
   <nav id="sidebarlteMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebarlte collapse">
       <div class="position-sticky pt-3">
           <ul style="    align-content: space-around;" class="nav flex-column px-0">
               <li class="nav-item">
                   <a class="nav-link active" aria-current="page" href="#">
                       <span data-feather="home"></span>
                       <i class="fa fa-dashboard" aria-hidden="true"></i>
                       {{ __('trans.Home') }}
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">
                       <span data-feather="file"></span>
                       <i class="fa fa-bar-chart" aria-hidden="true"></i>
                       {{ __('trans.Category') }}

                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{route('Section.index')}}">
                       <span data-feather="shopping-cart"></span>
                       القسم
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">
                       <span data-feather="users"></span>
                       Customers
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">
                       <span data-feather="bar-chart-2"></span>
                       Reports
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">
                       <span data-feather="layers"></span>
                       Integrations
                   </a>
               </li>
           </ul>


       </div>
   </nav>
