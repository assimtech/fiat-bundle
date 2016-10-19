# FiatBundle

[![Build Status](https://travis-ci.org/assimtech/fiat-bundle.svg?branch=master)](https://travis-ci.org/assimtech/fiat-bundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/assimtech/fiat-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/assimtech/fiat-bundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/assimtech/fiat-bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/assimtech/fiat-bundle/?branch=master)

This bundle integrates [Assimtech\Fiat](https://github.com/assimtech/fiat) with Symfony.



## Installation

```shell
composer require assimtech/fiat-bundle
```

Add the bundle to your `AppKernel`

```php
$bundles = array(
    /** Your other bundles */
    new Assimtech\FiatBundle\AssimtechFiatBundle(),
);
```


## Services Exposed

This bundle exposes the `Assimtech\Fiat\Accountant` as the symfony service `assimtech_fiat.accountant`

See [Assimtech\Fiat](https://github.com/assimtech/fiat) for documentation


## Twig integration

This bundle exposes the `Assimtech\Fiat\Accountant` as a `Twig_Extension`

See [Assimtech\Fiat](https://github.com/assimtech/fiat) for documentation
