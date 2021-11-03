<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_kadmin extends CI_Model
{
    private $table = "admin";

    public $id;
    public $email;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            
            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required']
        ];
    }
 
    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}