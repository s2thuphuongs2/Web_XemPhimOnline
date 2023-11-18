<!-- <ul class="adminMenu">
    <li><a href ="index.php?action=quanlyDanhMuc">Quản lý danh mục phim</a></li>
    <li><a href ="index.php?action=quanlyPhim">Quản lý phim</a></li>
    <li><a href ="index.php?action=quanlyUser">Quan lý user</a></li>
    <li><a href ="index.php?action=quanlyComment">Quản lí comment</a></li>
</ul> -->
<script>
function keepHover() {
  // Remove the 'active' class from all navigation links
  var navLinks = document.querySelectorAll(".nav-link");
  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].classList.remove("active");
  }

  // Add the 'active' class to the clicked navigation link
  event.currentTarget.classList.add("active");
}

function addActiveClassToCurrentLink() {
  // Add the 'active' class to the current navigation link on page load
  var currentUrl = window.location.href;
  var navLinks = document.querySelectorAll(".nav-link");
  for (var i = 0; i < navLinks.length; i++) {
    if (navLinks[i].href === currentUrl) {
      navLinks[i].classList.add("active");
      break;
    }
  }
}

// Call keepHover() when a navigation link is clicked
var navLinks = document.querySelectorAll(".nav-link");
for (var i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener("click", keepHover);
}

// Call addActiveClassToCurrentLink() when the page is loaded
addActiveClassToCurrentLink();
</script>

<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
            <div class="sidebar-brand-text mx-3" href="index.php?action=dashboard"><span>WEBPHIM TNPK</span></div>
        </a>
        <hr class="sidebar-divider my-0" />
        <ul id="accordionSidebar" class="navbar-nav text-light">
        <!-- "fas fa-tachometer-alt" -->
        <!-- "fas fa-user" -->
        <!-- "fas fa-table" -->
        <!-- "far fa-user-circle" -->
        
        <!-- // mỗi lần click thì class chuyển sang nav-link active (chua lam)-->
            <li class="nav-item"><a class="nav-link active" href="index.php?action=Dashboard&query=them"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link" onclick = "keepHover()" href="index.php?action=quanlyDanhMuc&query=them"><i class="fas fa-list"></i><span>Quản lý danh mục</span></a></li>
            <li class="nav-item"><a class="nav-link" onclick = "keepHover()" href="index.php?action=quanlyPhim&query=lietke"><i class="fas fa-film"></i><span>Quản lý phim</span></a></li>
            <li class="nav-item"><a class="nav-link" onclick = "keepHover()" href="index.php?action=quanlyUser&query=lietke"><i class="fas fa-user"></i><span>Quản lý user</span></a></li>
            <li class="nav-item"><a class="nav-link" onclick = "keepHover()" href="index.php?action=quanlyComment&query=lietke"><i class="far fa-comment"></i><span>Quản lý comment</span></a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i><span>Register</span></a></li> -->
        </ul>
        <div class="text-center d-none d-md-inline"><button id="sidebarToggle" class="btn rounded-circle border-0" type="button"></button></div>
        </div>
</nav>