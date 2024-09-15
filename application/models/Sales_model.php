<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_model extends CI_Model {

    public function get_30_day_sales() {
        // Example static data, replace with actual database query
        $sales_data = [];
        for ($i = 1; $i <= 30; $i++) {
            $sales_data[] = [
                'total_sales' => rand(12000, 17000),  // Random sales between 12k and 17k
                'units_sold' => rand(400, 600)       // Random units between 400 and 600
            ];
        }
        return $sales_data;
    }
}
