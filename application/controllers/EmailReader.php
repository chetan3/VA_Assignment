<?php
class EmailReader extends CI_Controller {

    public function index() {
        $this->EmailReader_model->getInbox();
    }
}
?>