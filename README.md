# Laravel Make Trait!

> You can find an English version from material at the end of the document.

## Pré Requisitos

Os procedimentos desse recurso estão homologados para a versão ˆ5.6.33 do Laravel Framework. Quando for efetuar a instalação, certifique-se da versão do seu sistema e se ele está de acordo com o esperado!

## Instalação

Essa lib está disponível no **packgist** e deve ser instalada via composer.

* Importante: Verifique se não há a necessidade de forçar determinada versão.

```
composer require upinside/laravel-make-trait
```

Finalizado o processo de instalação, é necessário adicionar a seguinte entrada ao vetor de providers do Laravel.

Esse arquivo está localizado em ``config/app.php`` (na versão 5.6.33).

```php
'providers' => [
    ...
    
    /*
     * Package Service Providers...
     */
    UpInside\LaravelMakeTrait\MakeTraitServiceProvider::class,
    
    ...
];
```

Com esse procedimento feito, você pode acessar o Terminal do seu sistema operacional ou da sua IDE e executar o comando ``list`` do artisan.

```
php artisan list
```

Se tudo ocorrer como previsto, você será uma saída com o comando listado:

```
...
make:test            Create a new test class
make:trait           Create a new trait
...
```

## Uso

Agora para trabalhar com as Traits usando o comando artisan, basta invocar da seguinte forma:

```
php artisan make:trait Test
```

Isso fará com que seja criado um novo arquivo em ``app/Traits/Test.php`` com o seguinte conteúdo:

```php
<?php

namespace App\Traits;

trait Test
{
    //
}
```

## Contribuição

Deseja enviar um correções? Só efetuar um pull-request deste repositório e efetuar a alteração dentro de uma nova branch (que não seja a master).

Crie uma branch com seu nome (gustavo-web) com as correções para que seja aprovada.
Maiores informações, você pode ter através de cursos@upinside.com.br.

@guhweb que mantém esse projeto rodando!

# English Version

## Requirements

The procedures for this feature are approved for version 5.6.33 of the Laravel Framework. When you are installing, make sure your system version is up and running as expected!

## Installation

This lib is available in the **packgist** and must be installed via composer.

* Important: Make sure there is no need to force a particular version.

```
composer require upinside/laravel-make-trait
```

Once the installation process has finished, you must add the following entry to the Laravel providers array.

This file is located in ``config/app.php`` (in version 5.6.33).

```php
'providers' => [
    ...
    
    /*
     * Package Service Providers...
     */
    UpInside\LaravelMakeTrait\MakeTraitServiceProvider::class,
    
    ...
];
```

With this procedure done, you can access the Terminal/Shell of your operating system or your IDE and execute the ``list`` command of the artisan.

```
php artisan list
```

If everything happens as expected, you will be output with the listed command:

```
...
make:test            Create a new test class
make:trait           Create a new trait
...
```

## Use

Now to work with Traits using the artisan command, just invoke as follows:

```
php artisan make:trait Test
```

This will cause a new file to be created in ``app/Traits/Test.php`` with the following content:

```php
<?php

namespace App\Traits;

trait Test
{
    //
}
```

## Contribution

Do you want to submit a correction? Just do a pull-request from this repository and make the change inside a new branch (other than the master).

Create a branch with your name (gustavo-web) with the corrections for it to be approved.
More information, you can have through cursos@upinside.com.br.

@guhweb that keeps this project running!

