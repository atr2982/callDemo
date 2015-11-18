<?php

class Site_model extends CI_Model {

    function getSearch($searchTerm) {
       
        $siteAddressAPI = "https://api.untappd.com/v4/search/beer?q=".$searchTerm."&limit=10&client_id=905F449B2E3DAB14D4138D35623F50858F2D105D&client_secret=B4DEB76167F86248BB68F5CDA7606A8EA2707752";
        
        $data = file_get_contents($siteAddressAPI);
                          

        return $data;
        
        
    }
    
    
    

    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}