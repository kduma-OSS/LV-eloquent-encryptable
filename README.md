# L5-eloquent-encryptable
Adds possibility to encrypt fields in Laravel Eloquent models.


# Setup
Add the package to the require section of your composer.json and run `composer update`

    "kduma/eloquent-encryptable": "~1.0"

# Prepare models
In your model add following lines:
    
    use \KDuma\Eloquent\Encryptable;
    protected $encrypted=['list', 'of', 'fields', 'you', 'wan\'t', 'to', 'encrypt'];

# Usage

It will be automaticly encrypting and decrypting fields defined in `$encrypted` property of your model.

Those fields must be `string` or `text` for longer values.

# YOTTARAM

A special thanks to [Jonathan Stavis](http://yottaram.com/blog/2014/10/24/encrypting-eloquent-models/), an original code creator that this package is based on.



# Packagist
View this package on Packagist.org: [kduma/eloquent-encryptable](https://packagist.org/packages/kduma/eloquent-encryptable)


