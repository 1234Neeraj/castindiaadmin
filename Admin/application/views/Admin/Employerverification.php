<?php  include "Header.php"; $title="Employer";?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php  include "Sidemenu.php"; $title="Sidebar";?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <!-- <h1 class="mt-4">Employer </h1> 
                        <ol class="bg-info text-light breadcrumb mb-4">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item"><a class="text-white" href="http://castindia.in/cpanel/admin">Employer</a></li>
                        </ol>                     -->
                        <h1>Employers Verification</h1>
                        <div class="row" style="margin:auto">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card div_card_tp">
                                            <div class="row">
                                                <div class="col-3">
                                                    <image class="avatar" src="<?php echo base_url('Assets/images/avatar.png') ?>">
                                                </div>
                                                <div class="col-9">
                                                    <h6>Pending Verification</h6>
                                                    <h3>1 : X</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row" style="justify-content: end;">
                                    <div class="col-4">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control input_search" placeholder="Search here" aria-label="" aria-describedby="basic-addon2">
                                            <span class="input-group-text span_fa_search" id="basic-addon2"><i class="fa fa-search"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="card">
                                            <div class="p-1 text-center">
                                                <i class="fa fa-filter"></i> Filters
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="card">
                                            <div class="p-2 text-center"><i class="fas fa-user fa-fw"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="card">
                                            <div class="p-2 text-center"><i class="fa fa-file-export"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid pt-3">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>Sr. No.</th>
                                        <th>User Name</th>
                                        <th>Phone Number</th>
                                        <th>Date & Time</th>
                                        <th>Time Counting</th>
                                        <th>Initiate Action</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>01</td>
                                        <td>Dhruv Patel</td>
                                        <td>8796594719</td>
                                        <td>09/12/1999 | 19:45</td>
                                        <td>25:53</td>
                                        <td><i class="fa fa-comments"></i></td>
                                        <td><span class="td_span">FC</span></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>01</td>
                                        <td>Dhruv Patel</td>
                                        <td>8796594719</td>
                                        <td>09/12/1999 | 19:45</td>
                                        <td>25:53</td>
                                        <td><i class="fa fa-comments"></i></td>
                                        <td><span class="td_span">FC</span></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>01</td>
                                        <td>Dhruv Patel</td>
                                        <td>8796594719</td>
                                        <td>09/12/1999 | 19:45</td>
                                        <td>25:53</td>
                                        <td><i class="fa fa-comments"></i></td>
                                        <td><span class="td_span">FC</span></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
                <!-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Designed & Developed at <a href="http://vihatechnosoft.com/" target="_blank">Vts</a></div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>             -->
            </div>
        </div>
        <?php  include "Scripts.php"; $title="Employer";?>
    </body>
</html>
    