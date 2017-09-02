<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pl extends CI_Controller {

	    public function __construct()
        {
                parent::__construct();
                		$this->load->helper('url');
        }
        public function index()
        {
            $this->load->view('header');
            $this->load->view('pl/menu');
        	$this->load->view('pl/start_page');
        }
         public function o_mnie()
        {
            $this->load->view('header');
            $this->load->view('pl/menu');
            $this->load->view('pl/o_mnie');
        }
        /* public function moje_projekty()
        {
            $this->load->view('header');
            $this->load->view('pl/menu');
            $this->load->view('pl/projekty');
        }*/
         public function standardy()
        {
            $this->load->view('header');
            $this->load->view('pl/menu');
            $this->load->view('pl/standardy');
        }
         public function cennik()
        {
            if($this->input->post('name')!="")
            {
                $this->load->model('default_Model');
                $this->default_Model->mess($this->input->post('name'),$this->input->post('mail'),$this->input->post('mess'));
            }
            $this->load->view('header');
            $this->load->view('pl/menu');
            $this->load->view('pl/cennik');
        }
}