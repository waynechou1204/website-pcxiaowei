<?php

include 'dao/TripDao.php';
include 'models/Criteria.php';

class TripsController extends MyController
{
    public function getAction($request) {
        $data = array();
        $tripdao = new TripDao();

        // all trips
        if(!isset($request->url_elements[2])) {
            $data = $tripdao->getAllTrips();
        } 
        
        // followed by a trip id
        elseif(!isset($request->url_elements[3])) {
            $trip_id = (int)$request->url_elements[2];
            $data = $tripdao->getTripById($trip_id);
        } 
        
        // trips with criteria
        else {
            $params = $request->parameters;
            $criteria = new Criteria($params);
            $data = $tripdao->getTripsByCriteria($criteria);
        }
        return $data;
    }
 

    public function postAction($request) {
        $data = $request->parameters;
        $data['message'] = "This data was submitted";
        return $data;
    }
}

?>