<?php

namespace Megaverse\LaravelSesManager\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MailComplaint extends Model
{
    use HasFactory;

    const TABLE_NAME = 'email_complaints';

    protected $table = self::TABLE_NAME;

    public function complaintGroup()
    {
        return $this->belongsTo(MailComplaintGroup::class);
    }
}