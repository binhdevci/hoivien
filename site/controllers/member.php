<?php
class Member extends Controller{
	protected $_templates;
	function Member(){
		parent::Controller();
		@session_start();
		$this->pre_message = "";
		$this->load->model('common_model','common');
	}
	
	
	function index($lb_alias=''){
		$data = array();
		if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
			$rs = $this->common->get_person_member($_SESSION['id_member']);
			$array = array();
			for($i=1;$i<=12;$i++){
				$array_person = array();
				foreach($rs as $row){
					$field_id_member = 'id_member_lv'.$i;
					$id_member = (int)$row->$field_id_member;
					
					if($id_member >0){
					  array_push($array_person,$row);
					}
				}
				$array[$i] = $array_person;
				
			}
			$data['level'] = $array;
			$data['rs'] = $rs;
			$this->_templates['page'] = 'member/member_view';
			$this->site_library->load($this->_templates['page'],$data);
		}else{
			redirect('/');
		}
	}
	
	
	function changepass(){
		$data = array();
		
		$this->_templates['page'] = 'member/change_pass_view';
		$this->site_library->load($this->_templates['page'],$data);
	}
	function profile(){
		$data = array();
		
		$this->_templates['page'] = 'member/profile_view';
		$this->site_library->load($this->_templates['page'],$data);
	}
	function revenue(){
		$data = array();
		
		$this->_templates['page'] = 'member/revenue_view';
		$this->site_library->load($this->_templates['page'],$data);
	}
	
	function  item($lb_alias){
		$data = array();
		
		$this->_templates['page'] = 'page/page_view';
		$this->load->view($this->_templates['page'],$data);
		//$this->site_library->load($this->_templates['page'],$data);
	}
}
?>
