# Composer PSR-4 Autoloading Demo

Ukázka PSR-4 autoloadingu v PHP bez použití `require()`.

## Struktura projektu
```
src/
├── Model/
│   └── User.php
├── Repository/
│   └── UserRepository.php
└── Service/
    └── GreetingService.php
```

## Spuštění

```bash
composer install
php index.php
```

## Co projekt demonstruje

- PSR-4 autoloading přes Composer
- Oddělení vrstev (Model, Repository, Service)
- Typování v PHP 8 (`readonly`, `strict_types`)