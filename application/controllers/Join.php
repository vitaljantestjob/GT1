<?php
	class Join extends CI_Controller {

	public function view($page = 'join')
	{
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
        show_404();
    }

    $this->load->model('join_model');
    $select = $this->join_model->db_get();

    $data['title'] = "Uses join";
    $data['table'] = $select;
    $data['home'] = '+';

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);	
  }
}