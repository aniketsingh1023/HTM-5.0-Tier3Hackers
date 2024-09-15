<?php
class Product_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Create a new product
    public function create_product($data) {
        $this->db->insert('products', $data);
        // return $this->db->insert_id();
    }

    // Get all products
    public function get_products() {
        $query = $this->db->get('products');
        return $query->result_array();
    }

    // Get product by ID
    public function get_product($id) {
        $query = $this->db->get_where('products', array('id' => $id));
        return $query->row_array();
    }

    // Update product by ID
    public function update_product($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('products', $data);
    }

    // Delete product by ID
    public function delete_product($id) {
        $this->db->where('id', $id);
        $this->db->delete('products');
    }

    public function get_product_by_id($id) {
        // Query the database to retrieve the product with the given ID
        $query = $this->db->get_where('products', array('id' => $id));
        return $query->row_array(); // Return the result as an associative array
    }
}
?>
