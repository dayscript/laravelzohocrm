<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="nav-item {{ \Route::is('zoho') ? 'active':'' }}">
      <a class="nav-link" href="/zoho">
        <i class="material-icons">dashboard</i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="nav-item {{ \Route::is('zoho.modules') ? 'active':'' }}">
      <a class="nav-link" href="/zoho/modules">
        <i class="material-icons">bubble_chart</i>
        <p>Modules</p>
      </a>
    </li>
    <li class="nav-item {{ \Route::is('zoho.fields') ? 'active':'' }}">
      <a class="nav-link" href="/zoho/fields">
        <i class="material-icons">content_paste</i>
        <p>Fiels Maping</p>
      </a>
    </li>
    <li class="nav-item {{ \Route::is('zoho.types') ? 'active':'' }}">
      <a class="nav-link" href="/zoho/types">
        <i class="material-icons">library_books</i>
        <p>Types</p>
      </a>
    </li>
    {{-- <li class="nav-item ">
      <a class="nav-link" href="./icons.html">
        <i class="material-icons">bubble_chart</i>
        <p>Icons</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="./map.html">
        <i class="material-icons">location_ons</i>
        <p>Maps</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="./notifications.html">
        <i class="material-icons">notifications</i>
        <p>Notifications</p>
      </a>
    </li> --}}
    <!-- <li class="nav-item active-pro ">
          <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
          </a>
      </li> -->
  </ul>
</div>
