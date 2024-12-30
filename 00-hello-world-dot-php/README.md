# HelloWorld.php

An unofficial fork of
[NanowarOfSteel's HelloWorld.java](https://github.com/NanowarOfSteel/HelloWorld).

"_True Metal Programming_" (ie _"write code so badly that only you can sing it"_)
cannot possibly be bound to just Java. So we're porting it to PHP.

Please see [source-code video](https://www.youtube.com/watch?v=yup8gIXxWDU)
for inspiration.

## Coding Challenge Instructions

Translate the following Java code to PHP, and become a true dev metal:

```java
package it.nanowar.ofsteel.helloworld;

public class HelloWorldMainLauncherClass {
	
	public HelloWorldMainLauncherClass(int foo) {
		
		super();
		this.foo=foo;
	}
	
	private Integer foo=0;
	
	public void songRefrain() {
		
		for (int i=0; i<foo; i++) {
			System.out.println("Hello World!");
			
		}
		
		int pippo=0;
		while (pippo<foo) {
			System.out.println("Hello World!");
			pippo++;
		}
	}
	
	public static void main (String [] args) {
		System.out.println("Hello World Programmer Start");
		HelloWorldMainLauncherClass tizio = new HelloWorldMainLauncherClass(2);
		tizio.songRefrain();
		System.out.println("Program Finished!");
		tizio.falseMethod();
	}
	
	/*
	 * If I may introduce a bug, the JVM will manage it for me
	 * ensuring both security and portability
	 * Then I'll write my code once, and run it everywhere!
	 * With Static and Strong Typing, will let my programs be type safe!
	 */
	
	public void falseMethod() {
		boolean metal=false;
		if(metal==false) {
			String joeyDeCaio=null;
			joeyDeCaio.length();
		}
	}
}
```

## Want to know more?

Find more documentation in `./doc/`:

* [Installation](./doc/00-installation.md)
* [Usage](./doc/01-usage.md)
