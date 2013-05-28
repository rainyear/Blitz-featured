<html>
  <head>
    <title>Smarty</title>
  </head>
  <body>
  <h1>Hello, {$name}!</h1>
  <hr/>
  <p>Name List</p>
  <ul>
	{foreach $list as $name}
	<li>{$name@key}: {$name}</li>
	{/foreach}
  </ul>
  </body>
</html>
