<?php

class Vendtransopen_model extends CI_Model{
    
    function get_vendtransopen($rowno, $rowperpage, $search = ""){
        
        $this->db->select('*');
        $this->db->from('vendtransopen');

        if ($search != '') {
            $this->db->like('REFRECID', $search);
        }
        
        $result = $this->db->limit($rowperpage, $rowno)->get();

        return $result;
    }
    
    // count total records
    function get_vendtransopen_count($search = '') {       
        
        $this->db->select('*');
       $this->db->from('vendtransopen');

       if ($search != '') {
           $this->db->like('REFRECID', $search);
       }
       
       $result =  $this->db->count_all_results();

       return $result;
   }
    
    function save($REFRECID,$AMOUNTCUR,$AMOUNTMST,$DUEDATE,$ACCOUNTNUM,$RECVERSION,$RECID){
        $data = array ('REFRECID'=> $REFRECID, 'AMOUNTCUR'=>$AMOUNTCUR, 'AMOUNTMST'=>$AMOUNTMST, 'DUEDATE'=>$DUEDATE, 'ACCOUNTNUM'=>$ACCOUNTNUM,'RECVERSION'=>$RECVERSION,'RECID'=>$RECID);
        $this->db->insert('vendtransopen',$data);
    }

    function get_vendtransopen_id ($REFRECID){
        $query=$this->db->get_where('vendtransopen',array('REFRECID'=>$REFRECID));
      return $query;  
    }

    function update($REFRECID,$AMOUNTCUR,$AMOUNTMST,$DUEDATE,$ACCOUNTNUM,$RECVERSION,$RECID){
        $data = array(
          'REFRECID' => $REFRECID,
          'AMOUNTCUR' => $AMOUNTCUR,
          'AMOUNTMST' => $AMOUNTMST,
          'DUEDATE' => $DUEDATE,
          'ACCOUNTNUM' => $ACCOUNTNUM,
          'RECVERSION' => $RECVERSION,
          'RECID' => $RECID,
        );
        $this->db->where('REFRECID', $REFRECID);
        $this->db->update('vendtransopen', $data);
    }

    function delete($REFRECID) {
        $this->db->where('REFRECID', $REFRECID);
        $this->db->delete('vendtransopen');
    }
    
}