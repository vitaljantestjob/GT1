<?php
	class WithoutJoin extends CI_Controller {

  function req_info_parse($str) {
    print_r(json_decode($str));
    return json_decode($str);
  }

	public function view($page = 'without_join')
	{
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
        show_404();
    }

    $this->load->model('Withoutjoin_model');

    $buyers = $this->Withoutjoin_model->db_get('buyers');
    $requests = $this->Withoutjoin_model->db_get('requests');
    $requests_info = $this->Withoutjoin_model->db_get('requests_info');

    $res = [];
    foreach ($requests as $item) {
      $buyer_name = 'undefined buyer';
      foreach ($buyers as $buyer) {
        if ($buyer->buyer_id == $item->buyer_id) $buyer_name = $buyer->name;
      }

      $request_info = '';
      foreach ($requests_info as $request) {
        if ($request->request_id == $item->request_id) $request_info = $request->info;
      }
      $request_info = $request_info == '' ? 'undefined request info' : $this->req_info_parse($request_info);
      $res[] = ['request_id' => $item->request_id, 'sum' => $item->sum, 'date' => $item->date, 'buyer_name' => $buyer_name, 'request_info' => $request_info];
    }

    $data['table'] = $res;
    $data['title'] = "Without join";

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);	}
}