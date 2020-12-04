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
            $this->startConversation($bot);
        });

        $botman->hears('สวัสดีค่ะ', function ($bot) {
            $this->startConversation($bot);
        });

        $botman->hears('สวัสดี', function ($bot) {
           
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

        // show image 
       // $botman->hears('โปรโมชั่น', function ($bot) {
          //  $bot->reply('โปรโมชั่นเดือนธันวาคมคือ');
        // });
        $botman->hears('โปรโมชั่น', function (BotMan $bot) {
            // Create attachment
            $attachment = new Image('https://botman.io/img/logo.png');
            // Build message object
            $message = OutgoingMessage::create('โปรโมชั่นเดือนธันวาคมคือ')
                        ->withAttachment($attachment);
            // Reply message object
            $bot->reply($message);
        });


        $botman->hears('คืนสินค้า', function (BotMan $bot) {
            // Create attachment
            $attachment = new Image('https://botman.io/img/logo.png');
            // Build message object
            $message = OutgoingMessage::create('ขั้นตอนการคืนสินค้า')
                        ->withAttachment($attachment);
            // Reply message object
            $bot->reply($message);
        });

        // 
        $botman->fallback(function($bot) {
           $bot->reply('ขออภัย ฉันไม่เข้าใจคําสั่งเหล่านี้');
        });

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


