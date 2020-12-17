<div class="navbar-container">
    <div class="navbar-logo">
        <a href="/home" rel="nofollow">
            <img class="navbar-logo-image" src="{{URL::asset('/images/ninomaeinanis.gif')}}" alt="Reenko" />
        </a>
    </div>
    <div class="navbar-search-wrapper">
        <img src="{{URL::asset('/images/search.svg')}}" alt="search">
        <input type="search" id="search" name="search" placeholder="Search">
    </div>
    <div class="navbar-user-profile">
        <a href="/" rel="nofollow">
            <img class="navbar-profile-image" src="{{URL::asset('/images/ninomaeinanis.gif')}}" alt="Reenko" />
            <p>{{ $active_user->full_name }}</p>
        </a>
    </div>
    <div class="navbar-user-setting">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          </button>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item" href="#">Profile Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/user/logout">Logout</a></li>
          </ul>
        </div>
    </div>
</div>