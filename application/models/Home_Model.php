<?php 
class Home_Model extends CI_Model {

    function __construct() {

        parent::__construct();
    }
    
      public function booking($data)
    {
        $query = $this->db->insert('tbl_booking', $data);
        return $query;
    }
    
    public function subscribes($data)
    {
        $query = $this->db->insert('tbl_subscribers', $data);
        return $query;
    }
    
    public function get_in_touch($data)
    {
        $query = $this->db->insert('tbl_contact', $data);
       
        return $query;
    }
     public function partner_reg($data)
    {
        $query = $this->db->insert('tbl_contact', $data);
       
        return $query;
    }

}
?>