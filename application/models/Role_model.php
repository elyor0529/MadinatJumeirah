<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model
{

    //const
    const ENT_NAME = 'roles';

    //properties
    public $id;
    public $name;

    //members
    public function get_entities()
    {
        return $this->db->get(SELF::ENT_NAME)->result();
    }


    public function get_entity($id)
    {
        $this->db->where('id', $id);
        
        return $this->db->get(SELF::ENT_NAME)->result()[0]; 
    }

}
