<?php
class AdminModel extends CI_Model 
{
    //base 

    public function get_All()
    {
        $query = $this->db->get('admins');
        return $query->    result_array();
    }

    public function authentification($nom, $password){
        $query = $this->db->query('SELECT nom,password FROM Admins');
        foreach($query->result_array() as $row){
        if($row['nom'] == $nom && $row['password'] == $password)
            return 1;
        }
        return 0;
    }

    public function get_byID($id)
    {
        return $this->db->get_where('admins',array('ID' => $id))->result_array();
    }
	 public function get_LP($login,$pass)
    {
        return $this->db->get_where('admins',array('nom' => $login,'password'=>$pass))->result_array();
    }

    public  function insert($nom,$prenom,$age,$pass)
    {
            $this->nom = $nom;
			$this->prenom = $prenom;
			$this->age = $age;
			$this->pass = $pass;
			  $this->db->insert('admins', $this);
    }

    public function update($id,$prenom,$nom,$age,$pass)
    {
			$this->nom = $nom;
			
			$this->pass = $pass;

            $this->db->where('id',$id);
            $this->db->update('admins',$this);
    }

    public function delete($id)
    {
            $this->db->where('id', $id);
            $this->db->delete('admins');
    }
}