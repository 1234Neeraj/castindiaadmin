<!-- <html>
    <head>
        <title>Aspirant</title>
        <?= link_tag("Assets/css/bootstrap.min.css")?>
        <?= link_tag("Assets/css/aspirant.css")?>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <h1>Aspirant</h1>
            <div class="row" style="margin:auto">
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <div class="card div_card_ta">
                                <div class="row">
                                    <div class="col-3">
                                        <image class="avatar" src="<?php echo base_url('Assets/images/avatar.png') ?>">
                                    </div>
                                    <div class="col-9">
                                        <h6>Total Aspirants</h6>
                                        <h3>1500</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card div_card_aa">
                                <div class="row">
                                    <div class="col-3">
                                        <image class="avatar" src="<?php echo base_url('Assets/images/avatar.png') ?>">
                                    </div>
                                    <div class="col-9">
                                        <h6>Active Aspirants</h6>
                                        <h3>0770</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card div_card_tp">
                                <div class="row">
                                    <div class="col-3">
                                        <image class="avatar" src="<?php echo base_url('Assets/images/avatar.png') ?>">
                                    </div>
                                    <div class="col-9">
                                        <h6>Total Profiles</h6>
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
                                <div class="p-2 text-center"><i class="fa fa-file-export"></i></i></div>
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
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Date & Time</th>
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
                            <td><i class="fa fa-comments"></i></td>
                            <td><span class="td_span">FC</span></td>
                            <td><i class="fa fa-eye"></i></td>
                        </tr>
                        <tr class="text-center">
                            <td>01</td>
                            <td>Dhruv Patel</td>
                            <td>8796594719</td>
                            <td>09/12/1999 | 19:45</td>
                            <td><i class="fa fa-comments"></i></td>
                            <td><span class="td_span">FC</span></td>
                            <td><i class="fa fa-eye"></i></td>
                        </tr>
                        <tr class="text-center">
                            <td>01</td>
                            <td>Dhruv Patel</td>
                            <td>8796594719</td>
                            <td>09/12/1999 | 19:45</td>
                            <td><i class="fa fa-comments"></i></td>
                            <td><span class="td_span">FC</span></td>
                            <td><i class="fa fa-eye"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html> -->

<?php  include "Header.php"; $title="header";?>
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
                        </ol>-->
                        <h1 style="padding-bottom:20px;"></h1>
                        <div class="row" style="margin:auto">
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card div_card_ta">
                                            <div class="row">
                                                <div class="col-3 position-relative">
                                                    <image class="avataruser" src="<?php echo base_url('Assets/images/aspadminuser.png') ?>">
                                                    <image class="avatar" src="<?php echo base_url('Assets/images/aspadmin.png') ?>">
                                                </div>
                                                <div class="col-9">
                                                    <h6 class="ta_aa_tp_h6">Total Aspirants</h6>
                                                    <h3 class="ta_aa_tp_h3"><?php echo $totalcount[0]['COUNT(Applicant_Access)']; ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card div_card_aa">
                                            <div class="row">
                                                <div class="col-3 position-relative">
                                                    <image class="avataruser" src="<?php echo base_url('Assets/images/aspadminuser.png') ?>">
                                                    <image class="avatar" src="<?php echo base_url('Assets/images/aspadmin.png') ?>">
                                                </div>
                                                <div class="col-9">
                                                    <h6 class="ta_aa_tp_h6">Active Aspirants</h6>
                                                    <h3 class="ta_aa_tp_h3"><?php echo $activecount[0]['COUNT(ACTIVE_STATUS)']; ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card div_card_tp">
                                            <div class="row">
                                                <div class="col-3 position-relative">
                                                    <image class="avataruser" src="<?php echo base_url('Assets/images/aspadminuser.png') ?>">
                                                    <image class="avatar" src="<?php echo base_url('Assets/images/aspadmin.png') ?>">
                                                </div>
                                                <div class="col-9">
                                                    <h6 class="ta_aa_tp_h6">Total Profiles</h6>
                                                    <h3 class="ta_aa_tp_h3">1 : X</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row" style="justify-content: end;">
                                    <div class="col-8">
                                        <div class="input-group mb-3">
                                            <input type="text" name="search" id="search" placeholder="Search here" class="form-control input_search"  aria-label="" aria-describedby="basic-addon2" onkeyup="searchAspirant()"/>
                                            <span class="input-group-text span_fa_search" id="basic-addon2"><i class="fa fa-search"></i></span>
                                        </div>
                                    </div>
                                    <!-- <div class="col-2">
                                        <div class="card">
                                            <div class="p-1 text-center">
                                                <i class="fa fa-filter"></i> Filters
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-2 position-relative">
                                        <div class="" style="position: absolute;top: -12px;">
                                            <a href="<?php echo base_url()?>/helpPage"><img src="<?php echo base_url()?>Assets/images/helppage.png"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid pt-3">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th class="table_th">Sr. No.</th>
                                        <th class="table_th">Name</th>
                                        <th class="table_th">Phone Number</th>
                                        <th class="table_th">Date & Time 
                                            <span class="dropdown table_th">
                                                <a class="dropdown-toggle drop_toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false"><img src="<?php echo base_url()?>Assets/images/chevron-down.png">
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li style="width:550px;display:flex;padding:8px">
                                                            <label for="startDate">Start Date</label>
                                                            <input name="startDate" id="startDate" placeholder="Start Date" class="" onchange="searchAspirant()"/>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label for="endDate">End Date</label>
                                                            <input name="endDate" id="endDate" placeholder="End Date" class=""onchange="searchAspirant()"/>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </span>
                                        </th>
                                        <th class="table_th">Initiate Action</th>
                                        <th class="table_th">Status 
                                            <label id="labelStatus" for="formStatus" style="margin:0" onclick="openselect()"><img src="<?php echo base_url()?>Assets/images/chevron-down.png"></label>
                                            <select class="table_td" id="formStatus" name="formStatus" aria-label="All" onchange="searchAspirant()" style="display: none;">
                                                <option class="table_td"  value="">All</option>
                                                <option class="table_td" value="PRF">PRF</option>
                                                <option class="table_td" value="RF">RF</option>
                                                <option class="table_td" value="S2RF">S2RF</option>
                                                <option class="table_td" value="ADF">ADF</option>
                                                <option class="table_td" value="PF">PF</option>
                                                <option class="table_td" value="FC">FC</option>
                                            </select>
                                        </th>
                                        <th class="table_th">Details</th>
                                    </tr>
                                </thead>
                                <tbody id="gettabledetails"></tbody>
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
        <?php  include "Scripts.php"; $title="scripts";?>
        
        <script>
            searchAspirant();
            function searchAspirant(){
                var datas=$('input[name=search]').val();
                var startDate = $('input[name=startDate]').val();
                var endDate = $('input[name=endDate]').val();
                var formStatus = $('select[name=formStatus]').val();
                var tablephp='Loadtable';
                var model='filterAspirantList';
                $.ajax({
                    method:'Post',
                    url:'<?php echo base_url()?>loadTable',
                    data:{data:datas,tablephp:tablephp,model:model,startDate:startDate,endDate:endDate,formStatus:formStatus},
                    success:function(dataget){
                        $('#gettabledetails').html(dataget);
                    }
                })
                $('select[name=formStatus]').hide();
                $('#labelStatus').show();
            }

            function openselect(){
                $('select[name=formStatus]').show();
                $('#labelStatus').hide();
            }
            $(document).mouseup(function (e) {
                if ($(e.target).closest(".dropdown-menu").length
                    === 0) {
                        $('select[name=formStatus]').hide();
                    $('#labelStatus').show();
                }
            });
        </script>
    </body>
</html>
    