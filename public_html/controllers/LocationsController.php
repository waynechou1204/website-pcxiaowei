<?php

include 'dao/LocationDao.php';
/**
* 
*/
class LocationsController extends MyController
{	
	public function getAction($request) {
        $data = array();
        $locationdao = new LocationDao();
            
        // locations
        if (!isset($request->url_elements[2])) {
        	$data = $locationdao->getAllLocations();
        }

        // followed by a location id ///
        elseif(isset($request->url_elements[2])) {
            $location_id = (int)$request->url_elements[2];
            $data = $locationdao->getLocationById($location_id);
        } 

        return $data;
    }
}
?>