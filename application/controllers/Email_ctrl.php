<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_ctrl extends CI_Controller {

	public function index()
	{
        $this->load->view('email_view');
		$config = array(
            'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'smtp.gmail.com', 
            'smtp_port' => 465,
            'smtp_user' => 'mamatha.vita@gmail.com',
            'smtp_pass' => 'mamathag540',
            'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
            'mailtype' => 'text', //plaintext 'text' mails or 'html'
            'smtp_timeout' => '4', //in seconds
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $this->load->library('email',$config);
        $this->email->from('from',"mamatha.vita@gmail.com");
        $this->email->to('to','mamatha.vita@gmail.com');
        $this->email->subject('subject','sending mail through codeigniter');
        $this->email->message('message','this is php codeigniter mail');
        $this->email->set_newline("\r\n");

        $result=$this->email->send();
        $this->email->print_debugger();
      
	}
}
?>