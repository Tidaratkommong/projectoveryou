<?php

namespace App\Conversations;

use BotMan\BotMan\BotMan;
use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Attachments\Image;


class AddTodoConversation extends Conversation
{
    /**
     * First question
     */ 
    public function run()
    {
       
      $this->bot->reply('แสดงรูป');
     // $this->bot->reply('');// The original payload
    }
    

          
        
        
    
}
