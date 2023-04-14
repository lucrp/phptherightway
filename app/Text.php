<?php

namespace App;

class Text extends Field
{
    public function render($x = 1): string
    {
        return <<<HTML
<input type="text" name="{$this->name}" /> 
HTML; // in real apps we would use a view file to render, but in sake of simplicity we're using the heredoc sintax.
    }

}