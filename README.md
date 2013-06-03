Installing blitz
======
<pre>
phpize
./configure
make
make install
</pre>

----

Blitz is a [fast and powerfull template engine for very big internet projects](http://alexeyrybak.com/blitz/blitz_en.html)

As the author said:

> The reason why Blitz objects are called "template controllers" is simple. From the very early days template language in Blitz was designed to be as simple ("non-programming") as possible. For example, there is still no "for" or "foreach" statement in Blitz. This surely doesn't mean you can't do any looping :) But you have to loop from your PHP-code, this is called "passive" templates (in Blitz you can do a lot of "active" templating as well - conditions, callbacks, plugins - but loops like "foreach", complex expressions, all these "programming" statements are still under the law). 

Blitz(til v0.8.6) does not support PHP-like "for" or "foreach" loop statement for design's sake, but you can still use PHP code to make loop things, like this:

<pre class="line-pre lines highlight">$View = new Blitz();
$View->load('hello {{ BEGIN block }} {{ $name }} {{ END }}');
$View->display(
    array('block' => array(
        array('name' => 'Dude'),
        array('name' => 'Donny'),
        array('name' => 'Sobchak'),
    ))
);</pre>

As shown above, `BLOCK` aka `BEGIN` statement in Blitz actually iterates an Array's elements and assigns them into the template, but to achieve this situation you'll have to format the input var into a nested array, that might be much clear for complex inputs, but also looks horrible if we just wana to render a simple list like `'name' => array('Dude', 'Donny', 'Doggy')`, so i mix this little feature into the original Blitz projects.

----

Usage:
====

0. [Quick geek tutorial](http://alexeyrybak.com/blitz/blitz_en.html#quick-geek)(Original version - Alexey A. Rybak (c) 2005 - 2012)
1. Changes

    1. FOREACH statement added(see [Diff](https://github.com/sniky/Blitz-featured/commit/cf3fb8401f8bb0c96a10ec6bbc70205acb3f6be2)):
    <pre>
    <?php
        $body ="{{FOREACH list}}
	        Key: {{\$\_k}}, Value: {{\$\_v}}{{END}}";
	    $T = new Blitz();
        $T->load($body);
        $T->display(array("list"=>array('a', 'b', 'c'));
	?>
    </pre>
    2. predefined `$_k` and `$_v`(see [Diff](https://github.com/sniky/Blitz-featured/commit/bc2d6b4442b8ef07c49fedfb8c9fc2f1b034699c)), array index `$_k` start from 0 and `$_num` start from 1;
    3. add longer logic check(see [Diff](https://github.com/sniky/Blitz-featured/commit/bc2d6b4442b8ef07c49fedfb8c9fc2f1b034699c)):
    <pre>
    <?php
        $body = "{{IF zc < b && 1 || a > b}}a > b{{ END }}";
        $t = new Blitz();
        $t->load($body);
        $t->display(array("a"=>3, "zc"=>2, "b"=>0));
    ?>
    </pre>
    *can only parse logic check arguments by order, do not support Parentheses*
    