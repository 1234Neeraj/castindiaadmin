<?php  include "Header.php"; $title="header";?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php  include "Sidemenu.php"; $title="Sidebar";?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 style="padding-bottom:20px;"><a href="<?php echo base_url()?>/aspirant"><img src="<?php echo base_url()?>Assets/images/chevron-left.png"></a></h1>
                        <div class="row">
                        <!-- <?php echo $result[0]; ?> -->
                            <input type="hidden" class="" name="userid" value="<?php echo $result[0]['USER_ID']; ?>">
                            <div class="col-2">
                                <img class="user_profile_img" src="<?php echo base_url() ?>/profile/<?php echo $result[0]['Profile_Pic']; ?>">
                            </div>
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-6" style="padding-top:30px">
                                        <h5 class="asp_details_heading_h5">Account Details</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Full Name</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['First_Name']; ?> <?php echo $result[0]['Last_Name']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Email Address</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['E_Mail']; ?>  <span> Verified</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Phone Number</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['Mobile_No']; ?>  <span> Verified</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6" style="padding-top:30px">
                                        <h5 class="asp_details_heading_h5">Login Details</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">I want to be</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data">Actor</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Senority</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['name']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Display Name</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['Display_Name']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" style="padding-top:30px">
                                        <h5 class="asp_details_heading_h5">Additional Form Details</h5>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Birthday</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['Date_Of_Birth']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Middle Name</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['Middle_Name']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Gender</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['Gender']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Pin Code</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['Pin_Code']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Address</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['Permanent_Address']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">City</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['City']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">State</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['State']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Country</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['Country']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Alt. Number</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $result[0]['Alt_Mobile_No']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" style="padding-top:30px">
                                        <div class="row">
                                            <h5 class="asp_details_heading_h5">Profile Details</h5> &nbsp;&nbsp;&nbsp;&nbsp;
                                            <span>
                                                <select class="form-select" aria-label="Default select example" onchange="getteplateval(this.value,<?php echo $result[0]['USER_ID']; ?>)">
                                                    <?php foreach ($list as $lis){ ?>
                                                        <option value="<?php echo $lis['Profile_Id']?>"
                                                            <?php if ($lis['Is_Primary']=='P'){ echo 'selected="selected"';}  ?>   ><?php echo $lis['Source_Key']?></option>
                                                    <?php } ?> 
                                                </select>
                                            </span>
                                        </div>
                                        <div id="aspProDetails"></div>
                                        <!-- <?php print_r($result); ?> -->
                                        <div class="col-12" style="padding-top:30px">
                                            <h5 class="asp_details_heading_h5">Personal Details</h5>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <?php $identity = explode(',',$result[0]['Identity_Proof']) ?>
                                                        <div class="col-4 asp_details_field_label">Identity Proof</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-7 asp_details_field_data"><?php echo $identity[0]; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-4 asp_details_field_label">Aadhar Number</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-7 asp_details_field_data"><?php echo $identity[1]; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-4 asp_details_field_label">Interests</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-7 asp_details_field_data"><?php echo $result[0]['Applicant_Interests']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-4 asp_details_field_label">Hobbies</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-7 asp_details_field_data"><?php echo $result[0]['Hobbies']; ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top:30px">
                                            <h5 class="asp_details_heading_h5">Professional Details</h5>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Current Working Status</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Current_Working_Status']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Association Name</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Association_Name']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">License Number</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['License_No']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Job Title</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Job_Title']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Job Locality</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Job_Locality']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Certificate</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Certificate']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Current Pay</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Current_Pay']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Notice Period</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Notice_Period']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Years of Experience</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Yrs_of_Exp']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Present Job Roles</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Present_Job_Roles']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Working Status</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Working_Status']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Clients Work With</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Clients_wrk_with']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Project Done</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Project_Done']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Project Type</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Project_Type']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Functional Industry</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Functional_Industry']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Functional Area</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Functional_Area']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Skills</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Skills']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Expertise</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Expertise']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-4 asp_details_field_label">Job Description</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-7 asp_details_field_data"><?php echo $result[0]['Job_Desc']; ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top:30px">
                                            <h5 class="asp_details_heading_h5">Educational Details</h5>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Highest Education</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Highest_Education']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Year of Passing</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Year_of_Passing']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Specialization</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Specialization']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Certificate</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Othr_Certificates']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Language</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Language_Known']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5 asp_details_field_label">Software</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-6 asp_details_field_data"><?php echo $result[0]['Softwares']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-4 asp_details_field_label">Competitive Achive</div>
                                                        <div class="col-auto">:</div>
                                                        <div class="col-7 asp_details_field_data"><?php echo $result[0]['Othr_Compt_Achievements']; ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <?php  include "Scripts.php"; $title="scripts";?>
        <script>
            var userid = $('input[name=userid]').val();
            // alert(userid);
            getteplateval('',userid);
            function getteplateval(id,userid){
                // alert(id);
                var proId=id;
                var tablephp='loadProfileTemplates';
                var model='getAspProfileDetail';
                $.ajax({
                    method:'Post',
                    url:'<?php echo base_url()?>loadProTempDetail',
                    data:{proId:proId,userid:userid,tablephp:tablephp,model:model},
                    success:function(dataget){
                        $('#aspProDetails').html(dataget);
                    }
                })
            }
        </script>
    </body>
</html>
