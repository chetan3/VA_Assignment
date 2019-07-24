<?php

class EmailReader_model extends CI_Model {

	// imap server connection
    public $conn;
    public $output;

    private $msg_cnt;

    // email login credentials
    private $user   = EMAIL;
    private $pass   = PASSWORD;

    function __construct() {
        $this->connect();
    }

    function close() {
        $this->inbox = array();
        $this->msg_cnt = 0;
        imap_close($this->conn);
    }

    function connect() {
        $this->conn = imap_open('{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX', $this->user, $this->pass);
    }

	function getInbox() {
		$emails = imap_search($this->conn,'SINCE "22 July 2019"');

		if($emails) {

			rsort($emails);
			foreach($emails as $email_number) {
				$output = "";

				/* get information specific to this email */
				$overview = imap_fetch_overview($this->conn,$email_number,0);
				$message = quoted_printable_decode(imap_fetchbody($this->conn,$email_number,1.2));

				if($message==""){
					$message = quoted_printable_decode(imap_fetchbody($this->conn,$email_number,1));
				}
				$message = html_entity_decode($message);

				/* output the email header information */
				$output.= '<div onclick="myFunction('.$email_number.')" class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
				$output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
				$output.= '<span class="from">'.$overview[0]->from.'</span>';
				$output.= '<span class="date">on '.$overview[0]->date.'</span>';
				$output.= '</div>';

				/* output the email body */
				$output.= '<div id="'.$email_number.'" class="contentDiv">'.$message.'</div>';

				$data['output'][] = $output;
			}
			$data['main_view'] = "home_view";
			$this->load->view('layouts/main', $data);
		}

	}
}
?>