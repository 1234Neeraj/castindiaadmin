<?php

    class Admin_Model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
    
        // public function aspirantList(){
        //     $this->db->select('First_Name,Last_Name,Mobile_No,applicant_recruiter.RECORD_INSERTED_DTTM')->from('applicant_recruiter')
        //     ->join('communication','communication.USER_ID = applicant_recruiter.USER_ID')
        //     ->where('Applicant_Access','Y');
        //     $query = $this->db->get()->result_array();
        //     // print_r($query);die;
        //     return $query;
        // }
        public function filterAspirantList($search, $from_date, $to_date, $status){
            $sql = " SELECT `applicant_recruiter`.`id`, `applicant_recruiter`.`USER_ID`,`applicant_recruiter`.`First_Name`,`applicant_recruiter`.`Last_Name`,`communication`.`Mobile_No`,`applicant_recruiter`.`RECORD_INSERTED_DTTM`,`applicant_recruiter`.`STATUS_ASP`
            FROM `applicant_recruiter`
            INNER JOIN `communication` ON `communication`.`USER_ID` = `applicant_recruiter`.`USER_ID`
            WHERE `applicant_recruiter`.`Applicant_Access`='Y'";
            $sql.= $search!=""?"AND ((CONCAT(`First_Name`,' ',`Last_Name`)) LIKE '%".$search."%' OR `Mobile_No` LIKE '%".$search."%')":"";
            $sql.= ($from_date AND $to_date)!=""?" AND (`applicant_recruiter`.`RECORD_INSERTED_DTTM` BETWEEN '{$from_date}' AND '{$to_date}')":"";
            $sql.= $status!=""?"AND `applicant_recruiter`.`STATUS_ASP`='$status'":"";
            $sql.= "GROUP BY `applicant_recruiter`.`ID`";
            $query = $this->db->query($sql);
            return $query->result_array();
        }
        public function totalAspirant(){
            $this->db->select('COUNT(Applicant_Access)')->from('applicant_recruiter')
            ->where('Applicant_Access','Y');
            $query = $this->db->get()->result_array();
            // print_r($query);die;
            return $query;
        }
        public function activeAspirant(){
            $cond = array('Applicant_Access'=>'Y','ACTIVE_STATUS'=>'Y');
            $this->db->select('COUNT(ACTIVE_STATUS)')->from('applicant_recruiter')
            ->where($cond);
            $query = $this->db->get()->result_array();
            // print_r($query);die;
            return $query;
        }
        public function getDetailAspirant($id,$user_id){
            $cond = array('applicant_recruiter.id'=>$id,'applicant_recruiter.USER_ID'=>$user_id);
            $this->db->select('*,asp_seniority.name')->from('applicant_recruiter')
            ->join('communication','communication.USER_ID = applicant_recruiter.USER_ID')
            ->join('asp_seniority','applicant_recruiter.Seniority = asp_seniority.id')
            ->join('user_profession','applicant_recruiter.USER_ID = user_profession.USER_ID')
            ->join('user_education','applicant_recruiter.USER_ID = user_education.USER_ID')
            ->where($cond);
            $query = $this->db->get()->result_array();
            // print_r($query);die;
            return $query;
        }
        public function getAspProfileList($user_id){
            $cond = array('user_profile_temp.USER_ID'=>$user_id);
            $this->db->select('user_profile_temp.Profile_Id, key_profile.Source_Key,user_profile_temp.Is_Primary')->from('user_profile_temp')
            ->join('key_profile','user_profile_temp.Profile_Id = key_profile.ID')
            ->where($cond);
            $query = $this->db->get()->result_array();
            // print_r($query);die;
            return $query;
        }
        public function getAspProfileDetail($user_id,$proId){
            if($proId==''){
                $cond = array('user_profile_temp.USER_ID'=>$user_id,'user_profile_temp.Is_Primary'=>'P');
                $this->db->select('*,profile_temp.HTML_Sample_Form')->from('user_profile_temp')
                ->join('key_profile','user_profile_temp.Profile_Id = key_profile.ID')
                ->join('profile_temp','user_profile_temp.Profile_Id = profile_temp.Profile_Name')
                ->where($cond);
                $query = $this->db->get()->result_array();
            }
            else{
                $cond = array('user_profile_temp.USER_ID'=>$user_id,'user_profile_temp.Profile_Id'=>$proId);
                $this->db->select('*,profile_temp.HTML_Sample_Form')->from('user_profile_temp')
                ->join('key_profile','user_profile_temp.Profile_Id = key_profile.ID')
                ->join('profile_temp','user_profile_temp.Profile_Id = profile_temp.Profile_Name')
                ->where($cond);
                $query = $this->db->get()->result_array();
            }
            // print_r($query);die;
            return $query;
        }
    }


?>