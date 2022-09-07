<?php

class Dip_itemmaster_model extends CI_Model{
    
    function get_dip_itemmaster($rowno, $rowperpage, $search = ""){
        
        $this->db->select('*');
        $this->db->from('dip_itemmaster');

        if ($search != '') {
            $this->db->like('ITEMMASTERID', $search);
        }
        
        $result = $this->db->limit($rowperpage, $rowno)->get();

        return $result;
    }
    
    // count total records
    function get_dip_itemmaster_count($search = '') {       
        
        $this->db->select('*');
       $this->db->from('dip_itemmaster');

       if ($search != '') {
           $this->db->like('ITEMMASTERID', $search);
       }
       
       $result =  $this->db->count_all_results();

       return $result;
   }
    
    function save($ITEMMASTERID,$BILLINGGROUPCODE,$BILLINGSUBGROUPCODE,$BILLINGGROUP,$ORDERITEMCODE,$ORDERITEMNAME,$MAINSTORECODE,$RECID){
        $data = array ('ITEMMASTERID'=> $ITEMMASTERID, 'BILLINGGROUPCODE'=>$BILLINGGROUPCODE, 'BILLINGSUBGROUPCODE'=>$BILLINGSUBGROUPCODE, 'BILLINGGROUP'=>$BILLINGGROUP, 'ORDERITEMCODE'=>$ORDERITEMCODE,'ORDERITEMNAME'=>$ORDERITEMNAME,'MAINSTORECODE'=>$MAINSTORECODE,'RECID'=>$RECID);
        $this->db->insert('dip_itemmaster',$data);
    }

    function get_dip_itemmaster_id ($ITEMMASTERID){
        $query=$this->db->get_where('dip_itemmaster',array('ITEMMASTERID'=>$ITEMMASTERID));
      return $query;  
    }

    function update($ITEMMASTERID,$BILLINGGROUPCODE,$BILLINGSUBGROUPCODE,$BILLINGGROUP,$ORDERITEMCODE,$ORDERITEMNAME,$MAINSTORECODE,$RECID){
        $data = array(
          'ITEMMASTERID' => $ITEMMASTERID,
          'BILLINGGROUPCODE' => $BILLINGGROUPCODE,
          'BILLINGSUBGROUPCODE' => $BILLINGSUBGROUPCODE,
          'BILLINGGROUP' => $BILLINGGROUP,
          'ORDERITEMCODE' => $ORDERITEMCODE,
          'ORDERITEMNAME' => $ORDERITEMNAME,
          'MAINSTORECODE' => $MAINSTORECODE,
          'RECID' => $RECID,
        );
        $this->db->where('ITEMMASTERID', $ITEMMASTERID);
        $this->db->update('dip_itemmaster', $data);
    }

    function delete($ITEMMASTERID) {
        $this->db->where('ITEMMASTERID', $ITEMMASTERID);
        $this->db->delete('dip_itemmaster');
    }
     
}