
<?php
class Dip_itemmaster extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('Dip_itemmaster_model');
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
        $config['total_rows'] = $this->Dip_itemmaster_model->get_dip_itemmaster_count($search_text);
        $config['base_url'] = base_url() . 'index.php/dip_itemmaster/index';
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
        $data['dip_itemmaster'] = $this->Dip_itemmaster_model->get_dip_itemmaster($row_no, $row_per_page, $search_text);

        $data['row'] = $row_no;
        $data['search'] = $search_text;
        
        $this->load->view('dip_itemmaster/dip_itemmaster_view', $data);
        /*
        $data['resepracikan'] = $this->resepracikan_model->get_resepracikan();
        $this->load->view('resepracikan_view' ,$data);
         * */
         
    }
    
    function  add_new(){
        $this->load->view('dip_itemmaster/add_dip_itemmaster_view');
    }
    
    function save(){
        $ITEMMASTERID = $this->input->post('ITEMMASTERID');
        $BILLINGGROUPCODE = $this->input->post('BILLINGGROUPCODE');
        $BILLINGSUBGROUPCODE = $this->input->post('BILLINGSUBGROUPCODE');
        $BILLINGGROUP = $this->input->post('BILLINGGROUP');
        $ORDERITEMCODE = $this->input->post('ORDERITEMCODE');
        $ORDERITEMNAME = $this->input->post('ORDERITEMNAME');
        $MAINSTORECODE = $this->input->post('MAINSTORECODE');
        $RECID = $this->input->post('RECID');
        $this->Dip_itemmaster_model->save($ITEMMASTERID,$BILLINGGROUPCODE,$BILLINGSUBGROUPCODE,$BILLINGGROUP,$ORDERITEMCODE,$ORDERITEMNAME,$MAINSTORECODE,$RECID);
        redirect('dip_itemmaster');
    }
  
    function get_edit(){
        $ITEMMASTERID=$this->uri->segment(3);
        $result=$this->Dip_itemmaster_model->get_dip_itemmaster_id($ITEMMASTERID);
        if ($result->num_rows()>0){
          $i = $result->row_array();
          $data = array(
              'ITEMMASTERID' => $i['ITEMMASTERID'],
              'BILLINGGROUPCODE' => $i['BILLINGGROUPCODE'],
              'BILLINGSUBGROUPCODE' => $i['BILLINGSUBGROUPCODE'],
              'BILLINGGROUP' => $i['BILLINGGROUP'],
              'ORDERITEMCODE' => $i['ORDERITEMCODE'],
              'ORDERITEMNAME' => $i['ORDERITEMNAME'],
              'MAINSTORECODE' => $i['MAINSTORECODE'],
              'RECID' => $i['RECID'],
          );
          $this->load->view('dip_itemmaster/edit_dip_itemmaster_view',$data);
        }else{
            echo"Data Tidak Ditemukan";
        }        
    }

    function update(){
        $ITEMMASTERID = $this->input->post('ITEMMASTERID');
        $BILLINGGROUPCODE = $this->input->post('BILLINGGROUPCODE');
        $BILLINGSUBGROUPCODE = $this->input->post('BILLINGSUBGROUPCODE');
        $BILLINGGROUP = $this->input->post('BILLINGGROUP');
        $ORDERITEMCODE = $this->input->post('ORDERITEMCODE');
        $ORDERITEMNAME = $this->input->post('ORDERITEMNAME');
        $MAINSTORECODE = $this->input->post('MAINSTORECODE');
        $RECID = $this->input->post('RECID');
    
        $this->Dip_itemmaster_model->update($ITEMMASTERID,$BILLINGGROUPCODE,$BILLINGSUBGROUPCODE,$BILLINGGROUP,$ORDERITEMCODE,$ORDERITEMNAME,$MAINSTORECODE,$RECID);
        redirect('dip_itemmaster'); 
    }

    function get_delete() {
        $ITEMMASTERID = $this->uri->segment(3);
        $result = $this->Dip_itemmaster_model->get_dip_itemmaster_id($ITEMMASTERID);
        if ($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'ITEMMASTERID' => $i['ITEMMASTERID'],
                'BILLINGGROUPCODE' => $i['BILLINGGROUPCODE'],
                'BILLINGSUBGROUPCODE' => $i['BILLINGSUBGROUPCODE'],
                'BILLINGGROUP' => $i['BILLINGGROUP'],
                'ORDERITEMCODE' => $i['ORDERITEMCODE'],
                'ORDERITEMNAME' => $i['ORDERITEMNAME'],
                'MAINSTORECODE' => $i['MAINSTORECODE'],
                'RECID' => $i['RECID'],
            );
            $this->load->view('dip_itemmaster/delete_dip_itemmaster_view', $data);
        } else {
            echo "Data Was Not Found";
        }
    }

    function delete(){
        $ITEMMASTERID = $this->uri->segment(3);
        $this->Dip_itemmaster_model->delete($ITEMMASTERID);

        redirect('dip_itemmaster');
    }
    
}