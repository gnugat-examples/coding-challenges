# Overview

The `/bin/script.php` file will launch `HelloWorldMainLauncher::main()`.

## HelloWorldMainLauncher

There are some difference with the
[source material](https://github.com/NanowarOfSteel/HelloWorld/blob/master/src/main/java/it/nanowar/ofsteel/helloworld/HelloWorldMainLauncherClass.java):

* `namespace` is the PHP equivalent to Java's `package`,
  and its PHP convention is `<Vendor>\<Project>`
* PHP only support public classes, so no visibility keyword used
* I couldn't bring myself to add `Class` prefix to class name,
  [Hungarion Notation](https://en.wikipedia.org/wiki/Hungarian_notation)
  be damned
* PHP functions need to be declared with `function` keyword,
  and their return type is specified after the closing round bracket
* `__construct` is the PHP equivalent to Java's constructor,
  it doesn't require a `super()`,
  it doesn't require  a return type,
  and since version 8 it has [constructor property promotion](https://www.php.net/manual/en/language.oop5.decon.php#language.oop5.decon.constructor.promotion)
* in PHP variables are prefixed with `$`,
  local variables cannot be typed (yet),
  class attributes are accessed through `$this->`
* PHP provides `echo` as a language construct to print to the standard output,
  so no need to use a function like Java's `System.out.println()`,
* because of the weak tying, calling a function that takes a string like `strlen()`
  on a non string value like `null` won't throw any error
  (`null` will be converted to an empty string `''`)

## What's next?

Have a look at [Future Improvements](./03-improvements.md).
