<?php
class ClientModel extends CI_Model
{
    //base

    public function get_All()
    {
        $query = $this->db->get('user');
        return $query->    result_array();
    }

    public function authentification($email, $password){
        $query = $this->db->query('SELECT Nom,Password FROM user');
        foreach($query->result_array() as $row){
        if($row['Nom'] == $email && $row['Password'] == $password)
            return 1;
        }
        return 0;
    }

    public function get_byID($id)
    {
        return $this->db->get_where('user',array('ID' => $id))->result_array();
    }
	 public function get_LP($login,$pass)
    {
        return $this->db->get_where('user',array('Nom' => $login,'Password'=>$pass))->result_array();
    }

    public  function insert($nom,$pass)
    {
            $this->nom = $nom;
			$this->password = $pass;
			  $this->db->insert('user', $this);
    }

    public function update($id,$nom,$pass)
    {
			$this->nom = $nom;
			$this->pass = $pass;

            $this->db->where('id',$id);
            $this->db->update('client',$this);
    }

    public function delete($id)
    {
            $this->db->where('id', $id);
            $this->db->delete('client');
    }
}
