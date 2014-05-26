<html>
    <head>
        <title>SendMail</title>
    </head>
    <body>
        <div class="content">
            <h1>SendMail</h1>
            <?php
                include 'config.php';
                include 'lib/PHPMailer-master/class.phpmailer.php';
                include 'class/sendmailClass.php';
                
                $mailer = new SendMail();
                $mailer -> DoMail('Needtest', 'Содержание письма', 'resq7@mail.ru', 'Devur', 'reyset@yandex.ru', 'Oleg');
            ?>
        </div>    
    </body>
</html>