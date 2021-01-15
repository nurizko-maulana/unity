<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Community extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        'id','Community_name','Location','Emergency_number',
        'Community_info','Community_highcommite','Community_motto',
    ];
}
