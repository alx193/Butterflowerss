
        <nav clas="top-sticky">
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="fa fa-bars"></i>
                    </label>
                    <a class="logo" href="/" title="Floraria ButterFlowerss">
                        <img src="{{ url('assets/images/rotund2.png') }}" class="img-responsive">
                    </a>

                    <ul>
                    <li><a class="active" href="{{ url('/collections') }}">Categorii</a></li>
                    <li><a class="active" href="{{ url('/frontend/infopages/story') }}">Povestea Noastra</a></li>
                    <li><a class="active" href="{{ url('/frontend/infopages/contact') }}">Contact</a></li>

                    {{-- Login --}}
                    {{-- <li>
                            @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                    @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-user"></i> {{ Auth::user()->name }} 
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                                        <li>
                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i>{{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                        </ul>
                                    </li>
                            @endguest
                    </li> --}}
                    {{-- Login --}}


                    {{-- <li><a class="active" href="https://wa.me/40721332458">Comenzi : 0721 332 458</a></li> 
                    <li><a href="https://wa.me/40721332458"class="fa fa-phone-squarea">Comenzi : 0721 332 458</a></li><br>
                    <li><a href="https://www.facebook.com/profile.php?id=100064567820874"><i class="fa fa-facebook"></i></a></li><br>
                    <li><a href="https://instagram.com/florariabutterflowerss?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a></li><br> --}}
                    
                    
                    </ul>
        </nav>