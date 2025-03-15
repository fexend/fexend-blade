<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Divider extends Component
{
    /**
     * The divider text.
     *
     * @var string|null
     */
    public $text;

    /**
     * The divider position/style.
     *
     * @var string
     */
    public $position;

    /**
     * The divider style.
     *
     * @var string
     */
    public $style;

    /**
     * Create a new component instance.
     *
     * @param  string|null  $text
     * @param  string  $position
     * @param  string  $style
     * @return void
     */
    public function __construct($text = null, $position = 'center', $style = 'solid')
    {
        $this->text = $text;
        $this->position = $position;
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.divider');
    }
}
