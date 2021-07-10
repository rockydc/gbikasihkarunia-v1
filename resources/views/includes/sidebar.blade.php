<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(0,0,0);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img src="assets/img/logogbikk.png"></a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            
                    <li class="nav-item"><a class="nav-link" href="{{route('pelayanan.index')}}"><i class="far fa-user-circle"></i><span>Pelayanan</span></a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{route('persembahan.index')}}"><i class="far fa-user-circle"></i><span>Persembahan</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('komunitas.index')}}"><i class="fa fa-users"></i><span>Komunitas</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('jemaat.index')}}"><i class="fa fa-users"></i><span>Daftar Jemaat</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html"><i class="far fa-user-circle"></i><span>Galeri kegiatan Terakhir</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('doa.index')}}"><i class="far fa-user-circle"></i><span>Doa</span></a></li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('video.index')}}"><i class="fa fa-volume-up"></i><span>Video Update</span></a>
                    
                    
                    
                    <a class="nav-link" href="{{route('renungan.index')}}"><i class="fa fa-book"></i><span>Renungan Harian</span></a>
                    
                    <a class="nav-link" href="{{ route('event.index')}}">
                    
                    <i class="fa fa-bullhorn"></i><span>Event</span></a><a class="nav-link" href="register.html"><i class="fa fa-clipboard"></i><span>Warta Jemaat</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>