<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'tarefa_id',
    ];

    public function tarefa(){
        
        return $this->belongsTo(Tarefa::class);
    }
}
