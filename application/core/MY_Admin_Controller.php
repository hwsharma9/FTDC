<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Admin_Controller extends MY_Controller {

	function __construct() {
		
		parent::__construct();
		$data = array();
		$this->load->model(A."/admin_model","admin");

		//$this->load->library('csvimport');

		$this->adminid = $this->session->userdata('adminid');
		$this->admin_name = $this->session->userdata('admin_name');
		$this->admin_type = $this->session->userdata('admin_type');
		//$this->authority = $this->admin->getAuthorityArray();

		//$this->perPage = ($this->session->userdata("bbs_admin_length")?$this->session->userdata("bbs_admin_length"):10);
	}

	public function addAdmin()
	{
		if(isset($_POST)){
			$_POST['adminid'] = 'FTDC'.strtotime(date('Y-m-d H:i:s'));
			$_POST['plain_password'] = $_POST['password']; 
			$_POST['password'] = md5($_POST['password']); 
			$_POST['admin_type'] = 'subadmin';

			$res = $this->common->insertData('admin',$_POST);
			if($res){
				$this->session->set_flashdata('message','Admin Added Successfully.');
				redirect(base_url(A."/admin-list"));
			}else{
				$this->session->set_flashdata('emessage','Something Went Wrong Please try again...');
				redirect(base_url(A."/add-admin"));
			}
		}
	}

	public function editAdminAction()
	{
		if(isset($_POST)){
			$id = $_POST['id'];
			unset($_POST['id']);
			$res = $this->common->updateData('admin',$_POST,array("id"=>$id));
			if($this->db->affected_rows()){
				$this->session->set_flashdata('message','Admin Updated Successfully.');
				redirect(base_url(A."/admin-list"));
			}else{
				$this->session->set_flashdata('emessage','Something Went Wrong Please try again...');
				redirect(base_url(A."/edit-admin"));
			}
		}
	}
        
}