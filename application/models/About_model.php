<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About_model extends CI_Model
{

	public $table			=	"about";
	public $deletion		=	"DELETION";
	public $dbno			=	"NO";
	
	function __construct()
	{
		parent::__construct();
	}

	function get_all_about()
	{
		$row =	$this->db->where($this->deletion, "0")
						 ->order_by($this->dbno, "DESC")
						 ->get($this->table);

				return $row->result();
	}

}