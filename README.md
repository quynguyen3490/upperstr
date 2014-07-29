Upperstr
========

* Convert string to upper

Installation
------------

Add to 'composer.json':
```js
{
	"required": {
		"quynguyen3490/upperstr": "dev-master"
	}
}
```

Then, run 'composer.phar update'.

After this, add provider and alias in 'app/config/app.php' :

```php
return array(
	// ...

	'providers' => array(
		// ...

		'Quynguyen\Upperstr\UpperstrServiceProvider',
	),

	// ...

	'aliases' => array(
		// ...

		'Upperstr' => 'Quynguyen\Upperstr\Facades\Upperstr',
	),
);
```