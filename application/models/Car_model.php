
<?php

class Car_model extends CI_Model
{
    private $table = "car";

     public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function index() {
        $query = $this->db->get('table_name');
        return $query->result();
    }

    function save() {
        $this->db->insert('car', $this);
    }

    function all() {
        return $this->db->get($this->table)->result();
    }

    function get() {
        $this->db->get($this->table);
    }
}
?>