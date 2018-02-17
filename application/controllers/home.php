<?php 

class Home extends CI_Controller{
	
	public function index(){
		$data['main_view'] = 'home_view';
		$this->load->view('layouts/main_layout', $data);
	}

	public function gallery_view()
	{
		# code...
		$data['main_view'] = 'users/videos_gallery_view';
		$this->load->view('layouts/custom_layout', $data);
	}
}
?>