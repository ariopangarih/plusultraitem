<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Http\Request;
use Auth;
use App\Models\User;

class QuizIndex extends Component
{
    public $number = 1;
    public $q; 
    public $correct;
    public $score;

    public function render()
    {   
        $url= file_get_contents('https://opentdb.com/api.php?amount=1&category=15&difficulty=easy&type=boolean');
        $obj = json_decode($url,true);
        $this->q = htmlspecialchars_decode($obj['results'][0]['question']);
        $this->correct = $obj['results'][0]['correct_answer'];

        return view('livewire.quiz-index',[
            'question'=> $this->q,
            'number'=>$this->number,
            'hint'=>$this->correct,
        ]);
    }

    public function check($answer){
        if($answer){
            if($this->number == 3){
                $this->number =1;

                if($this->score == 0){
                    session()->flash('plus','You got no Ticket!');    
                }
                else{
                    session()->flash('plus','You got '.$this->score.' Ticket(s)!');
                }
                
                $user = User::find(Auth::id());
                $user->ticket = $user->ticket + $this->score;
                $user->save();
                
                $this->score=0;
                return redirect()->route('dashboard');
            }else{
                $this->number +=1;
            }
        }
        if($answer === $this->correct){
            session()->flash('correct', 'Correct Answer!');
            $this->score +=1;
            $this->render();
        }else{
            session()->flash('incorrect', 'Wrong Answer!');
            $this->render();
        }
    }
}
