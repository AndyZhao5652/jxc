<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trans extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->purview_model->checkpurview(58);
		$this->load->model('data_model');
    }
	
	public function index(){
		$this->load->view('trans/index');
	}
	
	
	//运输单添加修改
    public function save() {
        $id  = $this->input->post('id',TRUE);
            $act = str_enhtml($this->input->get('act',TRUE));
            $info['shipno'] = $data['shipno'] = str_enhtml($this->input->post('shipno',TRUE));
            $info['contractno'] = $data['contractno'] = str_enhtml($this->input->post('contractno',TRUE));
            $info['shiptype'] = $data['shiptype'] = str_enhtml($this->input->post('shiptype',TRUE));
            $info['shipdate'] = $data['shipdate'] = str_enhtml($this->input->post('shipdate',TRUE));
            $info['shipto'] = $data['shipto'] = str_enhtml($this->input->post('shipto',TRUE));
            $info['decinvoiceno'] = $data['decinvoiceno'] = str_enhtml($this->input->post('decinvoiceno',TRUE));
            $info['lwh'] = $data['lwh'] = str_enhtml($this->input->post('lwh',TRUE));
            $info['weight'] = $data['weight'] = str_enhtml($this->input->post('weight',TRUE));
            $info['qty'] = $data['qty'] = str_enhtml($this->input->post('qty',TRUE));
            $info['shipprice'] = $data['shipprice'] = str_enhtml($this->input->post('shipprice',TRUE));
            $info['customer'] = $data['customer'] = str_enhtml($this->input->post('customer',TRUE));
            $info['invoiceno'] = $data['invoiceno'] = str_enhtml($this->input->post('invoiceno',TRUE));
            $info['esarrdate'] = $data['esarrdate'] = str_enhtml($this->input->post('esarrdate',TRUE));
            $info['rearrdate'] = $data['rearrdate'] = str_enhtml($this->input->post('rearrdate',TRUE));
            $info['description'] = $data['description'] = str_enhtml($this->input->post('description',TRUE));
//            
//	    $id = intval($this->input->get_post('id',TRUE));
//		$act = str_enhtml($this->input->get('act',TRUE));
//		$data['type'] = 1; 
//		$data['linkmans']    = $this->input->post('linkMans',TRUE);
//		$info['amount']      = $data['amount']      = str_enhtml($this->input->post('amount',TRUE));
//		$info['beginDate']   = $data['begindate']   = str_enhtml($this->input->post('beginDate',TRUE));
//		$info['cCategory']   = $data['categoryid']  = intval($this->input->post('cCategory',TRUE));
//		$info['name']        = $data['name']        = str_enhtml($this->input->post('name',TRUE));
//		$info['number']      = $data['number']      = str_enhtml($this->input->post('number',TRUE));
//		$info['periodMoney'] = $data['periodmoney'] = str_enhtml($this->input->post('periodMoney',TRUE));
//		$data['contact']     = $data['number'].' '.$data['name'].' '.$data['linkmans'];
//		$info['links'] = array();
//		if (strlen($data['linkmans'])>0) {
//			$list = (array)json_decode($data['linkmans']);
//			if (count($list)>0) {
//				foreach ($list as $arr=>$row) {
//					if ($row->linkFirst==1) {
//						$info['links'][0]['name']        = $row->linkName;
//						$info['links'][0]['mobile']      = $row->linkMobile; 
//						$info['links'][0]['phone']       = $row->linkPhone; 
//						$info['links'][0]['im']          = $row->linkIm; 
//						$info['links'][0]['first']       = $row->linkFirst; 
//						$info['links'][0]['address']     = $row->linkAddress; 
//					}
//				} 
//			}
//		}
		if ($act=='add') {
		    $this->purview_model->checkpurview(59);
//		    strlen($data['shipno']) < 1 && die('{"status":-1,"msg":"运单号不能为空"}'); 
//			$this->mysql_model->db_count(TRANS,' (shipno="'.$data['shipno'].'")') > 0 && die('{"status":-1,"msg":"运单号重复"}');
//			$info['cCategoryName'] = $data['categoryname'] = $this->mysql_model->db_one(CATEGORY,'(id='.$data['categoryid'].')','name');
//		    $sql = $this->mysql_model->db_inst(TRANS,array_filter($data));
                    $sql = $this->mysql_model->db_inst(TRANS,$data);
			if ($sql) {
			    $info['id'] = $sql;
				$this->cache_model->delsome(TRANS);
				$this->data_model->logs('新增运单号:'.$data['shipno']);
				die('{"status":200,"msg":"success","data":'.json_encode($info).'}');
			} else {
			    die('{"status":-1,"msg":"添加失败"}');
			}
		} elseif ($act=='update') {
		    $this->purview_model->checkpurview(60);
//		    strlen($data['shipno']) < 1 && die('{"status":-1,"msg":"运单号不能为空"}'); 
//			$this->mysql_model->db_count(TRANS,' (shipno="'.$data['shipno'].'")') > 0 && die('{"status":-1,"msg":"运单号重复"}');
//			$info['cCategoryName'] = $data['categoryname'] = $this->mysql_model->db_one(CATEGORY,'(id='.$data['categoryid'].')','name');
//			$shipno = $this->mysql_model->db_one(TRANS,'(id='.$id.')','shipno');
		    $sql = $this->mysql_model->db_upd(TRANS,$data,'(id='.$id.')');
			if ($sql) {
			    $info['id'] = $id;
//			    $v['contactname'] = $info['number'].' '.$info['name'];
//			    $this->mysql_model->db_upd(TRANS,$data,'(id='.$id.')');  
//				$this->mysql_model->db_upd(INVSA_INFO,$v,'(contactid='.$id.')');  
//			    $this->cache_model->delsome(TRANS);
//				$this->cache_model->delsome(CONTACT);
//				$this->cache_model->delsome(INVSA_INFO);
//				$this->data_model->logs('修改运输单:'.$data['shipno'].' 修改为 '.$data['shipno']);
				die('{"status":200,"msg":"success","data":'.json_encode($info).'}');
			} else {
				die('{"status":-1,"msg":"修改失败"}');
			}
		}
		die('{"status":-1,"msg":"操作失败"}');
	}
	
	//导出客户
	public function export(){
	    $this->purview_model->checkpurview(62);
	    sys_xls('运输单.xls');
		$skey   = str_enhtml($this->input->get('shipno',TRUE));
		$where  = ' 1=1 ';
		if ($skey) {
			$where .= ' and shipno like "%'.$skey.'%"';
		}
		$this->data_model->logs('导出运输单');
		$data['list'] = $this->cache_model->load_data(TRANS, '');   
		$this->load->view('trans/export',$data);
	}
	
	//客户删除
	public function del(){
	    $this->purview_model->checkpurview(61);
	    $id = str_enhtml($this->input->post('id',TRUE));
		if (strlen($id) > 0) {
//		    $this->mysql_model->db_count(TRANS,'(id in('.$id.'))')>0 && die('{"status":-1,"msg":"其中有客户发生业务不可删除"}'); 
//			$name = $this->mysql_model->db_select(CONTACT,'(id in('.$id.'))','name'); 
//			if (count($name)>0) {
//			    $name = join(',',$name);
//			}
		    $sql = $this->mysql_model->db_del(TRANS,'(id in('.$id.'))');   
		    if ($sql) {
			    $this->cache_model->delsome(TRANS);
				$this->data_model->logs('删除运输单:='.$id);
				die('{"status":200,"msg":"success","data":{"msg":"","id":['.$id.']}}');
			} else {
			    die('{"status":-1,"msg":"删除失败"}');
			}
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */