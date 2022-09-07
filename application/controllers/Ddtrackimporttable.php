
<?php
class Ddtrackimporttable extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('Ddtrackimporttable_model');
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
        $config['total_rows'] = $this->Ddtrackimporttable_model->get_ddtrackimporttable_count($search_text);
        $config['base_url'] = base_url() . 'index.php/ddtrackimporttable/index';
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
        $data['ddtrackimporttable'] = $this->Ddtrackimporttable_model->get_ddtrackimporttable($row_no, $row_per_page, $search_text);

        $data['row'] = $row_no;
        $data['search'] = $search_text;
        
        $this->load->view('ddtrackimporttable/ddtrackimporttable_view', $data);
        /*
        $data['resepracikan'] = $this->resepracikan_model->get_resepracikan();
        $this->load->view('resepracikan_view' ,$data);
         * */
         
    }
    
    function  add_new(){
        $this->load->view('ddtrackimporttable/add_ddtrackimporttable_view');
    }
    
    function save(){
        $DDIMPORTID = $this->input->post('DDIMPORTID');
        $DDIMPORTTYPE = $this->input->post('DDIMPORTTYPE');
        $DDIMPORTEDNUM = $this->input->post('DDIMPORTEDNUM');
        $NAME = $this->input->post('NAME');
        $DDIMPORTDATETIME = $this->input->post('DDIMPORTDATETIME');
        $LINES = $this->input->post('LINES');
        $DDCREATEDJOURNAL = $this->input->post('DDCREATEDJOURNAL');
        $RECVERSION = $this->input->post('RECVERSION');
        $RECID = $this->input->post('RECID');
        $this->Ddtrackimporttable_model->save($DDIMPORTID,$DDIMPORTTYPE,$DDIMPORTEDNUM,$NAME,$DDIMPORTDATETIME,$LINES,$DDCREATEDJOURNAL,$RECVERSION,$RECID);
        redirect('ddtrackimporttable');
    }
  
    function get_edit(){
        $DDIMPORTID=$this->uri->segment(3);
        $result=$this->Ddtrackimporttable_model->get_ddtrackimporttable_id($DDIMPORTID);
        if ($result->num_rows()>0){
          $i = $result->row_array();
          $data = array(
              'DDIMPORTID' => $i['DDIMPORTID'],
              'DDIMPORTTYPE' => $i['DDIMPORTTYPE'],
              'DDIMPORTEDNUM' => $i['DDIMPORTEDNUM'],
              'NAME' => $i['NAME'],
              'DDIMPORTDATETIME' => $i['DDIMPORTDATETIME'],
              'LINES' => $i['LINES'],
              'DDCREATEDJOURNAL' => $i['DDCREATEDJOURNAL'],
              'RECVERSION' => $i['RECVERSION'],
              'RECID' => $i['RECID'],
          );
          $this->load->view('ddtrackimporttable/edit_ddtrackimporttable_view',$data);
        }else{
            echo"Data Tidak Ditemukan";
        }        
    }

    function update(){
        $DDIMPORTID = $this->input->post('DDIMPORTID');
        $DDIMPORTTYPE = $this->input->post('DDIMPORTTYPE');
        $DDIMPORTEDNUM = $this->input->post('DDIMPORTEDNUM');
        $NAME = $this->input->post('NAME');
        $DDIMPORTDATETIME = $this->input->post('DDIMPORTDATETIME');
        $LINES = $this->input->post('LINES');
        $DDCREATEDJOURNAL = $this->input->post('DDCREATEDJOURNAL');
        $RECVERSION = $this->input->post('RECVERSION');
        $RECID = $this->input->post('RECID');
    
        $this->Ddtrackimporttable_model->update($DDIMPORTID,$DDIMPORTTYPE,$DDIMPORTEDNUM,$NAME,$DDIMPORTDATETIME,$LINES,$DDCREATEDJOURNAL,$RECVERSION,$RECID);
        redirect('ddtrackimporttable'); 
    }

    function get_delete() {
        $DDIMPORTID = $this->uri->segment(3);
        $result = $this->Ddtrackimporttable_model->get_ddtrackimporttable_id($DDIMPORTID);
        if ($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'DDIMPORTID' => $i['DDIMPORTID'],
                'DDIMPORTTYPE' => $i['DDIMPORTTYPE'],
                'DDIMPORTEDNUM' => $i['DDIMPORTEDNUM'],
                'NAME' => $i['NAME'],
                'DDIMPORTDATETIME' => $i['DDIMPORTDATETIME'],
                'LINES' => $i['LINES'],
                'DDCREATEDJOURNAL' => $i['DDCREATEDJOURNAL'],
                'RECVERSION' => $i['RECVERSION'],
                'RECID' => $i['RECID'],
            );
            $this->load->view('ddtrackimporttable/delete_ddtrackimporttable_view', $data);
        } else {
            echo "Data Was Not Found";
        }
    }

    function delete(){
        $DDIMPORTID = $this->uri->segment(3);
        $this->Ddtrackimporttable_model->delete($DDIMPORTID);

        redirect('ddtrackimporttable');
    }
    
}