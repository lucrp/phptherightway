<?php

namespace App;

class ToasterPro extends Toaster
{
    public function __construct(string $x)
    {
        parent::__construct();

        $this->size = 4;
    }

    public function addSlice(string $slice): void
    {
        // my custom logic
    }

    public function toastBagel()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . ' with bagel option <br>';
        }
    }
}