<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
        parent::__construct();

        $this->load->model('m_post');
        $this->load->model('login_log');
        $this->load->model('m_visitors');
        
        if(!isset($_SESSION)){
            session_start();
        }
        $this->load->model(array('Ulogin'));
        if ($this->session->userdata('u_name')) {
        }
        else{
        	redirect('login');
        }
    }

	public function index(){
		$data['data_get'] = $this->m_post->view();
		$log['log'] = $this->login_log->daily();
		$this->load->view('back/backheader');
		$this->load->view('back/backdashboard',$data, $log);
		$this->load->view('back/backfooter');
	}
	public function newpost(){
		$this->load->view('back/backheader');
		$this->load->view('back/newpost');
		$this->load->view('back/backfooter');
	}
	public function userset(){
		$this->load->view('back/backheader');
		$this->load->view('back/userset');
		$this->load->view('back/backfooter');
	}
	public function dashboard(){
		$data['visitors_all'] = $this->m_visitors->getall();
		$data['visitors_month'] = $this->m_visitors->getThisMonth();
		$data['visitors_week'] = $this->m_visitors->getThisWeek();
		$data['visitors_day'] = $this->m_visitors->getThisDay();
		$data['postcount'] = $this->m_post->viewPostCount();
		$data['log'] = $this->login_log->daily();
		
		$this->load->view('back/backheader');
		$this->load->view('back/backdashboard',$data);
		$this->load->view('back/backfooter');
	}
	public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
    public function postlist(){
    	$data['data_get'] = $this->m_post->view();
    	$this->load->view('back/backheader');
		$this->load->view('back/postlist', $data);
		$this->load->view('back/backfooter');
    }
    public function galery(){
    	$this->load->view('back/backheader');
    	$this->load->view('back/galery');
    	$this->load->view('back/backfooter');
    }
}