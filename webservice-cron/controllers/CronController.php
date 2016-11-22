<?php

class CronController extends MyController
{
    public function getAction($request) {
      $pdo= new bdd();
            $requete = "";
            if(isset($request->url_elements[2]) && ($request->url_elements[2]!="")) {
              $requete=' WHERE id='.$request->url_elements[2];
            }
              $compar = $pdo->select("SELECT * FROM task $requete");
              if(!empty($compar)){
                header("HTTP/1.0 200 Ok");
                return $compar;
              } else {
                header("HTTP/1.0 404 Not Found");
                return [];
            }

        $data["message"] = "ERROR" .$task_id;
    }

    public function postAction($request) {
        $data = $request->parameters;
        $pdo=new bdd();

        $obj = json_decode($_POST);
        return $obj;
        $nameCreate = $obj->{'name'};
        $dayCreate = $obj->{'day'};
        $monthCreate = $obj->{'month'};
        $yearCreate = $obj->{'year'};
        $hourCreate = $obj->{'hour'};
        $minCreate = $obj->{'min'};

        $pdo->create("INSERT INTO task (name, day, month, year, hour, min) VALUES (.$nameCreate. , .$dayCreate. , .$monthCreate. , .$yearCreate. , .$hourCreate. , .$minCreate.)");
        return $data;
    }

    public function deleteAction($request) {
        $data = $request->parameters;
        $pdo=new bdd();


        $pdo->exec("");
        return $data;
    }

    public function putAction($request) {
        $data = $request->parameters;
        $data['message'] = "This data was modify";
        return $data;
    }
}
