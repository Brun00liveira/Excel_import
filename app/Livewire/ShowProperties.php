<?php

namespace App\Livewire;

use Livewire\Component;

class ShowProperties extends Component
{
    public $message = 'teste';

    
    public function updatedMessage($value)
    {
       
        if (strlen($value) > 5) {
        
            $this->message = "Mensagem muito longa!";
        } else {
          
            $this->message = $value;
        }
    }


    public function render()
    {
        return view('livewire.show-properties');
    }
}
