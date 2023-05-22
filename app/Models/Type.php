<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function type_color(): string
    {
        switch ($this->name) {
            case 'Personal':
                return "danger";
            case 'Boolean':
                return "primary";
            case 'Client':
                return "warning";
            default:
                return 'secondary';
        }
    }
}
