<?php
include "model/phonebook-model.php";
include "view/phonebook-view.php";
include "view/phonebook-view-save.php";
include "view/phonebook-dosearch.php";

class phoneBook_controller{

    public $model;
    public $view;
    public $save;
    public $search;

    public function __construct() {
        $this->model = new phoneBook_model();
        $this->view = new phoneBook_view();
        $this->save = new phoneBook_view_save();
        $this->search = new phonebook_dosearch();
    }
    public function display(){
       
        
        $person = $this->model->getPerson();
        $personList = '';
        foreach($person as $persons){
            $personList .= "<tr>";
            $personList .= "<td>".$persons[0]."</td>";
            $personList .= "<td>".$persons[1]."</td>";
            $personList .= "<td>".$persons[2]."</td>";
            $personList .= "<td>".$persons[3]."</td>";
            $personList .= "<tr>";
        }


        $this->view->personList = $personList;
        $this->view->render();
    }
     public function savelist(){
        $save = $this->model->save();
        $result_save = null;
        if($save){
            $result_save.= "<div class='alert alert-success'>";
            $result_save.= "<h3 class=text-success style='color:#31b631'>The save operation was completed successfully</h3>";
            $result_save.= "</div>";
        }else{
            $result_save.= "<div class='alert alert-danger'>";
            $result_save.= "<h3 class='text-danger'>The save operation failed</h3>";
            $result_save.= "</div>";
        }
        
        $this->save->result_save = $result_save;
        $this->save->saver();
    }
    public function searchlist(){
        $search_person = $this->model->search();
        $result_search = null;
        if($search_person == null){
            $result_search .= "<div class='alert alert-danger'>";
            $result_search .= "<h3 class='text-danger'>can not find</h3>";
            $result_search .= "</div>";
        }else {
            
            foreach($search_person as $rows){
                $result_search .= "<tr>";
                $result_search .= "<td>".$rows[0]."</td>";
                $result_search .= "<td>".$rows[1]."</td>";
                $result_search .= "<td>".$rows[2]."</td>";
                $result_search .= "<td>".$rows[3]."</td>";
                $result_search .= "<tr>";
            }
            // while ($row) {
            //     $result_search .= "<tr>";
            //     $result_search .= "<td>" . htmlentities($row['firstName']) . "</td>";
            //     $result_search .= "<td>" . htmlentities($row['lastName']) . "</td>";
            //     $result_search .= "<td>" . htmlentities($row['numbers']) . "</td>";
            //     $result_search .= "<td>" . htmlentities($row['groupName']) . "</td>";
            //     $result_search .= "<tr>";
            // }
        }

        $this->search->searchResult = $result_search;
        $this->search->dosearch();
    }

}
