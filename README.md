<h2>Generate crud in Laravel 5.5</h2>

<a href="https://github.com/marionassef/laravel-crud-generator/blob/master/LICENSE" rel="nofollow"><img src="https://img.shields.io/github/license/marionassef/laravel-crud-generator.svg" alt="Licence" style="max-width:100%;"></a>
<a href="https://packagist.org/packages/marionassef/laravel-crud-generator" rel="nofollow"><img src="https://img.shields.io/github/issues/marionassef/laravel-crud-generator.svg" style="max-width:100%;"></a>

This package helps Backend developers to speed up creating dashboard and apis using command line 
Here's how you use it, let's say we have news module so all you have to do is Run the following command in your terminal:

`php artisan generate:adminModule News
`

that will create the following:

1.controller with crud functions
 
2.crud views

3.routes for crud 

4.api controller with crud functions

5.model 

6.transformer

7.migration file 


**Installation** 

Begin by installing the package through Composer. Run the following command in your terminal:

`composer require marionassef/laravel-crud-generator`

The package will automatically register a service provider and alias.

**but you have to publish** the package's files by running:

`php artisan vendor:publish --provider="MarioNassef\LaravelCrudGenerator\LaravelCrudGeneratorServiceProvider"`


that will publish the assets views for admin panel and helper files

**Usage**

run 
`php artisan make:auth`

this will ask you if you want to replace home view **don't replace**
if you accidentally replace the file it's okay Download home.blade from src and replace it     

by running:
`php artisan 
`
you will find the following commends:

` generate:adminModule  {name}
`

I had described that above

`generate:adminController {name}`

that will just create admin controller with crud functions


` generate:adminModel    {name}    
` 

that will just create model

`generate:adminRoutes     {name}  
` 

that will just append routes for crud functions in web.php 

`generate:adminTransformer  {name}
` 

that will just create Transformer

`generate:adminViews  {name}
` 

that will just create views 

`generate:apiController {name}
`

that will just create api Controller with crud functions 


you need to add tabs for the modules you generated to menu file you will find it in views/common

that all.

**Please Note** 

this package use abstract transformer from <p><a href="https://github.com/themsaid/laravel-model-transformer">Here</a> </p>

thanks for Mohamed Said

for any comment or issue please don't hesitate to contact me:developer.mario.nassef@gmail.com

**happy coding**