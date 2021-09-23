<p align="center">
  <a href="https://github.com/thiiagoms/valida-cpf">
    <img src="assets/card.png" alt="Logo" width="80" height="80">
  </a>
     <h1 align="center">Validacao de CPF</h1>
</p>

[PT-BR] 🇧🇷

Simples validador de CPF para pequenos projetos :) 

- [Dependencias](#Dependencias)
- [Utilizacao](#Utilizacao)

#### Dependencias

- PHP 7.4+
- Composer (Opcional)

#### Utilizacao

1 - Clone o projeto na sua pasta de plugins ou onde desejar!
```bash
$ git clone https://github.com/thiiagoms/valida-cpf.git
```

1.1 - Se nao possuir algum autoload no projeto, utilize o composer para gerar o dump:
```bash
$ composer dump-autoload
```

2 - Faca a chamada na sua classe do metodo!

```php
<?php

use Src\Validation\CPF;

require_once __DIR__ . '/vendor/autoload.php';

$cpf = CPF::validar("111.111.111-11");

var_dump($cpf); // bool (false)
?>
```

Muito obrigado ao canal WDev pelas dicas e ensinamentos :heart: :elephant:
