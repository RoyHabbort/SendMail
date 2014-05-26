<?php 
    /* Baygulov Oleg
     * 26-05-2014
     */


class SendMail extends PHPMailer 
{   
    private $distAddress;
    private $distName;
    
    private function FreakMailer(){
        global $site;
        
        // Берем из файла config.php массив $site
        if($site['smtp_mode'] == 'enabled')
        {
          $this->Host = $site['smtp_host'];
          $this->Port = $site['smtp_port'];
          if($site['smtp_username'] != '')
          {
           $this->SMTPAuth  = true;
           $this->Username  = $site['smtp_username'];
           $this->Password  =  $site['smtp_password'];
          }
          $this->Mailer = "smtp";
        }
      
      if(!$this->From)
      {
        $this->From     = $site['from_email'];
      }
      if(!$this->FromName)
      {
        $this->FromName = $site['from_name'];
      }
      if(!$this->Sender)
      {
        $this->Sender = $site['from_email'];
      }
      
    }
    
    public function DoMail($theme, $content, $destAddress, $destName, $senderAddress, $senderName){
        // Данные отправителя
        try{
            
            $this->distAddress = $destAddress;
            $this->distName = $destName;
            
            $this->From = $senderAddress;
            $this->FromName = $senderName;
            $this->Sender = $senderAddress;

            $this -> FreakMailer();

            // Устанавливаем тему письма
            $this->Subject = $theme;

            // Задаем тело письма
            $this->Body = $content;

            // Добавляем адрес в список получателей
            $this->AddAddress($this->distAddress, $this->distName);

            if(!$this->Send()){
              echo 'Не могу отослать письмо!';
            }
            else{
              echo 'Письмо отослано!';
            }
            $this->ClearAddresses();
            $this->ClearAttachments();
            
            include 'mail/mail.php';
            
            return true;
            
        } catch (Exception $ex) {
            return false;
        }
        
    }
    
}