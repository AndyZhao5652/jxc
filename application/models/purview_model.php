<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Purview_model extends CI_Model{

	public function __construct(){
  		parent::__construct();
		$this->uid   = $this->session->userdata('uid');
		$this->lever = $this->session->userdata('lever');
		$this->login = $this->session->userdata('login');
	}
	
	public function islogin() {
	    if (!$this->uid) return false; 
		if ($this->login != 'cs_jxc') return false; 
		return true;
	}

	public function checkpurview($id='') {
	    if (!$this->islogin()) {
			redirect(site_url('login'));
		}
		$data = $this->cache_model->load_one(ADMIN,'(uid='.$this->uid.')');
			$data['status']!=1 && alert('该账号已被锁定');  
			if (count($data)>0) {
			    if ($data['roleid']==0) {
					$lever = $this->cache_model->load_data(MENU,'(1=1) order by id','id');  
				} else {
					if (strlen($data['lever'])>0) {
						$lever = explode(',',$data['lever']);
					} else {
						$lever = array();	
					}
				}
			} else {
			    alert('请登录系统'); 	
			}
	    if (strlen($id)>0) {
		    if (in_array($id,$this->lever)) {
				return true;
			} else {
			    die('{"status":400,"msg":"对不起，您没有此页面的管理权限！"}');
				alert('对不起，您没有此页面的管理权限!'); 
			} 
		}
	}
	
}
