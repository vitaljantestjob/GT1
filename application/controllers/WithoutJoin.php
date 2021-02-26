<?php
	class WithoutJoin extends CI_Controller {

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

    $buyers_arr = [];
    foreach ($buyers as $val) {
      $buyers_arr [$val->buyer_id] = $val->name;
    }

    $requests_info_arr = [];
    foreach($requests_info as $val) {
      $requests_info_arr [$val->request_id] = json_decode($val->info);
    }

    foreach ($requests as $val ) {
      $buyer = isset($buyers_arr[$val->buyer_id]) ? $buyers_arr[$val->buyer_id] : 'undefined';
      $request_info = isset($requests_info_arr[$val->request_id]) ? $requests_info_arr[$val->request_id] : 'undefined';
      $res[$val->request_id] = ['buyer_id'=>$val->buyer_id, 'buyer'=>$buyer, 'sum'=>$val->sum, 'date'=>$val->date, 'request_info'=>$request_info];
    }
/*
    $res = [];
    foreach ($requests as $item) {
      $buyer_name = 'undefined buyer';
      foreach ($buyers as $buyer) {
        if ($buyer->buyer_id == $item->buyer_id) {
          $buyer_name = $buyer->name;
          break;
        }
      }

      $request_info = '';
      foreach ($requests_info as $request) {
        if ($request->request_id == $item->request_id) {
          $request_info = $request->info;
          break;
        }
      }
      $res[] = ['request_id' => $item->request_id, 'sum' => $item->sum, 'date' => $item->date, 'buyer_name' => $buyer_name, 'request_info' => json_decode($request_info)];
    }
*/
    $data['table'] = $res;
    $data['title'] = "Without join";
    $data['home'] = '+';

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);	}
}
