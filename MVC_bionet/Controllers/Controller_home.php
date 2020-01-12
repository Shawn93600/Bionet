<?php
Class Controller_home extends Controller
{
    /**
     * Action par défaut du contrôleur (à définir dans les classes filles)
     */
    public function action_default(){
        $this->action_home(); 
    }

    public function action_home(){
        $data = [
        "title" => "Agriculture Biologique"
        ];
        $this->render("home", $data);
    }
}
?>