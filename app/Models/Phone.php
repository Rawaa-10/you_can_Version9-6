<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Phone
 * @package App\Models
 */
class Phone extends Model
{
    use HasFactory;
    protected $table='phones';
    protected $fillable=[
        'phone'
    ];
    public function company(){
        return $this->belongsTo(Company::class , 'comp-id');
    }
}
