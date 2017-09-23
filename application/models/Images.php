<?php

/**
* A Model for images.
*/
class Images extends CI_Model
{
	
	/**
	 * Constructs an Images object.
	 */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Gets all images, descending order by post date.
	 * 
	 * @return Array all images
	 */
	function all()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('images');

		return $query->result_array();
	}

	/**
	 * Gets just the 3 newest images.
	 * 
	 * @return Array three newest images
	 */
	function newest()
	{
		$this->db->order_by("id", "desc");
		$this->db->limit(3);
		$query = $this->db->get('images');

		return $query->result_array();
	}
}
