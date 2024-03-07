<?php

namespace YavuzC\FilamentCharCounter;

use Filament\Forms\Components\Textarea as FilamentTextarea;
use YavuzC\FilamentCharCounter\Concerns\HasCharacterLimit;

class Textarea extends FilamentTextarea
{
    use HasCharacterLimit;

    protected string $view = 'yavuzc-filament-char-counter::textarea';
}
