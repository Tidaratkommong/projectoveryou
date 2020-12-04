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


class CompletedTodoConversation extends Conversation
{
    /**
     * First question
     */ 
    public function run()
    {
       
      $this->bot->reply('

      การคืนสินค้า
      <br> ...............................................
      <br>***  หมายเหตุ แจ้งการคืนสินค้าภายใน 7 วันหลังได้รับสินค้า  ***
      <br> 1. การยื่นคำร้องขอคืนสินค้า/คืนเงิน
      <br> -- ผู้ซื้อสามารถยื่นคำร้องขอคืนสินค้าที่ซื้อ (“สินค้า”) และ/หรือคืนเงินก่อนวันหมดเขตระยะเวลา ดังที่ระบุไว้ในเงื่อนไขการให้บริการโดยเป็นไปตามข้อกำหนดและเงื่อนไขการให้บริการ
      <br>
      <br> 2. การยื่นคำร้องขอคืนสินค้า
      <br>   -- ผู้ซื้อสามารถยื่นคำร้องขอคืนเงินและ/หรือคืนสินค้าในสถานการณ์ต่อไปนี้เท่านั้น
      <br>     > ผู้ซื้อไม่ได้รับสินค้า
      <br>     > สินค้ามีตำหนิ ใช้การไม่ได้
      <br>     > ผู้ขายส่งสินค้าไม่ตรงกับข้อมูลจำเพาะที่ตกลงกันไว้
      <br>  -- ผู้ซื้อจะต้องส่งคำร้องของผู้ซื้อผ่านทาง Facebook ที่เพจ :Over You99 จะตรวจสอบคำร้องของผู้ซื้อแต่ละคนแบบเป็นกรณีๆ ไป 
      <br> ............................................... 
      
       ');

      //$image = Image::url('foo')->title('title');
      //$message = OutgoingMessage::create()->withAttachment($image);
     // $this->bot->reply('');// The original payload
    }
    

          
        
        
    
}
