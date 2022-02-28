Sample VK API usage v0.0.1
========================

How to start?
* `git clone https://github.com/MikeIceman/vk-test.git`
* Create 
    [Standalone application](https://vk.com/editapp?act=create)
    and get new
    [Service key](https://vk.com/dev/access_token?f=3.%20%D0%A1%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D0%BD%D1%8B%D0%B9%20%D0%BA%D0%BB%D1%8E%D1%87%20%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF%D0%B0) 
* Copy `config.sample.php` to `config.php`
* Fill configuration fields
* Execute `composer update` command
* Enjoy!
* Open to work?
 
 Sample responses (see `like.php`)

```php
 Array
(
    [count] => 11
    [items] => Array
        (
            [0] => 237006757
            [1] => 2122142
            [2] => 3678516
            [3] => 4033362
            [4] => 6176249
            [5] => 7139978
            [6] => 10623252
            [7] => 13414342
            [8] => 121753088
            [9] => 140844753
            [10] => 483562507
        )
)
```
```php
Array
(
    [count] => 54
    [items] => Array
        (
            [0] => Array
                (
                    [type] => profile
                    [id] => 11341426
                    [first_name] => Yulia
                    [last_name] => Burtasova
                    [is_closed] => 1
                    [can_access_closed] => 
                )

            [1] => Array
                (
                    [type] => profile
                    [id] => 3231264
                    [first_name] => Kristina
                    [last_name] => Barshentseva
                    [is_closed] => 
                    [can_access_closed] => 1
                )

            [2] => Array
                (
                    [type] => profile
                    [id] => 96268968
                    [first_name] => Alexey
                    [last_name] => Belyaev
                    [is_closed] => 
                    [can_access_closed] => 1
                )
             ...
             ...
             ...
         )
    )
```
