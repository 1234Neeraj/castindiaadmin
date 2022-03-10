<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion" style="background-color: #8080801c;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="text-center admin-pic">
                                <img src="https://castindia.in/cpanel/img/default.png" alt="default.jpg" style="width: 60px;">
                                <div class="sb-sidenav-menu-heading"><span class="bg-warning bg-admin">Admin</span></div>
                            </div> -->

                            <a class="nav-link" href="<?php echo base_url()?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link "
                                href="#" data-toggle="collapse" data-target="#collapseLayouts"
                                aria-expanded='false'  aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i> </div>User Account
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse show"
                                id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url()?>/aspirant">
                                        <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div> Aspirants
                                    </a>
                                    <a class="nav-link" href="<?php echo base_url()?>/employer">
                                        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div> Employers
                                    </a>
                                    <a class="nav-link" href="<?php echo base_url()?>/employerverification">
                                        <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div> Employer Verification
                                    </a>
                                </nav>
                            </div>

                            <a class="nav-link "
                                href="#" data-toggle="collapse" data-target="#collapsejobbox"
                                aria-expanded='false'                aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i> </div>Job Box
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse "
                                id="collapsejobbox" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">
                                        <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div> A
                                    </a>
                                    <a class="nav-link" href="#">
                                        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div> B
                                    </a>
                                    <a class="nav-link" href="#">
                                        <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div> C
                                    </a>
                                </nav>
                            </div>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <!-- <div class="sb-sidenav-footer"></div> -->
                </nav> 

