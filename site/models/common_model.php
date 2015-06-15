<?
class Common_model extends Model{
	function Common_model(){
		 parent::Model();
	}
	
	
	
	
	
    function insert_data($lb_table,$data){
        try{			
            $rs=$this->db->insert($lb_table, $data);
            return $rs;
        }catch(Exception $ex){
            return false;
        }
    }
	
	function  check_login($username){
		$sql="
		select *	from tt_member m
		where
		m.cd_member = ?";
		$query = $this->db->query($sql,array(formatInputStr($username)));
		return $query->row();
	}
	
	function get_all_paging($lb_table,$lb_primary_key,$num,$offset,$arr_search=array(),$arr_order=array()){
			if(isset($arr_search['key_search'])&&$arr_search['key_search']!=''){
					$this->db->like($arr_search['field_search'],$arr_search['key_search']);
			}
			if(isset($arr_order['order_key'])&&$arr_order['order_key']!=''){
				$this->db->order_by($arr_order['order_key'],$arr_order['order_type']);
			}
			else
				$this->db->order_by($lb_primary_key,'DESC');
		return $this->db->get($lb_table,$num,$offset)->result();
	}
	

	function get_parent($lb_table_foreign){
		return $this->db->get($lb_table_foreign)->result();
	}
	
	function get_parent_id($lb_table,$lb_foreign_key,$id){
		if($id>0){
			 $this->db->where($lb_foreign_key,$id);
			 $query = $this->db->get($lb_table);
			 return $query->result();
		}
		return array();
	}
	
	function get_num_rows($lb_table,$arr_search=array()){
        /*Begin search*/
        if(isset($arr_search['key_search'])&&$arr_search['key_search']!=''){
                $this->db->like($arr_search['field_search'],$arr_search['key_search']);
        }
        /*End search*/
		$query = $this->db->get($lb_table);
		return $query->num_rows();
	}
	
	function get_item($lb_table,$lb_primary_key,$id){
		 $this->db->where($lb_primary_key,$id);
		 $query = $this->db->get($lb_table);
		 return $query->row();
	}
	
    function update_data($lb_table,$data,$wh_field,$wh_value){
        try{
            $this->db->where($wh_field, $wh_value);
            $rs=$this->db->update($lb_table, $data);
            return $rs;
        }catch(Exception $ex){
            return false;
        }
    }
	function delete_data($table_name,$arr_where){
        try{
            $rs=$this->db->delete($table_name,$arr_where);
            return $rs;
        }catch(Exception $ex){
            return false;
        }
    }
	
	function check_duplicate($lb_table,$wh_field,$wh_value,$lb_primary_key,$val_primary_key=0){
		try{
			$this->db->where($wh_field,$wh_value);			
			if($val_primary_key>0){
				$this->db->where($lb_primary_key.' != '.$val_primary_key);
			}
			$query=$this->db->get($lb_table);
			if(count($query->result())>0)
				return false;
        }catch(Exception $ex){
            return false;
        }
		return true;
	}
	function get_max_member(){
		$sql="
		select m.id_member,m.cd_member	from tt_member m
		where
		m.id_member=( select max(id_member) from tt_member)";
		$query = $this->db->query($sql);
		return $query->row();
	}
	function get_friend_search($lb_name='',$per_page =10){
		try{
			$sql ="select *
					from tt_member m
					where 1=1 
					and (m.lb_fullname like '%".$lb_name."%' or m.cd_member like '%".$lb_name."%' )
					limit ".$per_page;		
			$query = $this->db->query($sql);
			return $query->result();
		}catch(Exception $ex){
			return false;
		}
	}
	function get_person_member($id_member=0){
		$sql="	SELECT 
	CONCAT(t1.cd_member,'-',t1.lb_fullname) AS lev1 ,t1.id_member as id_member_lv1,
	CONCAT(t2.cd_member,'-',t2.lb_fullname) AS lev2 ,t2.id_member as id_member_lv2,
	CONCAT(t3.cd_member,'-',t3.lb_fullname) AS lev3 ,t3.id_member as id_member_lv3,
	CONCAT(t4.cd_member,'-',t4.lb_fullname) AS lev4 ,t4.id_member as id_member_lv4,
	CONCAT(t5.cd_member,'-',t5.lb_fullname) AS lev5 ,t5.id_member as id_member_lv5,
	CONCAT(t6.cd_member,'-',t6.lb_fullname) AS lev6 ,t6.id_member as id_member_lv6,
	CONCAT(t7.cd_member,'-',t7.lb_fullname) AS lev7 ,t7.id_member as id_member_lv7,
	CONCAT(t8.cd_member,'-',t8.lb_fullname) AS lev8 ,t8.id_member as id_member_lv8,
	CONCAT(t9.cd_member,'-',t9.lb_fullname) AS lev9 ,t9.id_member as id_member_lv9,
	CONCAT(t10.cd_member,'-',t10.lb_fullname) AS lev10 ,t10.id_member as id_member_lv10,
	CONCAT(t11.cd_member,'-',t11.lb_fullname) AS lev11 ,t11.id_member as id_member_lv11,
	CONCAT(t12.cd_member,'-',t12.lb_fullname) AS lev12 ,t12.id_member as id_member_lv12

FROM tt_member  AS t1
LEFT JOIN tt_member  AS t2 ON t2.id_person_introduce = t1.id_member
LEFT JOIN tt_member  AS t3 ON t3.id_person_introduce = t2.id_member
LEFT JOIN tt_member  AS t4 ON t4.id_person_introduce = t3.id_member
LEFT JOIN tt_member  AS t5 ON  t5.id_person_introduce = t4.id_member
LEFT JOIN tt_member  AS t6 ON t6.id_person_introduce = t5.id_member
LEFT JOIN tt_member  AS t7 ON t7.id_person_introduce = t6.id_member
LEFT JOIN tt_member  AS t8 ON t8.id_person_introduce = t7.id_member
LEFT JOIN tt_member  AS t9 ON t9.id_person_introduce = t8.id_member
LEFT JOIN tt_member  AS t10 ON t10.id_person_introduce = t9.id_member
LEFT JOIN tt_member  AS t11 ON t11.id_person_introduce = t10.id_member
LEFT JOIN tt_member  AS t12 ON t12.id_person_introduce = t11.id_member
where

t1.id_member =?";
		$query = $this->db->query($sql,array($id_member));
		return $query->result();
	}
}
?>