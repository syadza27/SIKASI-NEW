</aside>
<main class="main-content">
    <div class="position-relative">
        <!--Nav Start-->

        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
            <div class="container-fluid navbar-inner">
                <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                    <i class="icon">
                        <svg width="20px" height="20px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                        </svg>
                    </i>
                </div>
                <div class="input-group search-input">
                    <span class="input-group-text" id="search-input">
                        <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                    <input type="search" class="form-control" placeholder="Search...">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <span class="navbar-toggler-bar bar1 mt-2"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto align-items-center navbar-list mb-2 mb-lg-0">


                        {{-- Mengubah nama user --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('HOPE/assets/images/avatars/01.png') }}" alt="User-Profile"
                                    class="img-fluid avatar avatar-50 avatar-rounded">
                                <div class="caption ms-3 d-none d-md-block ">
                                    <h6 class="mb-0 caption-title"><?= Auth::user()->name ?></h6>
                                    <p class="mb-0 caption-sub-title">Reviewer</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/editprofile">Profile</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ asset('HOPE/dashboard/app/user-privacy-setting.html') }}">Privacy
                                        Setting</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="iq-navbar-header" style="height: 215px;">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div>
                                <h1>Hello
                                    <?= Auth::user()->name ?></h1>
                                <p>SIKASI (Sistem Informasi Kerjasama Sekolah Vokasi) - Universitas Sebelas Maret
                                    Surakarta</p>
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-header-img">
                <img src="{{ asset('HOPE/assets/images/dashboard/top-header.png') }}" alt="header"
                    class="img-fluid w-100 h-100 animated-scaleX">
            </div>
        </div> <!-- Nav Header Component End -->
        <!--Nav End-->
    </div>