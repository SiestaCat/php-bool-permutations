# php-bool-permutations

Install:

```
composer require siestacat/bool-permutations
```

Usage:

```
use Siestacat\BoolPermutations\Permutate;

print_r(Permutate::get(1));
OUTPUT:
Array
(
    [0] => Array
        (
            [0] => 
        )

    [1] => Array
        (
            [0] => 1
        )

)

print_r(Permutate::get(2));
Array
(
    [0] => Array
        (
            [0] => 
            [1] => 
        )

    [1] => Array
        (
            [0] => 
            [1] => 1
        )

    [2] => Array
        (
            [0] => 1
            [1] => 
        )

    [3] => Array
        (
            [0] => 1
            [1] => 1
        )

)


```


Tests:

```
git clone https://github.com/SiestaCat/php-bool-permutations.git
cd php-bool-permutations
composer install
composer run-script test
```
