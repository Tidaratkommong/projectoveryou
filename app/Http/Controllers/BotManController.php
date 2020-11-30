<?php
  
namespace App\Http\Controllers;

use App\Conversations\OptionsConversation;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
  
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
        // user:hi
        //botman: hi user
        $botman->hears('สวัสดีครับ', function ($bot) {
          //  $bot->reply('มีอะไรให้เราช่วยไหมคะ ถ้าต้องการเริ่มต้นใหม่ พิมพ์คำว่า "เริ่มใหม่" ได้ตลอดเวลา');
            $this->startConversation($bot);
        });

        $botman->hears('สวัสดีค่ะ', function ($bot) {
           // $bot->reply('สวัสดีค่ะ ✋');
            $this->startConversation($bot);
        });

        $botman->hears('สวัสดี', function ($bot) {
            // $bot->reply('สวัสดีค่ะ ✋');
             $this->startConversation($bot);
         });

        $botman->hears('เริ่มใหม่', function ($bot) {
            $this->startConversation($bot);
        });

        $botman->hears('ขอสอบถามหน่อยค่ะ', function ($bot) {
            $this->startConversation($bot);
        });

        $botman->hears('ขอสอบถามหน่อยครับ', function ($bot) {
            $this->startConversation($bot);
        });

        $botman->hears('โปรโมชั่น', function ($bot) {
            $bot->reply('...............');
            // $this->startConversation($bot);
         });

       

        // 
        $botman->fallback(function($bot) {
           $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
        });

/* showe image
$botman->hears('image attachment', function (BotMan $bot) {
    // Create attachment
    $attachment = new Image('https://botman.io/img/logo.png');

    // Build message object
    $message = OutgoingMessage::create('This is my text')
                ->withAttachment($attachment);

    // Reply message object
    $bot->reply($message);
});*/

        $botman->listen();

    }
  
    /**
     * Place your BotMan logic here.
     */
   
     public function startConversation(BotMan $bot)
     {
       $bot->startConversation(new OptionsConversation());
     }
   
}


