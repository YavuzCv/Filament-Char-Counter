<?php

namespace YavuzCv\FilamentCharCounter;

use Filament\Forms\Components\TextInput as FilamentTextInput;
use YavuzCv\FilamentCharCounter\Concerns\HasCharacterLimit;

class TextInput extends FilamentTextInput
{
    use HasCharacterLimit;

    protected string $view = 'yavuzcv-filament-char-counter::text-input';
}
