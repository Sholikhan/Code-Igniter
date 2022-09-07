<?php

class Inventitemlocation_model extends CI_Model{
    
    function get_inventitemlocation($rowno, $rowperpage, $search = ""){
        
        $this->db->select('*');
        $this->db->from('inventitemlocation');

        if ($search != '') {
            $this->db->like('ITEMID', $search);
        }
        
        $result = $this->db->limit($rowperpage, $rowno)->get();

        return $result;
    }
    
    // count total records
    function get_inventitemlocation_count($search = '') {       
        
        $this->db->select('*');
       $this->db->from('inventitemlocation');

       if ($search != '') {
           $this->db->like('ITEMID', $search);
       }
       
       $result =  $this->db->count_all_results();

       return $result;
   }
    
    function save($ITEMID,$INVENTDIMID,$DATAAREAID,$RECVERSION,$RECID){
        $data = array ('ITEMID'=> $ITEMID, 'INVENTDIMID'=>$INVENTDIMID, 'DATAAREAID'=>$DATAAREAID, 'RECVERSION'=>$RECVERSION, 'RECID'=>$RECID);
        $this->db->insert('inventitemlocation',$data);
    }

    function get_inventitemlocation_id ($ITEMID){
        $query=$this->db->get_where('inventitemlocation',array('ITEMID'=>$ITEMID));
      return $query;  
    }

    function update($ITEMID,$INVENTDIMID,$DATAAREAID,$RECVERSION,$RECID){
        $data = array(
          'ITEMID' => $ITEMID,
          'INVENTDIMID' => $INVENTDIMID,
          'DATAAREAID' => $DATAAREAID,
          'RECVERSION' => $RECVERSION,
          'RECID' => $RECID,
        );
        $this->db->where('ITEMID', $ITEMID);
        $this->db->update('inventitemlocation', $data);
    }

    function delete($ITEMID) {
        $this->db->where('ITEMID', $ITEMID);
        $this->db->delete('inventitemlocation');
    }
    
}