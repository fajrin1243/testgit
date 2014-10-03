<?php

class Models extends CI_Model{

	public function get($table="",$params="",$operation="",$columns="",$orders="")
	{

		if (!empty($params))
		{
			$query = $this->db->get_where($table, $params);
		}
		elseif(!empty($operation))
		{
			if ($operation=="MAX") {
				$this->db->select_max($columns);
				$query = $this->db->get($table);
			}
			elseif($operation=="MIN"){
				$this->db->select_min($columns);
				$query = $this->db->get($table);
			}
			elseif ($operation=="SUM") {
				$this->db->select_sum($columns);
				$query = $this->db->get($table);
			}
		}
		elseif (!empty($orders)) {
			$query = $this->db->order_by($columns,$orders); 
		}
		else
		{
			$query = $this->db->get($table);
		}

		return $query->result_array();

	}
}