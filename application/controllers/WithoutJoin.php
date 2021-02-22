<?php
	class WithoutJoin extends CI_Controller {

	public function view($page = 'without_join')
	{
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
        show_404();
    }

    $data['title'] = "Without join";

    $this->load->view('templates/header', $data);

    $this->load->model('Withoutjoin_model');
    $data['buyers'] = $this->Withoutjoin_model->db_get('buyers');
    $data['requests'] = $this->Withoutjoin_model->db_get('requests');
    $data['requests_info'] = $this->Withoutjoin_model->db_get('requests_info');
    $this->load->view('pages/'.$page, $data);

    $this->load->view('templates/footer', $data);	}
}