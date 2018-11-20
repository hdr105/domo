<?php


function upload_files($file,$input_name,$path){

	$ci = &get_instance();

	if ($file['error'] != 4 ) {

		$file['name'] = str_replace(" ", "", $file['name']);
		$config['upload_path']          = $path;
		$config['allowed_types']        = '*';
		$file_name = rand().$file['name'];
		$config['file_name'] = $file_name;

		$ci->load->library('upload');
		$ci->upload->initialize($config);

		if ( $ci->upload->do_upload($input_name))
		{
			return $file_name;
		}else{

			$error = array('error' => $ci->upload->display_errors());

			print_r($error);	
		}

	}



	return false;
}




?>