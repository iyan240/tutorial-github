<?php
defined('BASEPATH') or exit('no direct script acces allowed');

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array('mercy',22,18)
			,array('BMW',5,2)
			,array('LAMBO',15,13)
			,array('SUPRA',17,15)
		);

		return $cars;
	}
}