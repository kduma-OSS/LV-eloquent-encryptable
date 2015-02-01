<?php namespace KDuma\Eloquent;

use Illuminate\Contracts\Encryption\DecryptException;

/**
 * Class Encryptable
 * @package KDuma\Eloquent
 */
trait Encryptable {

    /**
     * @param $key
     * @return mixed
     */
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

    /**
     * @param $key
     * @param $value
     */
    public function setAttribute($key, $value)
    {
        if (array_key_exists($key, array_flip($this->encrypted))) {
            parent::setAttribute($key, \Crypt::encrypt($value));
            return;
        }

        parent::setAttribute($key, $value);
    }
}
