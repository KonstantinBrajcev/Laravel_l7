<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // имя таблицы
    protected $table = 'user';

    // Указание, полей которые можно массово заполнять
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'workdata',
    ];
    public $timestamps = false; // Отключение временных меток
}
