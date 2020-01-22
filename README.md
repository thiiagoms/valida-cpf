# Validador de CPF! :credit_card:

Em um pequeno projeto, tive a necessidade de criar um simples validador de CPF, apesar de existirem milhões de exemplos na internet espero que este pequeno projeto possa um dia ajudar alguém assim como me ajudou! Espero também poder adicionar demais funcionalidades ao projeo como: consultas de CNPJ, DETRAN, etc.

## Como utilizar ?!

1 - Clone o projeto na sua pasta de plugins ou onde desejar!

```
git clone https:github.com/ekkopy/valida-cpf.git
```

2 - Faça o require na sua classe e após use o método validaCPF!

```php
<?php
   
 require_once("class".DIRECTORY_SEPARATOR."Cpf.php");

 $cpf = new ValidaCpf();

 if($cpf->validarCPF("123456789")):
    echo "CPF Valido";
 else:
    echo "CPF Invalido";
 endif;

?>

```
