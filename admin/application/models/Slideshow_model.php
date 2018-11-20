<?php


class Slideshow_model extends CI_Model
{
	private $table = "slideshow";

	public function __construct()
	{
		parent::__construct();
	}


	public function add_slide($data){

		extract($data);

		$query = "INSERT INTO `".$this->table."` (`text_1`,`text_2`,`text_3`,`text_link`,`slide_image`) VALUES('".$text_1."','".$text_2."','".$text_3."','".$text_link."','".$slide_image."' )";


		$res =  $this->db->query($query);

		if($res){

			return true;
		}

		return false;



	}


	public function get_slideshow($slide_id = '', $single_row = false) {

		$this->db->select("*");
		$this->db->from($this->table);

		$where = array();

		if ($slide_id != "") {

			$where['slide_id'] = $slide_id;
		}

		$this->db->where($where);

		if ($single_row) {
			$res = $this->db->get()->row();
		}else{
			$this->db->order_by("slide_id", "asc");
			$res = $this->db->get()->result();
		}

		return $res;
		


	}


		public function update_slideshow($data){


		$this->db->where('slide_id',$data['slide_id']);
		
		unset($data['slide_id']);
		unset($data['old_slide_image']);

		$res = $this->db->update($this->table, $data);

		return $res;
	}



}



?>