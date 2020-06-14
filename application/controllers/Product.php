<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Product extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Product_model','product_model');
    }
 
    function index(){
        $this->load->view('product_view');
    }
 
    function get_product(){
        $data = $this->product_model->get_product()->result();
        echo json_encode($data);
    }
 
    function create(){
        $product_name = $this->input->post('product_name',TRUE);
        $product_price = $this->input->post('product_price',TRUE);
        $this->product_model->insert_product($product_name,$product_price);
 
        // require_once(APPPATH.'vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            '8cf463b119a9af6cadec', //ganti dengan App_key pusher Anda
            'de8d6e2a7c66c4ea4699', //ganti dengan App_secret pusher Anda
            '992164', //ganti dengan App_key pusher Anda
            $options
        );
 
        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
    }
 
    function update(){
        $product_id = $this->input->post('product_id',TRUE);
        $product_name = $this->input->post('product_name',TRUE);
        $product_price = $this->input->post('product_price',TRUE);
        $this->product_model->update_product($product_id,$product_name,$product_price);
 
        // require_once(APPATH.'views/vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            '8cf463b119a9af6cadec', //ganti dengan App_key pusher Anda
            'de8d6e2a7c66c4ea4699', //ganti dengan App_secret pusher Anda
            '992164', //ganti dengan App_key pusher Anda
            $options
        );
 
        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
    }
 
    function delete(){
        $product_id = $this->input->post('product_id',TRUE);
        $this->product_model->delete_product($product_id);
 
        // require_once(APPATH.'views/vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            '8cf463b119a9af6cadec', //ganti dengan App_key pusher Anda
            'de8d6e2a7c66c4ea4699', //ganti dengan App_secret pusher Anda
            '992164', //ganti dengan App_key pusher Anda
            $options
        );
 
        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}