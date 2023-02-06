<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class footer extends Component
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

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        
        <div class="lg:mt-28 mt-10 mb-7 px-12 border-t pt-7">
            <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                <p class="capitalize font-medium"> © copyright 2021  Courseplus</p>
                <div class="lg:flex space-x-4 text-gray-700 capitalize hidden">
                    <a href="#"> About</a>
                    <a href="#"> Help</a>
                    <a href="#"> Terms</a>
                    <a href="#"> Privacy</a>
                </div>
            </div>
        </div>
blade;
    }
}
