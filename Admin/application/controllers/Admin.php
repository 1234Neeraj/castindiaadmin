<?php

class Admin extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_Model');
    }

    public function index(){
        $this->load->view('Admin/Dashboard');
    }

    public function aspirant(){
        // $search = '';
        // $to_date = '2021-09-30';
        // $from_date= '2021-09-27';
        // $status = '';
        // $data['result'] = $this->Admin_Model->filterAspirantList($search, $from_date, $to_date, $status);
        // print_r($data);die;
        // $data['result'] = $this->Admin_Model->aspirantList();
        $data['totalcount'] = $this->Admin_Model->totalAspirant();
        $data['activecount'] = $this->Admin_Model->activeAspirant();
        $this->load->view('Admin/Aspirant',$data);
    }

    public function employer(){
        $this->load->view('Admin/Employer');
    }
    public function employerverification(){
        $this->load->view('Admin/Employerverification');
    }
    public function loadTable(){
        $search = $_REQUEST['data'];
        $to_date = $_REQUEST['endDate'];
        $from_date= $_REQUEST['startDate'];
        $status = $_REQUEST['formStatus'];;
        $table=$_REQUEST['tablephp'];
        $model=$_REQUEST['model'];
        $data['result'] = $this->Admin_Model->$model($search, $from_date, $to_date, $status);
        $this->load->view('Admin/'.$table,$data);
    }
    public function getAspirantDetail($id,$user_id){
        $id = base64_decode($id);
        $user_id = base64_decode($user_id);
        // echo $id,' ', $user_id;die;
        $data['result'] = $this->Admin_Model->getDetailAspirant($id, $user_id);
        $data['list'] = $this->Admin_Model->getAspProfileList($user_id);
        // $data['profileD'] = $this->Admin_Model->getAspProfileDetail($user_id);
        // print_r($profileList);die;
        $this->load->view('Admin/AspirantDetail',$data);
    }
    public function loadProTempDetail(){
        $user_id = $_REQUEST['userid'];
        $proId= $_REQUEST['proId'];
        $table=$_REQUEST['tablephp'];
        $model=$_REQUEST['model'];
        $data['prodetail'] = $this->Admin_Model->$model($user_id,$proId);
        $data['temp'] = $data['prodetail'][0]['HTML_Sample_Form'];
        // print_r($data);die;
        $this->load->view('Admin/'.$table,$data);
    }
    public function helpPage(){
        $this->load->view('Admin/Helppage');
    }

}

?>