
<div class="main-navbar shadow-sm" >
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                  
                    <div class="container" style="margin: 0; float: none; text-align:center">
                        <a class="logo" href="/" title="Floraria ButterFlowerss">
                            <img src="{{ url('assets/images/rotund1.png') }}" class="img-responsive">
                        </a>
                    </div>
                    <div class="container">
                    <div class="row">
                    <div class="col-md-9">
                        <a href="https://wa.me/40721332458"><i class="fa fa-phone-squarea">Comenzi:0721 332 458 </i></a>
                    </div>
                    <div class="col-md-3">
                        <div class="social-media">
                            <a href="https://www.facebook.com/profile.php?id=100064567820874"><i class="fa fa-facebook"></i></a>
                            <a href="https://instagram.com/florariabutterflowerss?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
                            <a href="https://www.google.ro/search?q=floraria%20butterflowers&sxsrf=ALiCzsZXu0H6m4VdYkSzltxj9Ig7kD2MAg:1664813473957&source=hp&ei=nAk7Y4ixC8eA8gLbrLbQCA&iflsig=AJiK0e8AAAAAYzsXrILvU3B3ACghnyxqp950mA3pRzMK&oq=floraria+butetrflowers&gs_lp=Egdnd3Mtd2l6uAED-AEBKgIIADIHECMYsAIYJzIHECMYsAIYJzIHECMYsAIYJ8ICBBAjGCfCAgsQABiABBixAxiDAcICCxAuGIAEGLEDGIMBwgIEEAAYQ8ICBRAAGIAEwgIREC4YgAQYsQMYgwEYxwEY0QPCAhQQLhiABBixAxiDARjHARivARjUAsICChAuGMcBGNEDGEPCAggQLhixAxiDAcICBxAuGNQCGEPCAgoQLhixAxiDARhDwgIOEC4YgAQYsQMYgwEY1ALCAggQABiABBjLAcICChAAGLEDGIMBGEPCAgsQABiABBjJAxjLAcICDhAuGIAEGMcBGK8BGMsBwgILEC4YgAQYxwEYrwHCAg0QLhiABBjHARivARgKwgIGEAAYHhgWwgICECbCAgUQIRigAcICDRAuGIAEGMcBGK8BGA3CAg8QLhiABBjHARivARgNGArCAgcQABiABBgNwgIGEAAYHhgNwgIIEAAYHhgIGA1IzRxQAFi1FXAAeADIAQCQAQCYAaIBoAHvFKoBBDAuMjI&sclient=gws-wiz&tbs=lf:1,lf_ui:10&tbm=lcl&rflfq=1&num=10&rldimm=3122364362165829404&lqi=ChZmbG9yYXJpYSBidXR0ZXJmbG93ZXJzWhgiFmZsb3JhcmlhIGJ1dHRlcmZsb3dlcnOSAQdmbG9yaXN0qgEQEAEqDCIIZmxvcmFyaWEoAA&phdesc=v_PapBBeVBU&ved=2ahUKEwiJ5e29ucT6AhVewAIHHaefBhkQvS56BAgHEAE&sa=X&rlst=f#rlfi=hd:;si:3122364362165829404,l,ChZmbG9yYXJpYSBidXR0ZXJmbG93ZXJzWhgiFmZsb3JhcmlhIGJ1dHRlcmZsb3dlcnOSAQdmbG9yaXN0qgEQEAEqDCIIZmxvcmFyaWEoAA,y,v_PapBBeVBU;mv:[[44.4889723,26.101108699999997],[44.415664299999996,26.0517798]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:10"><i class="fa fa-map-marker"></i></a>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="nav-link">
                        {{-- <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-shopping-cart"></i> Cart (0)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-heart"></i> Wishlist (0)
                                </a>
                            </li>
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
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="nav-link" href="{{ url('/') }}">
                    Floraria Butterflowerss
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Floraria Butterflowerss</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/collections') }}">Categorii</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/frontend/info.pages/poveste') }}">Povestea Noastra</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{ url('/frontend/info.pages/contact') }}">Contact</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Featured Products</a> --}}
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>