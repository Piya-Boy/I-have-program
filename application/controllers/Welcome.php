<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function login(){
		$this->User_model->login($_POST['username'], $_POST['password']);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('index');
	}

	public function index(){
		$ip_address = $this->input->ip_address();
		$this->User_model->insert_ip($ip_address);
		$data['work'] = $this->User_model->fetch_work();
		$data['game'] = $this->User_model->fetch_game();
		$data['title'] = "I have program";
		$this->load->view('layout/frontend/header', $data);
		$this->load->view('pages/frontend/index', $data);
		$this->load->view('layout/frontend/footer');
	}

	public function searching(){
		$data['title'] = $this->input->get('search');
		$data['searchs'] = $this->User_model->searching($_GET['search']);
		$this->load->view('layout/frontend/header', $data);
		$this->load->view('pages/frontend/searching', $data);
		$this->load->view('layout/frontend/footer');
	}

	public function download_details() {
		$data['title'] = "Download";
		$this->User_model->quantity($_GET['id']);
		$data['row'] = $this->User_model->download_details($_GET['id']);
		$this->load->view('layout/frontend/header', $data);
		$this->load->view('pages/frontend/download_details', $data);
		$this->load->view('layout/frontend/footer');
	}

	public function admin(){
		$data['title'] = "Admin";
		$data['count_user'] = $this->User_model->count_user();
		$data['list_download'] = $this->User_model->count_download();
		$data['data'] = $this->User_model->count_data();
		$data['count_ip'] = $this->User_model->count_ip();
		$data['fetch_contact'] = $this->User_model->fetch_contact();
		$data['sum_downloads'] = $this->User_model->sum_download();
		$this->load->view('layout/frontend/admin_header', $data);
		$this->load->view('pages/frontend/admin_index', $data);
		$this->load->view('layout/frontend/admin_footer');
	}

	public function admin_dow_list() {
		$data['title'] = "Download List";
		$row = $this->User_model->fetch_all();
		$type_name = $this->User_model->fetch_type_name();
		$file_sizes = $this->User_model->fetch_file_sizes();
		$file_types = $this->User_model->fetch_file_types();
		$data['fetch_contact'] = $this->User_model->fetch_contact();
		$data['file_sizes'] = $file_sizes;
		$data['file_types'] = $file_types;
		$data['type_name'] = $type_name;
		$data['fetch_all'] = $row;
		$data['data'] = $this->User_model->count_data();
		$this->load->view('layout/frontend/admin_header', $data);
		$this->load->view('pages/frontend/admin_dow_list', $data);
		$this->load->view('layout/frontend/admin_footer');
	}

	public function admin_types() {
		$data['title'] = "Types";
		$data['data'] = $this->User_model->count_data();
		$type_name = $this->User_model->fetch_type_name();
		$file_sizes = $this->User_model->fetch_file_sizes();
		$file_types = $this->User_model->fetch_file_types();
		$data['fetch_contact'] = $this->User_model->fetch_contact();
		$data['file_sizes'] = $file_sizes;
		$data['file_types'] = $file_types;
		$data['type_name'] = $type_name;
		$this->load->view('layout/frontend/admin_header', $data);
		$this->load->view('pages/frontend/admin_types', $data);
		$this->load->view('layout/frontend/admin_footer');
	}

	public function admin_contact() {
		$data['title'] = "Contacts";
		$data['data'] = $this->User_model->count_data();
		$data['fetch_contact'] = $this->User_model->fetch_contact();
		$data['contact'] = $this->User_model->contact_data($_GET['id']);
		$this->load->view('layout/frontend/admin_header', $data);
		$this->load->view('pages/frontend/admin_contact', $data);
		$this->load->view('layout/frontend/admin_footer');
	}

	public function admin_profile() {
		$data['title'] = "Profiles";
		$data['data'] = $this->User_model->count_data();
		$data['fetch_contact'] = $this->User_model->fetch_contact();
		$data['profile'] = $this->User_model->admin_data($_GET['id']);
		$this->load->view('layout/frontend/admin_header', $data);
		$this->load->view('pages/frontend/admin_profile', $data);
		$this->load->view('layout/frontend/admin_footer');	
	}

	public function how_to_fix_link() {
		$data['title'] = "วิธีแก้ลิงค์";
		$this->load->view('layout/frontend/header', $data);
		$this->load->view('pages/frontend/how_to_fix_link');
		$this->load->view('layout/frontend/footer');
	}

	public function report_dead_link() {
		$data['title'] = "แจ้งลิงค์เสีย";
		$this->load->view('layout/frontend/header', $data);
		$this->load->view('pages/frontend/report_dead_link');
		$this->load->view('layout/frontend/footer');
	}
	public function insert_download() {
		$this->User_model->insert_download($_POST);
	}

	public function update_download() {
		$this->User_model->update_download($_POST);
	}

	public function delete_download() {
		$this->User_model->delete_download($_POST['id']);
	}

	public function add_file_sizes() {
		$this->User_model->add_file_sizes($_POST);
	}

	public function add_file_types() {
		$this->User_model->add_file_types($_POST);
	}

	public function add_types() {
		$this->User_model->add_types($_POST);
	}

	public function up_file_sizes() {
		$this->User_model->up_file_sizes($_POST);
	}

	public function up_file_types() {
		$this->User_model->up_file_types($_POST);
	}

	public function up_types() {
		$this->User_model->up_types($_POST);
	}

	public function up_profile() {
		$this->User_model->up_profile($_POST);
	}

	public function delete_file_sizes() {
		$this->User_model->delete_file_sizes($_POST['id']);
	}

	public function delete_file_types() {
		$this->User_model->delete_file_types($_POST['id']);
	}

	public function delete_types() {
		$this->User_model->delete_types($_POST['id']);
	}

	public function contact() {
		$this->User_model->contact($_POST);
	}

	public function search() {
	$this->User_model->search_data($_POST['query']);
	} 
	
}

