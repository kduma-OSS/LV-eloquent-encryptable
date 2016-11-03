<?php

namespace KDuma\Eloquent;

use Illuminate\Contracts\Encryption\DecryptException;

/**
 * Class Encryptable.
 */
trait Encryptable
{
    /**
     * @param $key
     * @return mixed
     */
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        try {
            if (array_key_exists($key, array_flip($this->encrypted))) {
                $value = \Crypt::decrypt($value);
            }
        } catch (DecryptException $e) {
        }

        return $value;
    }

    /**
     * @param $key
     * @param $value
     */
    public function setAttribute($key, $value)
    {
        if (array_key_exists($key, array_flip($this->encrypted))) {
            $value = \Crypt::encrypt($value);
        }

        return parent::setAttribute($key, $value);
    }
}
