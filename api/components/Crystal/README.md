# Crystal Templating Engine

## Influences
Twig
Smarty
Vanilla PHPTemplate
Blade

## Usage
```php
$crystal = new Crystal();

$crystal->render('template.php', [
    'first_name' => 'John'
]);

// template.php
// Hi my name is <?php echo $first_name; ?>
```

## Important Concepts
- output buffering in PHP
- eval() and extract functions
