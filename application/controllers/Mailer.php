<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailer extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('email_to', 'Email Recipent', 'trim|required|valid_email');
		$this->form_validation->set_rules('email_subject', 'Subject', 'trim|required|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('email_body', 'Email Body', 'trim|required|min_length[5]|max_length[250]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header');
			$this->load->view('home_view');
			$this->load->view('template/footer');
		} else {
			$email_to = $this->input->post('email_to');
			$email_subject = $this->input->post('email_subject');
			$email_desc = $this->input->post('email_body');

			$this->trigger_mail($email_to, $email_subject, $email_desc);

		}

	}

	function trigger_mail($to, $subject, $message, $cc = NULL)
	{

		$CI =& get_instance();
		$CI->email->set_newline("\r\n");
		$CI->email->from('support@cyberdudenetworks.com', 'Assignment Check'); // change it to yours
		$CI->email->to($to);// change it to yours
		$CI->email->subject($subject);
		$CI->email->message($message);

		if($CI->email->send())
		{
		  redirect('/index.php/EmailReader', 'location');
		}
		else
		{
		  show_error($CI->email->print_debugger());
		  return false;
		}
	}
}
