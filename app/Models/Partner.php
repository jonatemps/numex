<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Partner extends Model
{
    use HasFactory,AsSource, Filterable, Attachable;

    protected $guarded = [];

    public function cat(){

        switch ($this->category) {
            case 'first':
                return 'Platinium';
            case 'second':
                return 'Gold';
            case 'third':
                return 'Bronze';
            break;
        }
    }
}
