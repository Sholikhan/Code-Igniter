
<?php
class Inventitemlocation extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('inventitemlocation_model');
    }
    
    function index($row_no = 0){
        
        // Search text
        $search_text = "";
        if ($this->input->post('submit') != NULL) {
            $search_text = $this->input->post('search');
            $this->session->set_userdata(array("search" => $search_text));
        } else {
            if ($this->session->userdata('search') != NULL) {
                $search_text = $this->session->userdata('search');
            }
        }
        
        // Row per page
        $row_per_page = 5;

        // Row position
        if ($row_no != 0) {
            $row_no = ($row_no - 1) * $row_per_page;
        }
        
        
        // Pagination Configuration
        // All records count
        $config['total_rows'] = $this->inventitemlocation_model->get_inventitemlocation_count($search_text);
        $config['base_url'] = base_url() . 'index.php/inventitemlocation/index';
        $config['use_page_numbers'] = TRUE;
        $config['per_page'] = $row_per_page;
        
        //styling
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';

        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';

        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';

        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';

        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';

        $config['first_link']       = 'First';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';

        $config['last_link']        = 'Last';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        // Initialize
        $this->pagination->initialize($config);
        
        $data['pagination'] = $this->pagination->create_links();
        
        // Get  records
        $data['inventitemlocation'] = $this->inventitemlocation_model->get_inventitemlocation($row_no, $row_per_page, $search_text);

        $data['row'] = $row_no;
        $data['search'] = $search_text;
        
        $this->load->view('inventitemlocation/inventitemlocation_view', $data);
        /*
        $data['resepracikan'] = $this->resepracikan_model->get_resepracikan();
        $this->load->view('resepracikan_view' ,$data);
         * */
         
    }
    
    function  add_new(){
        $this->load->view('inventitemlocation/add_inventitemlocation_view');
    }
    
    function save(){
        $ITEMID = $this->input->post('ITEMID');
        $INVENTDIMID = $this->input->post('INVENTDIMID');
        $DATAAREAID = $this->input->post('DATAAREAID');
        $RECVERSION = $this->input->post('RECVERSION');
        $RECID = $this->input->post('RECID');
        $this->inventitemlocation_model->save($ITEMID,$INVENTDIMID,$DATAAREAID,$RECVERSION,$RECID);
        redirect('inventitemlocation');
    }
  
    function get_edit(){
        $ITEMID=$this->uri->segment(3);
        $result=$this->inventitemlocation_model->get_inventitemlocation_id($ITEMID);
        if ($result->num_rows()>0){
          $i = $result->row_array();
          $data = array(
              'ITEMID' => $i['ITEMID'],
              'INVENTDIMID' => $i['INVENTDIMID'],
              'DATAAREAID' => $i['DATAAREAID'],
              'RECVERSION' => $i['RECVERSION'],
              'RECID' => $i['RECID'],
          );
          $this->load->view('inventitemlocation/edit_inventitemlocation_view',$data);
        }else{
            echo"Data Tidak Ditemukan";
        }        
    }

    function update(){
        $ITEMID = $this->input->post('ITEMID');
        $INVENTDIMID = $this->input->post('INVENTDIMID');
        $DATAAREAID = $this->input->post('DATAAREAID');
        $RECVERSION = $this->input->post('RECVERSION');
        $RECID = $this->input->post('RECID');
    
        $this->inventitemlocation_model->update($ITEMID,$INVENTDIMID,$DATAAREAID,$RECVERSION,$RECID);
        redirect('inventitemlocation'); 
    }

    function get_delete() {
        $ITEMID = $this->uri->segment(3);
        $result = $this->inventitemlocation_model->get_inventitemlocation_id($ITEMID);
        if ($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'ITEMID' => $i['ITEMID'],
                'INVENTDIMID' => $i['INVENTDIMID'],
                'DATAAREAID' => $i['DATAAREAID'],
                'RECVERSION' => $i['RECVERSION'],
                'RECID' => $i['RECID'],
            );
            $this->load->view('inventitemlocation/delete_inventitemlocation_view', $data);
        } else {
            echo "Data Was Not Found";
        }
    }

    function delete(){
        $ITEMID = $this->uri->segment(3);
        $this->inventitemlocation_model->delete($ITEMID);

        redirect('inventitemlocation');
    }
    
}