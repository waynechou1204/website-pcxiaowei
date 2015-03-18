<?php

include 'dao/UserDao.php';

class UsersController extends MyController
{
    public function getAction($request) {
        // //user id
        // if(isset($request->url_elements[2])) {
        //     $user_id = (int)$request->url_elements[2];
        //     if(isset($request->url_elements[3])) {
        //         switch($request->url_elements[3]) {
        //             case 'friends':
        //                 $data["message"] = "user " . $user_id . "has many friends";
        //                 break;
        //             default:
        //                 // do nothing, this is not a supported action
        //                 break;
        //             }
        //     } else {
        //         $data["message"] = "here is the info for user " . $user_id;
        //     }
        // } else {
        //     $data["message"] = "you want a list of users";
        // }
        // return $data;

        $data = array();
        $userdao = new UserDao();

        // all users
        if(!isset($request->url_elements[2])) {
            $data = $userdao->getAllUsers();
        } 
        elseif (!isset($request->url_elements[3])) {
            $id = (int)$request->url_elements[2];
            $data = $userdao->getUserById($id);
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