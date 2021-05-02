# Endpay PHP SDK

## Requirements

- PHP >= 7.0

## Install
Install package via composer

```cli
composer require endpay/endpay-sdk
```

## Use

### Instance and set configurations
```php
use Endpay\Endpay;

$endpay = new Endpay();

$endpay->setCommerceId('commerceId');
$endpay->setApiKey('apiKey');
```

### Create a payment
```php
$payment = $endpay->payments()->create([
    'subject' => 'Prueba desde SDK PHP',
    'amount' => 1
]);
```


### Read a payment
```php
$paymentData = $endpay->payments()->read($payment['id']);
```
