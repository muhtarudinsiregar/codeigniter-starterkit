# Codeigniter Starterkit

## Installation
 1. clone this repo `git clone https://github.com/muhtarudinsiregar/codeigniter-starterkit.git`
 2. then run command `composer install`.
 3. for available list command, run `php ci`

## Cheatsheet

### Code Style
in Windows, run `vendor\bin\phpcs --standard=PSR2 application/controllers` for code style.

### Dump
You can use `dd($foo)` for better var_dump.

## Todo
* [ ] Auth
* [X] VarDumper
* [ ] Input
* [X] squizlabs/PHP_CodeSniffer
* [ ] Twig
* [X] Codeception
* [X] Laravel Elixir
* [X] Phinx for Migrate and Seeder
    * [X] User Table
* [X] Symfony/console
    * [X] Make Console command
    * [X] Make Migration command
    * [X] Make Rollback command
    * [X] Make Seed command
    * [X] Make Seed Run command
    * [ ] Make controllers command
    * [ ] Make models command
    * [ ] Make App install command

## References
 https://laravel.com/docs/5.2/elixir#javascript

 http://codeception.com/quickstart

 https://symfony.com/doc/current/components/var_dumper.html

 https://symfony.com/doc/current/components/console.html
