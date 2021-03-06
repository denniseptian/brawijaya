<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontcontact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_frontcontact');
		date_default_timezone_set("Asia/Jakarta");
		
	}

	public function index()
	{
		$data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
            );
		$this->load->view('front/header');
		$this->load->view('front/contact', $data);
		$this->load->view('front/footer');
	}

	public function save()
	{
		$recaptcha = $this->input->post('g-recaptcha-response');
		if (!empty($recaptcha)) {
			$response = $this->recaptcha->verifyResponse($recaptcha);
			if (isset($response['success']) and $response['success'] === true) {
				$id_contact = time();
				$name = $this->input->post('contact_name');
				$email = $this->input->post('contact_email');
				$subject = $this->input->post('contact_subject');
				$message = $this->input->post('contact_message');
				$date = date("Y/m/d");

				$data = array(
					'id_contact' => $id_contact,
					'name' => $name,
					'email' => $email,
					'subject' => $subject,
					'message' => str_replace('<br />', "\n", $message),
					'date' => $date,
					'star' => 0
					);
				$this->m_frontcontact->save($data);
				redirect('home');
			}
		}
		redirect('frontcontact');
	}
}

/* End of file frontcontact.php */
/* Location: ./application/controllers/frontcontact.php */