# zendesk
This class provides some simple PHP helper function for implementing Zendesk within your website.

## Getting Started
You can install this package using Composer by adding this line to your composer.json ```require``` statement.
```json
"marcwitteveen/zendesk": "dev-master"
```

And then run from terminal:
```Bash
sudo composer update
```

## Code Sample
```php
use MarcWitteveen\Zendesk\Zendesk;

Zendesk::widget('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx', true);

/* This will render the following code:
<!-- Start of Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"> </script>
<!-- End of Zendesk Widget script -->
*/
```

## Methods:

- ```Gtm::widget($key = "", $enabled = false)```

## ```widget``` Method
#### Description
Renders a Zendesk chat widget, the call needs to be placed as close as possible to the </body> tag.

#### Parameters
- ```$key``` (required): The Zendesk key. You can get this value from Zendesk widget interface.
- ```$enabled``` (required): When set to true the widgets is rendered.