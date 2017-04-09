[![Build Status](https://travis-ci.org/johnnymast/morsecode.svg?branch=master)](https://travis-ci.org/johnnymast/morsecode)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/johnnymast/morsecode/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/morsecode/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/johnnymast/morsecode/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/morsecode/?branch=master)

# Morsecode

This package allows you to encode or decode morsecode messages.


## Encoding


```php
use JM\Morsecode\Morsecode;

$morse = new Morsecode();
echo $morse->encode('This is a test');
```

## Decoding

```php
use JM\Morsecode\Morsecode;

$morse = new Morsecode();
echo $morse->decode('.... .. ... / .. ... / .- / - . ... -');
```

## Alternative methods

You can also pass the message you wish you encode or decode via the constructor of the class like so.

```php
use JM\Morsecode\Morsecode;

$morse = new Morsecode('This is a test');
echo $morse->encode();
```

## Installation

Using [composer](http://www.getcompser.com):

```bash
$ composer require jm/morsecode
```

## Development Requirements

+ Phpunit 5.7


## Author

This package is created and maintained by [Johnny Mast](https://github.com/johnnymast). If you have any questions feel free to contact me on twitter by using [@mastjohnny](https://twitter.com/intent/tweet?text=@mastjohnny) in your tweet.

 
## License

Copyright (c) 2017 Johnny Mast

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
  