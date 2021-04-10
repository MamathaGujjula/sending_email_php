<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Send_mail_ctrl extends CI_Controller {

        public function index() {
            $this->load->view('email_view');
        }
    
        function send() {
           
            $to = $this->input->post('from');
            $subject = "sending mail through codegniter";
            $from="example@gmail.com";

            $content = $this->input->post('message');

            $config = array(
                'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
                'smtp_host' => 'smtp.gmail.com', 
                'smtp_port' => 465,
                'smtp_user' => 'example@gmail.com',
                'smtp_pass' => 'xxxxx',
                'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
                'mailtype' => 'text', //plaintext 'text' mails or 'html'
                'smtp_timeout' => '60', //in seconds
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
    

            $this->email->initialize('$config');
            $this->email->set_mailtype('html');

           
            $this->email->from($from);
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($message);
    
           $this->email->send();

           $this->session->set_flashdata('msg',"email sent successfully");
           $this->session->set_flashdata('msg-class',"alert-success");

           return redirect('email_view');

        }
    }
