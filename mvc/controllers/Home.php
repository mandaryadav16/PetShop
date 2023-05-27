<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{
	function Home(){
		$GetModel= $this->model("tbl_post");
		$GetPost = $GetModel ->GetPost();
		$this->view("master",["Page"=>"home","PageName"=>"Home","Post"=>$GetPost]);
	}
}
?>