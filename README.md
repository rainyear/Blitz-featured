===================================================================================================
Installing blitz
===================================================================================================
tar zxvf blitz.tar.gz
cd blitz
phpize
./configure
make
make install

===================================================================================================

Blitz is a [fast and powerfull template engine for very big internet projects](http://alexeyrybak.com/blitz/blitz_en.html)

As the author said:

> The reason why Blitz objects are called "**template controllers**" is simple. From the very early days template language in Blitz was designed to be as simple ("non-programming") as possible. For example, there is still no "for" or "foreach" statement in Blitz. This surely doesn't mean you can't do any looping :) But you have to loop from your PHP-code, this is called "passive" templates (in Blitz you can do a lot of "active" templating as well - conditions, callbacks, plugins - but loops like "foreach", complex expressions, all these "programming" statements are still under the law). 

Blitz(til v0.8.6) does not support PHP-like "for" or "foreach" loop statement for design's sake, but you can still use PHP code to make loop things, like this:

`$View = new Blitz();
$View->load('hello {{ BEGIN block }} {{ $name }} {{ END }}');
$T->display(
    array('block' => array(
        array('name' => 'Dude'),
        array('name' => 'Donny'),
        array('name' => 'Sobchak'),
    ))
);`

As shown above, `BLOCK` aka `BEGIN` statement in Blitz actually iterates an Array's elements and assigns them into the template, but to achieve this situation you'll have to format the input var into a nested array, that might be much clear for complex inputs, but looks horrible if we just wana to render a simple list like `'name' => array('Dude', 'Donny', 'Doggy')`, so i mix this little feature into the original Blitz projects