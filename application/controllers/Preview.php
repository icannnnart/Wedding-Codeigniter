<?php
error_reporting(0);

defined('BASEPATH') OR exit('No direct script access allowed');

class Preview extends CI_Controller {

	private $secret_key = "QUpMQjIwMjQhIUJFS0FTSQ==";
	
	public function __construct(){
		parent::__construct();
		$this->load->model('M_api');
		if($this->session->userdata('logged_in') == 2){
			redirect('https://t.me/');
		}
	}
	
	public function index()
	{
		$namatamu = urldecode(htmlspecialchars($_GET['to']));
		$data['nama_tamu'] = $namatamu;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$attendance = $this->input->post('attendance');
			$greeting = $this->input->post('greeting');
			$datas = array(
				'from' => $namatamu,
				'name' => $name,
				'number_phone' => $phone,
				'attendance' => $attendance,
				'greeting' => $greeting,
				 );
			$hasil = $this->M_api->insert_All('tbl_rsvp',$datas);
			if ($hasil) {
				echo json_encode(['status' => 1, 'message' => 'Terima kasih. Sudah mengisi RSVP dan pesan kamu telah tersampaikan']);
			} else {
				echo json_encode(['status' => 5, 'message' => 'Mohon maaf server sedang error']);
			}
			
			
		} else {
			if ($this->session->userdata('role') != NULL) {
				redirect(site_url('auth/otp'));
			} else {
				if (isset($_POST['number'])) {
					$nope = $_POST['number'];
					$this->session->set_userdata(['role' => $nope,'session_expiration' => time() + 3600]);
					redirect(site_url('auth/otp'));
				} else {
					$data['comments'] = $this->db->query("SELECT * FROM `wedding`.`tbl_rsvp` ORDER BY `created_at` DESC")->result_array();
					$this->load->view('dashboard/main/main',$data);
				}
			}
		}		
		
	}
}
