<?php
class Data_model extends CI_Model {

public function get_sales_data() {
    // Example query to fetch sales data from the sales_table
    $query = $this->db->select('product, units_sold')
                      ->from('sales')
                      ->get();
    return $query->result();
}
}
?>