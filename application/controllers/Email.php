<?php 
   class Email extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('email');
      } 

      public function index() {
        $config = array(
                   'protocol' => 'smtp',
                   'smtp_host' => 'ssl://smtp.googlemail.com',
                   'smtp_port' => 465,
                   'smtp_user' => 'wisnuupamungkass@gmail.com',
                   'smtp_pass' => 'w15nuP@gmail',
                   'mailtype'  => 'html', 
                   'charset'   => 'utf-8'
         );
         $this->load->library('email', $config);
         $this->email->set_newline("\r\n");
        $this->email->from('wisnuupamungkass@gmail.com','Wisnu Pamungkas');
        $this->email->to('wisnuupamungkass@gmail.com');
        $this->email->subject('This the test');
        $this->email->message('this is the test message');

         if($this->email->send()){
          echo "berhasil";
		  
         }else{
          echo $this->email->print_debugger();
         }
      }
   }
?>