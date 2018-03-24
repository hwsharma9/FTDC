<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends MY_Admin_Controller {

	Public function __construct() { 
		parent::__construct();
		$this->is_logged_in();		
	}

	public function is_logged_in(){

		$is_admin_logged_in = $this->session->userdata('is_admin_logged_in');
		if(!isset($is_admin_logged_in) || $is_admin_logged_in != true){

			redirect(base_url("admin-login"));
		}
	}

	public function index(){
		$this->loadAdminHtml("index","Home Page");
	}

	public function addNewAdminPage(){
		$this->loadAdminHtml("add-admin","Create Admin");
	}

	public function editAdminPage($id){
		$data['admin'] = $this->common->getsData("admin",array("id"=>$id));
		$this->loadAdminHtml("edit-admin","Edit Admin",$data);
	}

	public function adminListPage(){
		$data['adminlist'] = $this->common->getData('admin',array("admin_type"=>"subadmin"));
		$this->loadAdminHtml("admin-list","Admin List",$data);
	}

	public function docketNoListPage(){
		$this->loadAdminHtml("docket-no-list","Docket No. List");
	}

	public function addBookingPage(){
		$this->loadAdminHtml("add-booking","Add Booking");
	}

	public function bookingListPage(){
		$this->loadAdminHtml("booking-list","All Booking");
	}

	public function forwardingPage(){
		$this->loadAdminHtml("forwarding","Forwarding");
	}

	function logout(){

		$this->session->unset_userdata('email');
		$this->session->unset_userdata('adminid');
		$this->session->unset_userdata('admin_type');
		$this->session->unset_userdata('is_admin_logged_in');
		redirect(base_url("admin-login"));
	}
}
