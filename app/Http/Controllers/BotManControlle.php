<?php
  
namespace App\Http\Controllers;
  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;
  
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $message) {
  
            if ($message == 'hi') {
                $this->askName($botman);
                
            }else{
                $botman->reply("write 'hi' for start chat");
            }
  
        });
  
        $botman->listen();
    }
  
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $this->say('Hello '.$name);
            //$this->Location();
            
        });

        
    }
    public function Location($botman){
        $botman->ask('To get location type location, To get know about credit card details type credit, To contact Admin type admin ', function(Answer $answer){
            $rep=$answer->getText();
            $rep2=strtolower($rep);
            if($rep2=='location'){

            }
            elseif($rep2=='credit'){
                $this->say('click <a href="https://google.com">here</a> for answers.');
            }
            elseif($rep2=='admin'){
                $this->say('Use contact form in navigation bar');
            }
            else{
                $this->say("I can't understand");
            }
        });
    }
}