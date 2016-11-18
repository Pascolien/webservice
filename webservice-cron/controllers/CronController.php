<?php

class CronController extends MyController
{
    public function getAction($request) {
        if(isset($request->url_elements[2])) {
            $task_id = (int)$request->url_elements[2];
            if(isset($request->url_elements[3])) {
                switch($request->url_elements[3]) {
                case '1':
                    $data["message"] = [];
                    foreach(BDD::$bdd->query("SELECT * FROM task") as $task){
                      $data["message"][]=$task;
                    }
                    break;
                default:
                    // do nothing, this is not a supported action
                    break;
                }
            } else {
                $data["message"] = "here is the info for user " . $task_id;
            }
        } else {
            $data["message"] = "you want a list of users";
        }
        return $data;
    }

    public function postAction($request) {
        $data = $request->parameters;
        $data['message'] = "This data was submitted";
        return $data;
    }

    public function deleteAction($request) {
        $data = $request->parameters;
        $data['message'] = "This data was delete";
        return $data;
    }

    public function putAction($request) {
        $data = $request->parameters;
        $data['message'] = "This data was modify";
        return $data;
    }
}
