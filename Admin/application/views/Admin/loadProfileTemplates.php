<!-- <?php $values = json_decode($prodetail[0]['User_From_Val'], true); print_r($values); ?> -->
                                        <!-- ------------------------Temp1------------------------- -->
                                        <?php if($temp==1){ ?>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Pay Per Shift</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['pay_per_shift'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Hair Color</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['hair_color'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Complextion</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['complextion'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Eye Color</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['eye_color'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Weight</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['weight'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Height</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['height'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Body Type</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['body_type'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Body Shape</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['body_shape'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Preferred Work Location</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['preferred_work_platform'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Headline</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['headline'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">About Yourself</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['about_yourself'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Portfolio/Profile</div>
                                                    <div class="col-auto">:</div>
                                                    <?php if(($prodetail[0]['Portfolio_Form_Links']!='')||($prodetail[0]['Portfolio_Form_Images']!='')||($prodetail[0]['Portfolio_Form_Vedios']!='')||($prodetail[0]['Portfolio_Form_Documents']!='')){ ?>
                                                    <div class="col-7 asp_details_field_data" style="color:green">Uploaded</div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Additional Details For The Employer</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['additional_details_for_the_employer'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Choice of Industry</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['choice_of_industry'] ?></div>
                                                </div>
                                            </div>
                                            <?php $social_links =  explode(',',$values['social_links']) ?>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Social Media Handles</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data">
                                                        <?php if($social_links[0]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Youtube</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[1]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Facebook</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[2]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Instagram</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[3]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Twitter</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[4]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Linkedin</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2" style="color:green asp_details_field_data">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[5]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Behance</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[6]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Google Plus</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[7]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Dribbble</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <!-- ------------------------Temp2------------------------- -->
                                        <?php if($temp==2){ ?>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Pay Per Shift</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['pay_per_shift'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Project Value</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['project_value'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Preferred Genre</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['preferred_genre'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Portfolio/Profile</div>
                                                    <div class="col-auto">:</div>
                                                    <?php if(($prodetail[0]['Portfolio_Form_Links']!='')||($prodetail[0]['Portfolio_Form_Images']!='')||($prodetail[0]['Portfolio_Form_Vedios']!='')||($prodetail[0]['Portfolio_Form_Documents']!='')){ ?>
                                                    <div class="col-7 asp_details_field_data" style="color:green">Uploaded</div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Headline</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['headline'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">About Yourself</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['about_yourself'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Choice of Industry</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['choice_of_industry'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Social Media Handles</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['pay_per_shift'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Software</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['softwares'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <!-- ------------------------Temp1------------------------- -->
                                        <?php if($temp==3){ ?>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Pay Per Shift</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['pay_per_shift'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Number of Project Handles</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['no_of_project'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Corporate Status</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['corporate_status'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Preferred Genre</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['preferred_genre'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-5 asp_details_field_label">Project Value</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-6 asp_details_field_data"><?php echo $values['project_value'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Portfolio/Profile</div>
                                                    <div class="col-auto">:</div>
                                                    <?php if(($prodetail[0]['Portfolio_Form_Links']!='')||($prodetail[0]['Portfolio_Form_Images']!='')||($prodetail[0]['Portfolio_Form_Vedios']!='')||($prodetail[0]['Portfolio_Form_Documents']!='')){ ?>
                                                        <div class="col-7 asp_details_field_data" style="color:green">Uploaded</div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Headline</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['headline'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">About Yourself</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['about_yourself'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Choice of Industry</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['choice_of_industry'] ?></div>
                                                </div>
                                            </div>
                                            <?php $social_links =  explode(',',$values['social_links']) ?>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Social Media Handles</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data">
                                                        <?php if($social_links[0]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Youtube</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[1]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Facebook</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[2]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Instagram</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[3]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Twitter</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[4]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Linkedin</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[5]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Behance</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[6]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Google Plus</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php if($social_links[7]!=''){ ?>
                                                            <div class="row">
                                                                <div class="col-4 asp_details_field_data">Dribbble</div>
                                                                <div class="col-auto">-</div>
                                                                <div class="col-2 asp_details_field_data" style="color:green">Uploaded</div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Additional Details For The Employer</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['additional_details_for_the_employer'] ?></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 asp_details_field_label">Software</div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col-7 asp_details_field_data"><?php echo $values['softwares'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    