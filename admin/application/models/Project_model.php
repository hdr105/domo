<?php


class Project_model extends CI_Model
{
	private $table = "projects";

	public function __construct()
	{
		parent::__construct();
	}


	public function add_project($data){

		extract($data);

		$query = "INSERT INTO `".$this->table."` (`project_name`,`project_category`,`project_subcategory`,`project_image`,`project_description`,`title`,`subtitle`,`other_image`,`description`,`related_products`) VALUES('".$project_name."','".$project_category."','".$project_subcategory."','".$project_image."','".$project_description."','".$title."','".$subtitle."','".$other_image."','".$description."', '".$related_products."' )";


		$res =  $this->db->query($query);

		$project_id = $this->db->insert_id();

		if ($related_products != "") {
			$this->manage_related_products($related_products,$project_id);
		}

		

		

		if($res){

			return true;
		}

		return false;



	}


	public function get_projects($project_id = '', $single_row = false) {

		$this->db->select("*,cp.cat_id as parent_cat_id,cp.category_name as parent_cat_name,cs.cat_id as sub_cat_id,cs.category_name as sub_cat_name");
		$this->db->from($this->table);

		$this->db->join('categories cp', 'cp.cat_id=projects.project_category');
		$this->db->join('categories cs', 'cs.cat_id=projects.project_subcategory');

		$where = array();

		if ($project_id != "") {

			$where['project_id'] = $project_id;
		}

		$this->db->where($where);

		if ($single_row) {
			$res = $this->db->get()->row();
		}else{
			$this->db->order_by("project_id", "asc");
			$res = $this->db->get()->result();
		}

		return $res;
		


	}


	public function update_project($data){

		$project_id = $data['project_id'];


		$this->db->where('project_id',$project_id);
		
		unset($data['project_id']);
		unset($data['old_project_image']);
		unset($data['old_other_image']);

		$res = $this->db->update($this->table, $data);

		if ($data['related_products'] != "") {
			$this->manage_related_products($data['related_products'],$project_id);
		}
		return $res;
	}


	function manage_related_products($related_products,$project_id)
	{
		$related_products = json_decode($related_products);

		if (!empty($related_products)) {
			
			foreach ($related_products as $key => $value) {
				
				$products = $this->db->get("products")->result();

				foreach ($products as $pk => $pv) {
					$related_projects  = array();

					if ($pv->related_projects != "") {

						$related_projects = json_decode($pv->related_projects);
					}

					if (!in_array($project_id,$related_projects) && $pv->product_id == $value)
					{
						array_push($related_projects, $project_id);
					
					}elseif (in_array($project_id,$related_projects) && !in_array($pv->product_id, $related_products)) {

						foreach (array_keys($related_projects, $project_id) as $key) {
						    unset($related_projects[$key]);
						}
					}

					$related_projects = json_encode($related_projects);

					$this->db->where('product_id',$pv->product_id);
					$this->db->set("related_projects",$related_projects);
					$this->db->update("products");
				}

				


			}
		}
	}



}



?>