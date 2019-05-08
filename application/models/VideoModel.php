<?php
date_default_timezone_set('Africa/Lagos');
class VideoModel extends CI_Model
{
    //base

    public function get_All()
    {
        $query = $this->db->get('video');
        return $query->result_array();
    }



    public function get_byID($id)
    {
        return $this->db->get_where('video',array('Id' => $id))->result_array();
    }

    public function get_byCategorie($categorie){
      return $this->db->get_where('video',array('categorie' => $categorie))->result_array();
    }
    public function getCategorie(){
          return $this->db->get('categorie')->result_array();
    }

    		public function rechercher($datedebut,$datefin,$categorie,$p,$prixMax,$langue,$offset,$order,$asc){
        $datedebut=date("Y/m/d", strtotime($datedebut));
        $datefin=date("Y/m/d", strtotime($datefin));
    		$sql="select * from ( ";
        $sql.="select  * from video  where 1<2 ";
        if($datedebut!="1970/01/01"){
          $sql=$sql." and  DateSortie > '".$datedebut."'";
        }
    		if($datefin!="1970/01/01"){
    			$sql=$sql." and DateSortie < '".$datefin."'";
    		}
        if($categorie!=""){
          $sql=$sql." and  Categorie like '%".$categorie."%'  ";
        }
        if($langue!=""){
              $sql=$sql." and  Langue like '%".$langue."%'  ";
        }
        if($p!="0"){
          $sql=$sql." and note>=".$p ;
        }
        if($prixMax!="0"){
          $sql=$sql." and note<=".$prixMax ;
        }
    		if($order==""){
    			$order="Id";
    		}
        $sql=$sql."  Group by Id limit ".$offset.",3 )";

    		$sql=$sql." as ordered Order by ".$order." ".$asc." ";

        $query = $this->db->query($sql);
        $rep = $query->result_array();
        return $rep;
      }


      public  function insert($nom,$Categorie,$DateAjout,$DateSortie,$Note,$Image,$Lien,$Description,$Background,$Langue,$Streaming)
      {
        $this->load->library('upload');
              $this->nom = $nom;
        $this->categorie = $Categorie;
        $this->DateAjout = $DateAjout;
        $this->DateSortie = $DateSortie;
        $this->Note = $Note;
        $this->Image = $Image;
        $this->Lien = $Lien;
        $this->Description = $Description;
        $this->Background = $Background;
        $this->Langue = $Langue;
        $this->Streaming = $Streaming;

          $this->db->insert('video', $this);

      }

      public function update($id,$nom,$Categorie,$DateAjout,$DateSortie,$Note,$Image,$Lien,$Description,$Background,$Langue,$Streaming)
      {
        $this->load->library('upload');
              $this->nom = $nom;
        $this->categorie = $Categorie;
        $this->DateAjout = $DateAjout;
        $this->DateSortie = $DateSortie;
        $this->Note = $Note;
        $this->Image = $Image;
        $this->Lien = $Lien;
        $this->Description = $Description;
        $this->Background = $Background;
        $this->Langue = $Langue;
        $this->Streaming = $Streaming;

              $this->db->where('Id',$id);
              $this->db->update('video',$this);

      }

      public function delete($id)
      {
              $this->db->where('Id', $id);
              $this->db->delete('video');
      }
}
