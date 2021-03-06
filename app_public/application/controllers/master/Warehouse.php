<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warehouse extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("master/M_warehouse");
	}

	public function index()
	{
		$data = array(
			'data_app' => $this->get_data_app()
		);
		
		$this->template->display('inc/master/warehouse/main', $data);
	}

	public function get()
	{
		$res = false;
		$method = $_GET;
		$records = array();
		$count = 0;
		$no = 1;

		$params = array(
			"f_search" => ifunsetempty($method,"f_search",""),
			"limit" => ifunsetempty($method,"limit",10),
			"start" => ifunsetempty($method,"start",0)
		);

		$res = $this->M_warehouse->get($params);

		$no += $params["start"];
		
		if (isset($res["data"]) && is_array($res["data"]) && isset($res["count"]))
		{
			$count = $res["count"];
			foreach ($res["data"] as $key => $value) {
				$value["no"] = $no;
				$records[] = $value;
				$no++;
			}			
		}

		$data = array(
			"draw" => ifunsetempty($method,"draw",1),
	  		"recordsTotal" => $params["limit"],
	  		"recordsFiltered" => $count,
	  		"data" => $records
	  	);

		$out = $this->_respon($res,$data,"get");

		echo json_encode($out);
	}

	public function get_all()
	{
		$method = $_GET;
		$data = array();

		$params = array(
			"f_search" => ifunsetempty($method,"f_search","")			
		);
		$res = $this->M_warehouse->get($params);

		$data["data"] = $res->result_array();

		$out = $this->_respon($res,$data,"get");

		echo json_encode($out);		
	}

	public function save()
	{
		$res = false;
		$method = $_POST;
		

		$params = array(
			"warehouse_id" => ifunsetempty($method,"warehouse_id",''),
			"warehouse_name" => ifunsetempty($method,"warehouse_name",''),
			"warehouse_datecreated" => ifunsetempty($method,"warehouse_datecreated",date("Y-m-d")),
			"warehouse_dateupdated" => ifunsetempty($method,"warehouse_dateupdated",date("Y-m-d"))
		);

		if (empty($params["warehouse_id"]))
		{
			$params["warehouse_id"] = $this->get_uuid();
			unset($params["warehouse_dateupdated"]);
			$res = $this->M_warehouse->add($params);
		}
		else
		{			
			unset($params["warehouse_datecreated"]);
			$res = $this->M_warehouse->update($params);
		}

		$out = $this->_respon($res,array());

		echo json_encode($out);
	}

	public function delete()
	{
		$res = false;
		$method = $_POST;		

		$params = array(
			"warehouse_id" => ifunsetempty($method,"id",0)
		);

		$res = $this->M_warehouse->delete($params);

		$out = $this->_respon($res,array(),"delete");

		echo json_encode($out);
	}
	
}

/* End of file App.php */
/* Location: ./application/controllers/master/Warehouse.php */