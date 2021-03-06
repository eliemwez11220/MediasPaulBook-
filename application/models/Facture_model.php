<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Facture_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get facture by fac_id
     */
    function get_facture($fac_id)
    {
        return $this->db->get_where('factures',array('fac_id'=>$fac_id))->row_array();
    }
    
    /*
     * Get all factures count
     */
    function get_all_factures_count()
    {
        $this->db->from('factures');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all factures
     */
    function get_all_factures($params = array())
    {
        $this->db->order_by('fac_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('factures')->result_array();
    }
        
    /*
     * function to add new facture
     */
    function add_facture($params)
    {
        $this->db->insert('factures',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update facture
     */
    function update_facture($fac_id,$params)
    {
        $this->db->where('fac_id',$fac_id);
        return $this->db->update('factures',$params);
    }
    
    /*
     * function to delete facture
     */
    function delete_facture($fac_id)
    {
        return $this->db->delete('factures',array('fac_id'=>$fac_id));
    }
}
