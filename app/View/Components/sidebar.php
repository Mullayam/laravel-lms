<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Sidebar_Menu;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function notFeatured(int $int=0){
        $value = Sidebar_Menu::where('is_active','=',$int)->get();
         return $value;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $__headerMenu = $this->notFeatured(1);
        $__pages = $this->notFeatured(2);
        return view('components.sidebar',
        [
            'lists'=>$__headerMenu,
            'pages'=>$__pages,
        ]
    );
    }
}
