<?php
class Controller_career extends Controller
{

    function action_index()
    {
        $this->view->generate('career_view.php', 'template_view.php');
    }
}
