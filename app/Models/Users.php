<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Users
 * @package App\Models
 */
class Users extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'senha'
    ];
}
