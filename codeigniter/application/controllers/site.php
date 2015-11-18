<?php



class Site extends CI_Controller {
    
    
    public function index() {
        
        $this->load->model('site_model');
        $this->load->view('home');
        
    }
        
    
    public function processForm() {
        
        $temp['search'] = $this->input->post("beerSearch");
        
        $temp = preg_replace('/\s+/', '%20', $temp['search']);
        
        $this->load->model('site_model');
        
        $json = $this->site_model->getSearch($temp);
        
        $data['search'] = json_decode($json);

        $this->load->view('display', $data);   
    }
  
}