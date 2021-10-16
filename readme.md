## Helpers for Laravel framework

### Installation:

```bash
composer require skprods/laravel-helpers
```

### Console

`Console` is a facade for displaying information to the terminal. 
It can be used to display the script execution process.

For example:
```php
use SKprods\LaravelHelpers\Console;

Console::info('Hello from terminal!');
```

The output differs in color depending on the type.