<?php


class Category_model extends CI_Model
{

	private $table = "categories";
	
	public function __construct()
	{
		parent::__construct();
	}


	public function add_category($data){

		extract($data);

		$query = "INSERT INTO `".$this->table."` (`category_name`,`parent_category`,`category_image`,
		`category_description`,`category_scope`) VALUES('".$category_name."','".$parent_category."','".$category_image."',
		'".$category_description."', ".$category_scope." )";


		$res =  $this->db->query($query);

		if($res){

			return true;
		}

		return false;



	}


	public function update_category($data){


		$this->db->where('cat_id',$data['cat_id']);
		unset($data['cat_id']);
		unset($data['old_category_image']);
		$res = $this->db->update($this->table, $data);

		return $res;
	}


	public function get_categories($parent = false,$parent_category = 0,$cat_id = '', $single_row = false,$scope = "") {

		$this->db->select("*");
		$this->db->from($this->table);

		if (!empty($join)) {
			foreach ($join as $key => $value) {
				$this->db->join($key,$value);
			}
		}

		$where = array();

		if($parent){
			$where['parent_category'] = 0;
		}

		if ($parent_category != 0) {

			$where['parent_category'] = $parent_category;
		}

		if ($cat_id != "") {

			$where['cat_id'] = $cat_id;
		}

		if ($scope != "") {
			
			$where['category_scope'] = $scope;

		}


		$this->db->where($where);

		if ($single_row) {
			$res = $this->db->get()->row();
		}else{
			$this->db->order_by("cat_id", "asc");
			$res = $this->db->get()->result();
		}

		return $res;
		


	}


}



?>