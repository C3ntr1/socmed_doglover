<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{ asset('asset/templatemo_579_cyborg_gaming/assets/images/logo.png')}}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                    <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                    </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}" class="{{ Route::current()->getName() == 'home' ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('dogs.index') }}" class="{{ Route::current()->getName() == 'dogs.index' ? 'active' : '' }}">Dogs</a></li>
                        <li><a href="{{ route('home', '#yourLikes') }}" >My Likes</a></li>
                        <li><a href="details.html">Others</a></li>
                        <li><a href="{{ route('users.show', auth()->user()->id) }}">Profile <img src="{{ asset('asset/templatemo_579_cyborg_gaming/assets/images/profile-header.jpg')}}" alt=""></a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
