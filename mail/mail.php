<div class="mail-view">
    <div class="mv-header">
        <div class="mv-title-subject"><h2><?=$this->Subject;?></h2></div>
        <div class="mv-title-sender">
            <span class="mv-senderAddress-title">От кого:</span>
            <span class="mv-senderName"><?=$this->FromName;?></span>
            <span class="mv-senderAddress"><?=$this->From;?></span>
            
        </div>
        <div class="mv-title-destination">
            <span class="mv-destinationAddress-title">Кому:</span>
            <span class="mv-destinationName"><?=$this->distName;?></span>
            <span class="mv-destinationAddress"><?=$this->distAddress;?></span>
        </div>
    </div>
    <div class="mv-body">
        <span class="mv-body-content"><?=$this->Body;?></span>
    </div>    
</div>



