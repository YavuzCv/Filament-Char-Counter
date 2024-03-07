<?php

namespace YavuzC\FilamentCharCounter;

use Filament\Forms\Components\TextInput as FilamentTextInput;
use YavuzC\FilamentCharCounter\Concerns\HasCharacterLimit;

class TextInput extends FilamentTextInput
{
    use HasCharacterLimit;

    protected string $view = 'yavuzc-filament-char-counter::text-input';
}
