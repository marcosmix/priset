<?php

namespace App\View\Components\base;

use Illuminate\View\Component;

class header extends Component
{
    public $variable;
    
    public function __construct()
    {
        
    }

    
    public function render()
    {
        return view('components.header');
    }
}
