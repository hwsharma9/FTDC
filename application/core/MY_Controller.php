<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('common_model','common');
		$this->config->load('custom');
		$this->lang->load('user');
		$this->load->library('email');
		$this->load->library('image_lib');
		$this->load->library('pagination');
		$segment = $this->uri->segment(1);
		
		/* Protact User to come back after logout code START */
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Pragma: no-cache');

		$this->type = $this->session->userdata('type');
	}

	public function loadAdminHtml($pagename='',$title='',$data=array())
	{
		$data['head_title'] = $title;
		$is_admin_logged_in = $this->session->userdata('is_admin_logged_in');
		if(!isset($is_admin_logged_in) || $is_admin_logged_in != true)
		{
			$header = 'admin_header';
		}else{
			$header = 'admin_header';
		}
		$this->load->view($header,$data);
		if(!isset($is_admin_logged_in) || $is_admin_logged_in != true)
		{
		}else{
			$sidebar = 'admin_sidebar';
			$this->load->view($sidebar,$data);
		}
		$this->load->view($pagename,$data);
		$this->load->view('admin_footer');
	}

	public function loadCenterHtml($pagename='',$title='',$data=array())
	{
		$data['head_title'] = $title;
		$is_center_logged_in = $this->session->userdata('is_center_logged_in');
		if(!isset($is_center_logged_in) || $is_center_logged_in != true)
		{
			$header = 'admin_header';
		}else{
			$header = 'admin_header';
		}
		$this->load->view($header,$data);
		if(!isset($is_center_logged_in) || $is_center_logged_in != true)
		{
		}else{
			$sidebar = 'center_sidebar';
			$this->load->view($sidebar,$data);
		}
		$this->load->view($pagename,$data);
		$this->load->view('admin_footer');
	}
} 