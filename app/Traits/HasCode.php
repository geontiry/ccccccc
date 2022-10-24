<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasCode
{
    /**
      * Create Model Data for Code Field
      */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }
}
