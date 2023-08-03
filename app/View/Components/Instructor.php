<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Instructor extends Component
{
    public $image;
    public $plug;
    public $name;
    public $title;
    public $bio;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $plug, $name, $title, $bio)
    {
        $this->image = $image;
        $this->plug = $plug;
        $this->name = $name;
        $this->title = $title;
        $this->bio = $bio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.instructor');
    }
}
