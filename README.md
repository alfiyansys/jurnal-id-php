# Jurnal.id PHP Wrapper
PHP Library for Jurnal.id services

### How to use
Using composer 

    composer require alfiyansys/jurnal-id-php:dev-master

### Direct API Access 
Main wrapper class constructor:

    Jurnal("YOUR-API-KEY-HERE", IS-PRODUCTION?);

**Example getting contacts**

    use JurnalID\Jurnal;
    $jurnal = new Jurnal($apikey, FALSE);
    $jurnal_array = $jurnal->exec("contacts");

### Object Wrapped API Access
**WIP**