# L5-eloquent-encryptable
[![Latest Stable Version](https://poser.pugx.org/kduma/eloquent-encryptable/v/stable.svg)](https://packagist.org/packages/kduma/eloquent-encryptable) 
[![Total Downloads](https://poser.pugx.org/kduma/eloquent-encryptable/downloads.svg)](https://packagist.org/packages/kduma/eloquent-encryptable) 
[![Latest Unstable Version](https://poser.pugx.org/kduma/eloquent-encryptable/v/unstable.svg)](https://packagist.org/packages/kduma/eloquent-encryptable) 
[![License](https://poser.pugx.org/kduma/eloquent-encryptable/license.svg)](https://packagist.org/packages/kduma/eloquent-encryptable)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/b2497ffc-f575-4eb0-b04a-23072c54a552/mini.png)](https://insight.sensiolabs.com/projects/b2497ffc-f575-4eb0-b04a-23072c54a552)

Adds possibility to encrypt fields in Laravel Eloquent models.


# Setup
Add the package to the require section of your composer.json and run `composer update`

    "kduma/eloquent-encryptable": "^1.1"

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


