### Features

- Creates random string.


### Installation

`$ composer require yerey/random`


### Usage

```php
<?php

	require_once 'vendor/autoload';
	use Random\Random;
```

### Example

```php
<?php

    require_once '/vendor/autoload.php';

    use Random\Random;

    $random = new Random();
    echo $random->create();

?>
```

##Functions

| Function name | Description                    |
| ------------- | ------------------------------ |
| `create()`      | Creates random string|
