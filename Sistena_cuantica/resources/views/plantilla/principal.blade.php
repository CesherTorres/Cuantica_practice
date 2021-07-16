<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi empresa - @yield('title')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="/css/plantilla.css">
    <link rel="stylesheet" href="/css/stylo_imge.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap-5.0 -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-home' ></i>
      <span class="logo_name">Mi empresa</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
            <i class='bx bxs-dashboard' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user' ></i>
            <span class="link_name">Contactos</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
            <li><a class="link_name" href="#">Contactos</a></li>
            <li><a href="/cliente">Lista de Contactos</a></li>
            <li><a href="/cliente/create">Clientes</a></li>
            <li><a href="/Proveedor">Proveedores</a></li>
        </ul>
      </li>
      <li>
        
      <li>
        <div class="profile-details">
            <div class="profile-content">
                <img src="/img/avatar.jpg" alt="profile">
            </div>
            <div class="name-job">
                <div class="profile_name">Usuario</div>
                <div class="job">Administrador</div>
            </div>
            <i class='bx bx-log-out' ></i>
        </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
     
    </div>
    <div class="content-wrapper">
        @yield('content')
    </div>
  </section>
<script>
$(document).ready(function(){ 
   $('#alternar-respuesta-ej2').on('click',function(){
      $('#respuesta-ej2').toggle('slow');
   });
});
</script>
  <script>

  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;
   arrowParent.classList.toggle("showMenu");
    });
  }

  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
  <script src="{{asset('js/app.js')}}"></script>

</body>
</html>