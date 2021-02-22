<?
  
  class Withoutjoin_model extends CI_Model {
    
    public function __construct() {
      $this->load->database();
    }

    public function db_get ($table_name) {
      $query = $this->db->get($table_name);
      return $query->result();
    }
  }
?>