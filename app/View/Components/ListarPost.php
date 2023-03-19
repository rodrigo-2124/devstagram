<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListarPost extends Component
{
    //se asigna la variable $posts que viene de cualquier controlador, y el componente pasa esta variable a la vista del compoennete.
    public $posts;

    public function __construct($posts)
    {
        $this->posts= $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.listar-post');
    }
}
