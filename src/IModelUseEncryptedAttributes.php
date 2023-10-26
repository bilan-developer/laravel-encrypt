<?php
declare(strict_types=1);

namespace Pmedynskyi\LaravelEncrypt;

use Illuminate\Database\Eloquent\Casts\Attribute;

interface IModelUseEncryptedAttributes
{
    /**
     * @return Attribute
     */
    public function encryptedAttribute(): Attribute;
}

