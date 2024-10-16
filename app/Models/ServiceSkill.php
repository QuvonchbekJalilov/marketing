<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'skill_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
