<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mitra">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('profil') }}">
              <span data-feather="file-text"></span>
              Profile
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('produk') }}">
            <span data-feather="file-text"></span>
            Tambahkan Produk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('list')}}">
            <span data-feather="shopping-cart"></span>
            Liat Produk
          </a>
        </li>
      </ul>
    </div>
  </nav>
