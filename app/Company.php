<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $table = 'companies';
    public $primaryKey = 'companyId';
    public $timestamps = true;
}
