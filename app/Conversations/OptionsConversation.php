<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class OptionsConversation extends Conversation
{
    /**
     * First question
     */
   
    public function run()
    {
        $question = Question::create("What do you need?")
        ->fallback('Unable to choose option')
        ->callbackId('ask_about_option')
        ->addButtons([
            Button::create('ข้อมูลการติดต่อทางร้าน')->value('add'),
            Button::create('การเลือกซื้อสินค้า')->value('all'),
            Button::create('การคืนสินค้า')->value('completed'),
            Button::create('.............')->value('not_completed'),
        ]);

        $this->bot->ask($question, function(Answer $answer){
            if ($answer->isInteractiveMessageReply()) {
                $value = $answer->getValue();

                switch ($value){
                    case 'add':
                        $this->bot->startConversation(new AddTodoConversation);
                    break;
                    case 'all':
                        $this->bot->startConversation(new AllTodoConversation);
                    break;
                    case 'completed':
                        $this->bot->startConversation(new CompletedTodoConversation);
                    break;
                    case 'not_completed':
                        $this->bot->startConversation();
                    break;
                }
            }
        });
    }
}
