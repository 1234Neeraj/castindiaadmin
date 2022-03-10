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
                            <div class="col-4">
                                <h1 class="help_h1">Help Center</h1>
                                <h4 class="help_h5 text-center">Admin Panel Help Section for Aspirants</h4>
                                <h5 class="help_h6 text-center">Contact us for support</h5>
                                <div class="text-center" style="padding-top:20px">
                                    <a class="help_a" href="#">Help and Support</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active help_h6" id="home-tab" data-toggle="tab" href="#Statusmanagement" role="tab" aria-controls="home" aria-selected="true"><h4>Status Management</h4></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link help_h6" id="profile-tab" data-toggle="tab" href="#Howtouse" role="tab" aria-controls="profile" aria-selected="false"><h4>How to use</h4></a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Statusmanagement" role="tabpanel" aria-labelledby="home-tab">
                                        <p class="help_para">In the User Data section, the following actions can be taken, to understand the working of the different statuses against the aspirants. The aspirant’s stage will be defined according to the abbreviations mentioned below.</p>
                                        <p class="help_para">Under Aspirant’s Data section in tabular format, the data will be provided, in which the fifth column provides the status of the Aspirant’s accounts on Cast India.</p>
                                        <p class="help_para">You can find the scenarios under which the respective statuses will be visible against one specific aspirants.</p>
                                        <h5 class="help_h6">NOTE: In case, you are not able to see the status in front of a particular employer’s data, it has not been assigned to you</h5>
                                        <p class="help_para">The following abbreviations under Status will be visible:</p>
                                        <ul>
                                            <li class="help_para">1. PRF: Pre-Registration Form</li>
                                            <li class="help_para">2. RF: Registration Form</li>
                                            <li class="help_para">3. S2RF: Section 2 Registration Form</li>
                                            <li class="help_para">4. ADF: Additional Details Form</li>
                                            <li class="help_para">5. PF: Professional Form</li>
                                            <li class="help_para">6. CF: Closed Form</li>
                                        </ul>
                                        <div>
                                            <h4 class="help_h5">PRF: Pre-Registration Form</h4>
                                            <h5 class="help_h6">The aspirant will remain in PRF stage the action button in this step is not clicked upon, regardless whether the information was filled or not.</h5>
                                            <p class="help_para">Scenarios for PRF: Why an aspirant will have this status, refer the reasons given below:</p>
                                            <ul>
                                                <li class="help_para">1. When the aspirant coming on Cast India for the first time, has entered phone number and triggered OTP but has not entered the received OTP. In that case, the aspirant’s status will show as PRF.</li>
                                                <li class="help_para">2. When the aspirant has entered phone number, triggered OTP, entered OTP but is not able to enter the system. In that case, the aspirant can connect with the Support team to resolve the problem. The status of the aspirant will remain in PRF.</li>
                                                <li class="help_para">3. When the aspirant has entered phone number, triggered OTP, enters wrong or expired OTP, triggers OTP again and does not receive it. In that case, the aspirant can try triggering the OTP once again or can connect with the Support team for further help, The status of the aspirant will remain in PRF.</li>
                                                <li class="help_para">4. When the aspirant enters details manually, completes registration by entering the correct OTP, but drops out before completing the step. The aspirant has been registered, but as the action button ‘Continue’ was not clicked upon, the aspirant will have the PRF status.</li>
                                            </ul>
                                            <p class="help_para">Action Expected: Connect with the employer and get updates, with the aim to convert him/her into a registered user on Cast India.</p>
                                        </div>
                                        <div>
                                            <h4 class="help_h5">RF: Registration Form</h4>
                                            <h5 class="help_h6" >The aspirant will remain in RF stage if the action button in this step is not clicked upon, regardless whether the information was filled or not.</h5>
                                            <p class="help_para">Scenarios for RF: Why an aspirant will have this status, refer the reasons given below:</p>
                                            <ul>
                                                <li class="help_para">1. If the aspirant enters OTP and other details triggers the action button, ‘Continue’ on that page, but does not reach the Section 2 Registration Form due to some reason, the aspirant’s status will be in RF.</li>
                                                <li class="help_para">2. When the aspirant starts with Social Login (in which through Google or Facebook ID, the data is being fetched) on Registration Step 1 and logs out on the second step, the data is saved but mobile number has not been registered on such aspirants yet. The account has been created and the aspirant can use Social Login to come inside the system again and will find the Registration Step 2 form again to continue further.</li>
                                                <li class="help_para">3. When the aspirant manually enters details in the Registration form, and moves forward, the step is complete successfully.</li>
                                            </ul>
                                            <p class="help_para">Action Expected: Connect with the aspirant and get updates, with the aim to convert him/her into a registered user on Cast India.</p>
                                        </div>
                                        <div>
                                            <h4 class="help_h5">S2RF: Section 2 Registration Form</h4>
                                            <p class="help_para">Scenarios for S2RF: Why an aspirant will have this status, refer the reasons given below:</p>
                                            <ul>
                                                <li class="help_para">1. When the aspirant fills only 1 or 2 form fields in the Section 2 form and closes the page, in that case, the aspirant’s status will be in S2RF.</li>
                                                <li class="help_para">2. When the aspirant completes Registration form, land on the Section 2 of Registration but enters some details but does not click on the action button on this page and closes the page, in that case the S2RF status will be visible in front of the aspirant’s details.</li>
                                                <li class="help_para">3. When the aspirant lands on this page, enters details but is not able to move forward due to some reason, the status of this aspirant will be S2RF.</li>
                                                <li class="help_para">4. When the aspirant lands on this Section 2 of Registration Form</li>
                                                <li class="help_para">5. When the aspirant uses social login, Registration step is completed, and the mobile verification is happening on this step. Here, if the aspirant continues to fill information, and clicks on the action button on this page, the S2RF step will be completed successfully.</li>
                                            </ul>
                                            <p class="help_para">Action Expected: Connect with the employer and get updates, with the aim to convert him/her into a registered user on Cast India.</p>
                                        </div>
                                        <div>
                                            <h4 class="help_h5">ADF: Additional Details Form</h4>
                                            <p class="help_para">Scenarios for ADF: Why an aspirant will have this status, refer the reasons given below:</p>
                                            <ul>
                                                <li class="help_para">1. After completing the Section 2 Registration Form, the aspirant will be redirected to this page, if the aspirant closes the page, the status against the aspirant will show as ADF.</li>
                                                <li class="help_para">2. There are two steps of Additional Details Form, the aspirant can close the form at Step 1 with or without entering any data on this page.</li>
                                                <li class="help_para">3. The aspirant might close the form at Step 2, with or without entering the data on this page, in that case the status against the Aspirant will be ADF.</li>
                                                <li class="help_para">4. When the aspirant fills in the details on Step 1 and is not able to go forward due to some reason, the status of the aspirant will be ADF.</li>
                                                <li class="help_para">5. When the aspirant fills in the details on Step 1 but is not able to go forward due to some reason, the status of the aspirant will be ADF.</li>
                                                <li class="help_para">6. When the aspirant is not able to move forward from adding profile picture due to some reason, the aspirant’s status will be ADF.</li>
                                                <li class="help_para">7. When the aspirant fills all the information in Step 1 and Step 2, and clicks on the action button on Step 2, the ADF step will be completed successfully.</li>
                                            </ul>
                                            <p class="help_para">Action Expected: Connect with the employer and get updates, with the aim to get details from him/her to become an active user on Cast India.</p>
                                        </div>
                                        <div>
                                            <h4 class="help_h5">PF: Professional Form</h4>
                                            <p class="help_para">Scenarios for PF: Why an aspirant will have this status, refer the reasons given below:</p>
                                            <ul>
                                                <li class="help_para">1. After the additional form, after landing on the Professional form, if the page closes, the status of that aspirant will be updated as PF.</li>
                                                <li class="help_para">2. When the aspirant has successfully completed all the form fields (even optional) steps to be an aspirant on Cast India</li>
                                            </ul>
                                            <p class="help_para">Action Expected: Connect with the aspirant and get updates, with the aim to convert him/her into an active user on Cast India.</p>
                                        </div>
                                        <div>
                                            <h4 class="help_h5">FC: Form Close</h4>
                                            <p class="help_para">Scenarios for FC:</p>
                                            <ul>
                                                <li class="help_para">1. When the aspirant has successfully completed all mandatory steps to be an aspirant on Cast India</li>
                                                <li class="help_para">2. When the aspirant has successfully completed all the form fields (even optional) steps to be an aspirant on Cast India</li>
                                            </ul>
                                            <p class="help_para">Action Expected: Connect with the aspirant and get updates, with the aim to convert him/her into an active user on Cast India.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Howtouse" role="tabpanel" aria-labelledby="profile-tab">
                                        <div>
                                            <h4 class="help_help5">How to use</h4>
                                            <p class="help_para">The different abbreviations will be visible in front of each aspirant profile. Each will have a different process to make sure that the aspirant is going ahead from the current stage and successfully completing the form and reach CF (Closed Form) last stage.</p>
                                            <p class="help_para">After logging in from the given email and login. Navigate ‘User Account’ from the left-hand drawer. There are two options in ‘User Account’ namely; ‘Aspirants’, ‘Employers’ After clicking on, ‘Aspirants’ the centre section will open the details about the Aspirants on Cast India.</p>
                                            <p class="help_para">For PRF, the action needed to be taken is to ‘Initiate Action’ on the registered number and take updates regarding the requirements or reason for backing from the first step. For RF, S2RF, the action needed to be taken is to ‘Message’ on the registered number asking if there are any issues for not continuing the registration process of Cast India.</p>
                                        </div>
                                        <div>
                                            <h4 class="help_h5">TOOLS</h4>
                                            <p class="help_para">All the actions that can be done against an employer’s account and it’s details are explained below:</p>
                                            <div>
                                                <h5 class="help_h6">Initiate Action:</h5>
                                                <p class="help_para">When clicking on this section against a particular aspirant profile, the admin panel user will be redirected to the WhatsApp chat bot, where the admin panel user will be talking with the aspirant one-on-one directly.</p>
                                            </div>
                                            <div>
                                                <h5 class="help_h6">View Details:</h5>
                                                <p class="help_para">When clicked on this section icon against a particular profile, a separate page will open with all the details of the aspirant, section-wise segregation. (This will not be available for all the admin panel users, it is available with limitations)</p>
                                            </div>
                                            <div>
                                                <h5 class="help_h6">Search Bar:</h5>
                                                <p class="help_para">When clicked on this, a calendar will open, where the range of dates, between which the data to be consumed will be filtered.</p>
                                            </div>
                                            <div>
                                                <h5 class="help_h6">Date Range:</h5>
                                                <p class="help_para">There are 6 types of statuses, which are explained above. Each one has its significance. (Only the ones assigned to an admin panel user will be visible, if there is no status in front of the Aspirant, it has not been assigned under your admin panel profile)</p>
                                            </div>
                                            <div>
                                                <h5 class="help_h6">Help Section Document:</h5>
                                                <p>In this section, a static page which is currently opened will be visible.</p>
                                            </div>
                                            <div>
                                                <h5 class="help_h6">Total Aspirants</h5>
                                                <p class="help_para">The numbers under this indicate the number of registrations that have happened, the criterion being the aspirant has crossed the PRF stage. This includes all the statuses after PRF.</p>
                                            </div>
                                            <div>
                                                <h5 class="help_h6">Active Aspirants</h5>
                                                <p class="help_para">The number under this indicate the number of aspirants that have completed the 6th status of CF. All the aspirants who have completed this criterion will fall under active</p>
                                            </div>
                                            <div>
                                                <h5 class="help_h6">Total Profiles</h5>
                                                <p class="help_para">The number under this indicate the number of profiles that have been created on Cast India. As each aspirant can create 10 profiles, so the ratio of aspirants registered against the number of profiles created will be visible in this section.</p>
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
    </body>
</html>