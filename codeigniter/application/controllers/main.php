<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('');
	}
	public function registration()
	{
		$this->load->view('registration');
	}

	public function regist()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("Password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$pass=$this->input->post("Password");
			$encpass=$this->mainmodel->encpassword($pass);
		$a=array("name"=>$this->input->post("name"),
					"address"=>$this->input->post("address"),
					"gender"=>$this->input->post("gender"),
					"age"=>$this->input->post("age"),
					"email"=>$this->input->post("email"),
					"Password"=>$encpass);
		$this->mainmodel->regist($a);
		redirect(base_url().'main/registration');
	}
	}
	public function dataview()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->view();
		$this->load->view('dataview',$data);
	}
	public function updatedetails()
	{
		$a=array("name"=>$this->input->post("name"),
					"address"=>$this->input->post("address"),
				"gender"=>$this->input->post("gender"),
			"age"=>$this->input->post("age"),
			"email"=>$this->input->post("email"));
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$data['user_data']=$this->mainmodel->singledata($id);
							$this->mainmodel->singleselect();
							$this->load->view('dataview',$data);
							if($this->input->post("update"))
							{
								$this->mainmodel->updatedetails($a,$this->input->post("id"));
								redirect('main/dataview','refresh');
							}
	}
	public function deletedetails()
	{
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->deletedetails($id);
		redirect('main/dataview','refresh');
	}
	public function viewdata()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->viewdata();
		$this->load->view('viewdata',$data);

	}
	public function approve()
	{
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->approve($id);
		redirect('main/viewdata','refresh');
	}
	public function reject()
	{
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->reject($id);
		redirect('main/viewdata','refresh');
	}
	public function login()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->login();
		$this->load->view('login',$data);
	}
	public function log()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("emailid","emailid",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			
			$this->load->model('mainmodel');
			$email=$this->input->post("emailid");
			$pass=$this->input->post("password");
			$rslt=$this->mainmodel->selectpass($email,$pass);
			if($rslt)
			{
				$id=$this->mainmodel->getuserid($email);
				$user=$this->mainmodel->getuser($id);
				$this->load->library(array('session'));
				$this->session->set_userdata(array('session'));
				$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status));
				if($_SESSION['status']=='1')
				{
					redirect(base_url().'main/view');
					
				}
				else{
					echo "waiting for approval";
				}
			}
			else{
				echo "invalid user";
			}
		}
			else
			{
				redirect('main/log','refresh');
			}

	}
	}

