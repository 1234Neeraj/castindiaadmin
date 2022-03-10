<!DOCTYPE html>
<html lang="en">
    <?php  include "Style.php"; $title="style";?>
    <div class="loader"><i class="fas fa-circle-notch fa-spin"></i></div>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light" style="background-color: #8080801c;">
            <!-- <a class="navbar-brand text-center" href="https://castindia.in/cpanel/admin">Cast India</a> -->
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <span id="time-part"></span>
                <li class="nav-item dropdown">
                    <span id="notifications"></span>

                    
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        
                        <a class="dropdown-item " href="https://castindia.in/cpanel/admin/profile"><i class="far fa-id-badge"></i> Profile Update</a>
                        <a class="dropdown-item" href="https://castindia.in/cpanel/admin/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        
                        
                    </div>
                </li> -->
                <li class="nav-item">
                    <a href="#"><i class="fas fa-user fa-fw fa-2x" style="position: relative;top: 15px;"></i></a>
                    <span style="display:inline-grid">
                        <div>Cast India</div>
                        <div>Administrator Login</div>
                    </span>
                </li>
                
            </ul>
        </nav>