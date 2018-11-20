<?php


class Badge_model extends CI_Model
{
	private $table = "badges";

	public function __construct()
	{
		parent::__construct();
	}


	public function add_badge($data){

		extract($data);

		$query = "INSERT INTO `".$this->table."` (`badge_name`,`badge_image`) VALUES('".$badge_name."','".$badge_image."')";


		$res =  $this->db->query($query);

		if($res){

			return true;
		}

		return false;



	}


	public function get_badges($badge_id = '', $single_row = false) {

		$this->db->select("*");
		$this->db->from($this->table);

		$where = array();

		if ($badge_id != "") {

			$where['badge_id'] = $badge_id;
		}

		$this->db->where($where);

		if ($single_row) {
			$res = $this->db->get()->row();
		}else{
			$this->db->order_by("badge_id", "asc");
			$res = $this->db->get()->result();
		}

		return $res;
		


	}


		public function update_badge($data){


		$this->db->where('badge_id',$data['badge_id']);
		
		unset($data['badge_id']);
		unset($data['old_badge_image']);

		$res = $this->db->update($this->table, $data);

		return $res;
	}



}



?>