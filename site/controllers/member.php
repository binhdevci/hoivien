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
						if(!in_array($id_member,$array_person)){
							array_push($array_person,$id_member);
						}
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
		if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
			if(isset($_POST['submit'])){
				$data =$_POST;
				$check_input = $this->check_input_change_pass($data);
				if($check_input['flag'] ==true){
					$id = $_SESSION['id_member'];
					$data_update['lb_password'] = $data['pass_new'];
					if($this->common->update_data('tt_member',$data_update,'id_member',$id)){
						$data_res[] = 'Đổi mật khẩu thành công!';
					}else{
						$data_res[] = 'Đổi mật khẩu bị lỗi!';
					}
					$this->pre_message = $data_res;
				}else{
					
					$this->pre_message = $check_input['message'];
				}
			}
			$data = array();
			$data['message'] = $this->pre_message;
			$this->_templates['page'] = 'member/change_pass_view';
			$this->site_library->load($this->_templates['page'],$data);	
		}else{
			redirect('/');
		}
		
		
	}
	function check_input_change_pass($data){
		$flag = true;
		$error = array();
		if(trim($data['pass_current'])==""){
			$flag = false;
			$error[] = 'Yêu cầu nhập mật khẩu hiện tại!';	
		}else{
			$rs = $this->common->check_pass_current(trim($data['pass_current']));
			if(count($rs)>0){
			}else{
				$flag = false;
				$error[] = 'Mật khẩu hiện tại không đúng!';
			}
		}
		if(trim($data['pass_new'])==""){
			$flag = false;
			$error[] = 'Yêu cầu nhập mật khẩu mới!';
		}
		if(trim($data['pass_confirm'])==""){
			$flag = false;
			$error[] = 'Yêu cầu nhập lại mật khẩu mới!';
		}
		if(trim($data['pass_new'])!=""&&(trim($data['pass_new'])!=trim($data['pass_confirm']))){
			$flag = false;
			$error[] = 'Yêu cầu nhập khẩu giống nhau!';
		}
		$data_chech['flag'] =  $flag;
		$data_chech['message'] =  $error;
		return $data_chech;
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
