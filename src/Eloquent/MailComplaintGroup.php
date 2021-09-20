<?php

namespace Megaverse\LaravelSesManager\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MailComplaintGroup extends Model
{
    use HasFactory;

    const TABLE_NAME = 'email_complaint_groups';

    protected $table = self::TABLE_NAME;

    protected $fillable = [
        'driver',
        'reason',
        'complained_at',
        'payload',
    ];

    protected $casts = [
        'complained_at' => 'datetime',
        'payload' => 'array',
    ];

    public function complaints()
    {
        return $this->hasMany(MailComplaint::class, 'group_id');
    }
}