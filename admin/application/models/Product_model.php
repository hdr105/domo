<?php


class Product_model extends CI_Model
{
	private $table = "products";

	public function __construct()
	{
		parent::__construct();
	}


	public function add_product($data){

		extract($data);

		$query = "INSERT INTO `".$this->table."` (`product_name`,`product_category`,`product_subcategory`,`product_image`,`product_description`,`title`,`subtitle`,`other_image`,`description`,`product_badges`) VALUES('".$product_name."','".$product_category."','".$product_subcategory."','".$product_image."','".$product_description."','".$title."','".$subtitle."','".$other_image."','".$description."','".$product_badges."' )";


		$res =  $this->db->query($query);

		if($res){

			return true;
		}

		return false;



	}


	public function get_products($product_id = '', $single_row = false) {

		$this->db->select("*,cp.cat_id as parent_cat_id,cp.category_name as parent_cat_name,cs.cat_id as sub_cat_id,cs.category_name as sub_cat_name");
		$this->db->from($this->table);

		$this->db->join('categories cp', 'cp.cat_id=products.product_category');
		$this->db->join('categories cs', 'cs.cat_id=products.product_subcategory');

		$where = array();

		if ($product_id != "") {

			$where['product_id'] = $product_id;
		}

		$this->db->where($where);

		if ($single_row) {
			$res = $this->db->get()->row();
		}else{
			$this->db->order_by("product_id", "asc");
			$res = $this->db->get()->result();
		}

		return $res;
		


	}


		public function update_product($data){


		$this->db->where('product_id',$data['product_id']);
		
		unset($data['product_id']);
		unset($data['old_product_image']);
		unset($data['old_other_image']);

		$res = $this->db->update($this->table, $data);

		return $res;
	}



}



?>