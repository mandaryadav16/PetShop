<?php
class Detail extends Controller{
	function Page($id){
		$GetModel= $this->model("tbl_post");
		$GetDetailPage = $GetModel ->GetDetailPage($id);
		$GetRelatePost = $GetModel ->GetRelatePost(1);
		$this->view("master",["Page"=>"Page","PageName"=>"Page","Detail"=>$GetDetailPage,"Relate"=>$GetRelatePost]);
	}
}
?>