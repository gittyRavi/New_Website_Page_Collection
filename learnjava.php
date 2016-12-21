<HTML>
<HEAD>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A New Website.">
<meta name="author" content="Ravi Saxena">

<TITLE>Java:Begineers</TITLE>

<div id="header">Search The Content<br/>
<pre><button id="home">HOME</button>  <button id="id1">MENU</button>  <button id="id2">ARCHIVE</button>  <button id="id3">TEXT</button></pre>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="jquery.buttons.js"></script>

<link rel="stylesheet" type="text/css" href="style3.css">

<Style type="text/CSS">    
	H1{background-color:pink;}
	
			p,H3,pre	{
						padding-left: 2%;
				}
				
			p>u,H3		{
						color:red;
				}
				
			pre			{
						color:green;
						font-size:1vw;
				}
				
			p			{
						color:purple;
				}
						
		.blink_text 											/* for blink operation. */
				{
						animation:2s blinker linear infinite;
						-webkit-animation:2s blinker linear infinite;
						-moz-animation:2s blinker linear infinite;

						color: red;
				}

			@-moz-keyframes blinker
				{  
						0% { opacity: 1.0; }
						50% { opacity: 0.0; }
						100% { opacity: 1.0; }
				}

			@-webkit-keyframes blinker
				{  
						0% { opacity: 1.0; }
						50% { opacity: 0.0; }
						100% { opacity: 1.0; }
				}

			@keyframes blinker {  
						0% { opacity: 1.0; }
						50% { opacity: 0.0; }
						100% { opacity: 1.0; }
				}
</style>
<link rel="stylesheet" type="text/CSS" href="mystyle.css">
</HEAD>
<body>
<H1 class="class1"><center>Learn Java basics here.</center></H1>

<z class="t" align="center">
<center>
<z class="blink_text"><u>Hi I am Java (The one not in Indonesia ;p)</u></z>
</center>
</z>
<br/>
<H3><u>INTRO</u><center><img src="https://achievement-images.teamtreehouse.com/badges_java_basics_Stage1.png" style="width:10%;height:relative"></center></H3>
<p>
The Java programming language was developed at Sun Microsystems and originally
became popular as a language for Internet applications (applets). Such applets are embedded
within WWW pages and executed in the user’s browser. A special format called byte
code is used instead of ordinary machine code, and by using a special Java interpreter program
that code can be executed on any computer. Such an interpreter is called a Java Virtual
Machine (JVM) and is available for most modern computer systems.<br/>
(There is nothing about the Java language itself that enforces the byte code technique –
there are actually some compilers who generate real machine code, known as native code,
directly.)<br/>
The Java language is not limited to Internet applications. It is a complete general objectoriented
language and can be used to develop many kinds of applications. Although the
syntax of Java is very similar to that of C++, many complicated and error-prone features of
C++ have been removed. The result can be described as a Simula with C++ syntax.<br/>
Sun Microsystems (who created the Java language) provide free tools for developing Java
software. The Java home page <i>&lt;http://java.sun.com&gt;</i> has links to Java compilers for
most computer systems (such as Unix and Microsoft Windows), as well as a lot of documentation.<br/>
It is possible to download a Java compiler and use it for free.<br/>
<u>Compiling and running Java programs</u><br/>
In Java, every source file usually contains exactly one class. The file must have the same
name as the class; a class named TurtleMaze would be stored in the source file
TurtleMaze.java. <br/>
<u>This source file can then be compiled using the javac compiler:</u><br/>
<i>% javac TurtleMaze.java</i><br/>
The output of the compiler is a file with the same name as the source file, but with the
extension .class instead of .java (i.e., TurtleMaze.class in the above example). That
class file contains the byte code mentioned earlier, so it cannot be executed right away.<br/>
Instead it is executed using the JVM (byte code interpreter) as follows:<br/>
<i>% java TurtleMaze</i>
<pre>This command loads the TurtleMaze class and executes its main method (that is, starts
the program). If the TurtleMaze class in turn uses other classes, these are loaded automatically
when needed.
Since every class should be in its own file, several files can need to be recompiled at the
same time. The javac compiler has a special option -depend to compile all files that
depend on a particular file. The command
<i>% javac -depend TurtleMaze.java</i>
will compile not only TurtleMaze.java, but also all changed files it depends upon.
</pre>
<H3><u>Overview of the Java platform</u></H3>

<p>Java is both a programming language and a platform for running compiled Java code. This platform consists mainly of the JVM, but also includes an execution environment that supports the JVM's execution on the underlying (native) platform. The JVM includes several components for loading, verifying, and executing Java code. Figure 1 shows how a Java program executes on this platform.<br/>
<br/>
<img src="http://core0.staticworld.net/images/article/2015/05/java101ng-learn-java-fig1-100585027-large.idge.jpg" style="width:50%;height:relative;">
</p>
<p>
A Java program consists of at least the main class file, which is the first class file to be loaded, verified, and executed.<br/>

The JVM delegates class loading to its classloader component. Classloaders load class files from various sources, such as file systems, networks, and archive files. They insulate the JVM from the intricacies of class loading.<br/>

A loaded class file is stored in memory and represented as an object created from the Class class. Once loaded, the bytecode verifier verifies the various bytecode instructions to ensure that they are valid and won't compromise security.<br/>

If the class file's bytecodes are not valid, the JVM terminates. Otherwise, its interpreter component interprets the bytecode one instruction at a time. Interpretation identifies bytecode instructions and executes equivalent native instructions.<br/>
</p>
<p>
<table border='1%'color='red'>
<tr>
<td style="font-weight:bold;text-align:center;color:green">The standard class library</td>
</tr>
<tr>
<td style="text-align:center;color:violet">Java includes a large runtime library of class files, which store compiled classes and other types. I refer to this as the standard class library. You'll encounter standard class library types (such as Class) throughout the Java 
</td>
</tr>
</table>
</p>
<p>
<u>Developing Java applications</u><br/>

In this series, I'll present most examples in the form of applications. An application is minimally implemented as a single class that declares a main() method, as follows:
<pre>
class X
{
   public static void main(String[] args)
   {
   }
}</pre>
<p>Think of a class as a placeholder for declaring methods and data item storage locations. The class declaration begins with the reserved word class, which is followed by a mandatory name, which is represented by X, a placeholder for an actual name (e.g., Account). The name is followed by a body of methods and data item storage locations; the body is delimited by open brace ({) and close brace (}) characters.

<br/>Think of a method as a named block of code that processes inputs and returns an output. main() receives an array of String objects describing its inputs; the array is named args. Each object identifies a string, a double-quoted sequence of characters that (in this case) denotes a command-line argument, such as a file's name passed to the application as one of its arguments. main() doesn't return an output, and so it is assigned the void reserved word as its return type.

<br/><u>Class and file name are always same and starts with a capital word.</u><br/>
<p>There is nothing special about my choice of args. You could name this array Args, arguments, or even something_else. However, args is conventionally used.
Additionally, main()'s header is assigned public and static so that it can be called by the java application launcher. Following this method header is a body of code; as with a class body, the method body is delimited by brace characters.
<br/>
<br/><p>This is all you need to know about classes and methods (especially main()) in order to code your first Java application. You'll learn more about these language features (along with strings, arrays, return types, and more) in new/nexte articles.
<br/>
<br/><p>It's traditional to introduce a computer language by presenting a program that outputs the famous hello, world message. Listing 1 accomplishes this task:
<pre>
Listing 1. HelloWorld.java (version 1)

class HelloWorld
{
   public static void main(String[] args)
   {
      System.out.println("hello, world");
   }
}</pre>
<p>The application's class is named HelloWorld. Its main() method executes System.out.println("hello, world"); to send the contents of the "hello, world" string to the standard output stream, which is typically the command line.

<br/>Store Listing 1 in a file named HelloWorld.java. Then, at the command line, execute the following command to compile this source file:

<pre>javac HelloWorld.java</pre>
<p>Note that javac requires the .java file extension; otherwise, it generates an error message. If the source code compiles without an error, you should observe HelloWorld.class in the current directory.

<br/>HelloWorld.class contains the executable equivalent of HelloWorld.java. To run this class file via the java application launcher tool, execute the following command:

<pre>java HelloWorld</pre>
<p>Note that java doesn't permit you to include the .class file extension; if you do so it will generate an error message.<br/>

Assuming you've written your program correctly, you should observe the following output:<br/>

<pre>hello, world</pre>
<p>If you see this output, congratulate yourself. You've just compiled and run your first Java application! There will be many more examples throughout the rest of this series.

<br/>Personalizing hello

<br/>We can improve on Listing 1 by personalizing the application. For example, you might want to output hello, Java instead of hello, world. Listing 2 shows this enhancement of the original program:

<pre>Listing 2. HelloWorld.java (version 2)

class HelloWorld
{
   public static void main(String[] args)
   {
      System.out.println("hello, " + args[0]);
   }
}</pre>
<p>Listing 2 shortens "hello, world" to "hello, " and appends + args[0] to join the args array's first string to the message. The result is then output.

<br/>"hello, " + args[0] is an expression that appends the string in the first element of the args array to hello, . (You'll learn more about expressions and this string concatenation later in the Java 101 series.)

<br/>Compile Listing 2 (javac HelloWorld.java) and run the application with a single command-line argument, as follows:
<pre>
java HelloWorld Java
</pre>
<p>You should observe the following output:

<pre>
hello, Java
</pre>
<p>Suppose you execute HelloWorld without any command-line arguments, as in java HelloWorld. This time, you will see something different:
<pre>
Exception in thread "main" java.lang.ArrayIndexOutOfBoundsException: 0
	at HelloWorld.main(HelloWorld.java:5)
</pre>
<p>This error message refers to an exceptional condition that has arisen. Specifically, because there are no command-line arguments, args[0] doesn't contain anything. The attempt to access args[0]'s non-existent string is illegal.

<br/>As you develop Java applications, you'll run into many more exceptional messages like this one. Rather than be intimidated, think of these messages as tips for correcting problems.

<br/>
<br/><u>In conclusion</u>

<p>We've covered a lot of ground in this article. You've learned that Java is a language and a platform. You're aware of the various Java editions. You know how the JVM executes Java class files. You've discovered the difference between the JRE and the JDK, and how to set up the JDK on your system. You've gained insight into the architecture of a Java application and learned how to compile source code and execute class files via the javac and java tools, respectively.

<br/>We'll build on this foundation in the next article in this series, where I will begin introducing fundamental Java language features. Mastering these features will enable you to create applications that are similar in architecture to programs from the structured programming era. It will also give you the foundation to dive into Java's support for classes, objects, and related features.<br/>


<br/><a href="https://www.learnjavaonline.org/"><H1>Goto www.learnjavaonline.com for more & online compiler</H1></a><center><H3> &nbsp &copyJava101 </H3></center>
</p>
<div id="footer" style="position:relative;bottom:0px">										<!--footer-->
<button id="id4">CONTACT</button><br/><br/>
<span style="font-size:0.7em">Dated 9/12/16.</span>
</div>
</BODY>
</HTML>
