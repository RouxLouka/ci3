<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_kuser extends CI_Model
{
    private $table = "user";
 
    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}