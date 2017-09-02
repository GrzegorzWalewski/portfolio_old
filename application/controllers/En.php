<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class En extends CI_Controller {

	    public function __construct()
        {
                parent::__construct();
                		$this->load->helper('url');
        }
        public function index()
        {
            $this->load->view('header');
            $this->load->view('en/menu');
        	$this->load->view('en/start_page');
        }
         public function about_me()
        {
            $this->load->view('header');
            $this->load->view('en/menu');
            $this->load->view('en/about_me');
        }
         /*public function my_projects()
        {
            $this->load->view('en/projects');
        }*/
         public function standards()
        {
            $this->load->view('header');
            $this->load->view('en/menu');
            $this->load->view('en/standards');
        }
         public function price_list()
        {
             if($this->input->post('name')!="")
            {
                $this->load->model('default_Model');
                $this->default_Model->mess($this->input->post('name'),$this->input->post('mail'),$this->input->post('mess'));
            }
            $this->load->view('header');
            $this->load->view('en/menu');
            $this->load->view('en/price_list');
        }
}
