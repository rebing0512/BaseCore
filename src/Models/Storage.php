<?php

namespace Jenson\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $connection = 'storage_mysql';

    protected $table = 'attachments';
}
