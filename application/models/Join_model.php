<?php
  
  class Join_model extends CI_Model {
    
    public function __construct() {
      $this->load->database();
    }

    public function db_get () {
      $this->db->select('*, requests.request_id as r_id from (requests left join buyers on requests.buyer_id = buyers.buyer_id) 
      left join requests_info on requests_info.request_id = requests.request_id ;
      ');
      $query = $this->db->get();
      return $query->result();
    }
  }
?>


