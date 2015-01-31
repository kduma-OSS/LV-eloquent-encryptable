<?php namespace KDuma\Eloquent;

use Illuminate\Contracts\Encryption\DecryptException;

trait Encryptable {

    public function getAttribute($key)
    {
        try {
            if (array_key_exists($key, array_flip($this->encrypted)))
            {
                return \Crypt::decrypt(parent::getAttribute($key));
            }

            return parent::getAttribute($key);
        }catch (DecryptException $e){
            return parent::getAttribute($key);
        }
    }

    public function setAttribute($key, $value)
    {
        if (array_key_exists($key, array_flip($this->encrypted))) {
            parent::setAttribute($key, \Crypt::encrypt($value));
            return;
        }

        parent::setAttribute($key, $value);
    }
}