<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/admin"><img src="/img/slu.png" alt="admin" style="width:30px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="/admin/students">Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/faculties">Faculties</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/orders">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
    </div>
  </div>
</nav>
@if(Session::has('success'))
    <p id="notif" style="background-color:green; color:white">{{Session::get('success')}}</p>
@elseif(Session::has('fail'))
    <p id="notif" style="background-color:red; color:white">{{Session::get('fail')}}</p>
@endif