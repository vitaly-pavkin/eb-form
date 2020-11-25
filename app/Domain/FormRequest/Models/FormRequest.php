<?php

namespace Domain\FormRequest\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormRequest
 * @package Domain\Models
 */
class FormRequest extends Model
{
    /**
     * @var array
     */
    public $fillable = [
        'name',
        'phone',
        'message',
    ];
}
