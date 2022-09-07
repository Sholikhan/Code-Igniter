<?php

class Ddtrackimporttable_model extends CI_Model{
    
    function get_ddtrackimporttable($rowno, $rowperpage, $search = ""){
        
        $this->db->select('*');
        $this->db->from('ddtrackimporttable');

        if ($search != '') {
            $this->db->like('DDIMPORTID', $search);
        }
        
        $result = $this->db->limit($rowperpage, $rowno)->get();

        return $result;
    }
    
    // count total records
    function get_ddtrackimporttable_count($search = '') {       
        
        $this->db->select('*');
       $this->db->from('ddtrackimporttable');

       if ($search != '') {
           $this->db->like('DDIMPORTID', $search);
       }
       
       $result =  $this->db->count_all_results();

       return $result;
   }
    
    function save($DDIMPORTID,$DDIMPORTTYPE,$DDIMPORTEDNUM,$NAME,$DDIMPORTDATETIME,$LINES,$DDCREATEDJOURNAL,$RECVERSION,$RECID){
        $data = array ('DDIMPORTID'=> $DDIMPORTID, 'DDIMPORTTYPE'=>$DDIMPORTTYPE, 'DDIMPORTEDNUM'=>$DDIMPORTEDNUM, 'NAME'=>$NAME, 'DDIMPORTDATETIME'=>$DDIMPORTDATETIME,'LINES'=>$LINES,'DDCREATEDJOURNAL'=>$DDCREATEDJOURNAL,'RECVERSION'=>$RECVERSION,'RECID'=>$RECID);
        $this->db->insert('ddtrackimporttable',$data);
    }

    function get_ddtrackimporttable_id ($DDIMPORTID){
        $query=$this->db->get_where('ddtrackimporttable',array('DDIMPORTID'=>$DDIMPORTID));
      return $query;  
    }

    function update($DDIMPORTID,$DDIMPORTTYPE,$DDIMPORTEDNUM,$NAME,$DDIMPORTDATETIME,$LINES,$DDCREATEDJOURNAL,$RECVERSION,$RECID){
        $data = array(
          'DDIMPORTID' => $DDIMPORTID,
          'DDIMPORTTYPE' => $DDIMPORTTYPE,
          'DDIMPORTEDNUM' => $DDIMPORTEDNUM,
          'NAME' => $NAME,
          'DDIMPORTDATETIME' => $DDIMPORTDATETIME,
          'LINES' => $LINES,
          'DDCREATEDJOURNAL' => $DDCREATEDJOURNAL,
          'RECVERSION' => $RECVERSION,
          'RECID' => $RECID,
        );
        $this->db->where('DDIMPORTID', $DDIMPORTID);
        $this->db->update('ddtrackimporttable', $data);
    }

    function delete($DDIMPORTID) {
        $this->db->where('DDIMPORTID', $DDIMPORTID);
        $this->db->delete('ddtrackimporttable');
    }
    
}