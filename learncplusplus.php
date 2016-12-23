<HTML>
<HEAD>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A New Website.">
<meta name="author" content="Ravi Saxena">

<TITLE>C++:Begineers</TITLE>

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
<H1 class="class1"><center>Learn C++ basics here.</center></H1>

<z class="t" align="center">
<center>
<z class="blink_text"><u>Hi I am C++ (See + Plus ;p)</u></z>
</center>
</z>
<br/>
<H3><u>INTRO</u><center><img src="http://suraj.lums.edu.pk/~cs463s06/images/methodology.gif" style="width:10%;height:relative"></center></H3>
<p>
C++, as we all know is an extension to C language and was developed by Bjarne stroustrup at bell labs. C++ is an intermediate level language, as it comprises a confirmation of both high level and low level language features. C++ is a statically typed, free form, multiparadigm, compiled general-purpose language.

C++ is an Object Oriented Programming language but is not purely Object Oriented. Its features like Friend and Virtual, violate some of the very important OOPS features, rendering this language unworthy of being called completely Object Oriented. Its a middle level language.
</p>
<p>
<u>What we will cover in Basics of C++ : </u><br/>
1.Overview and OOPS concept<br/>
2.Basic Syntax and Structure of programming<br/>
3.Data Types and Modifiers<br/>
4.Variables and Operators in C++<br/>
5.Decision Making<br/>
6.Types of Loops<br/>
7.Types of Storage Classes<br/>
8.Introduction to Functions<br/>
</p>
<p>
<u>C++ and Object Oriented Programming</u><br/>
Object Oriented programming is a programming style that is associated with the concept of Class, Objects and various other concepts revovling around these two, like Inheritance, Polymorphism, Abstraction, Encapsulation etc.

<br/><u>Basic OOPS concepts in c++</u><br/>

Let us try to understand a little about all these, through a simple example. Human Beings are living forms, broadly categorized into two types, Male and Female. Right? Its true. Every Human being(Male or Female) has two legs, two hands, two eyes, one nose, one heart etc. There are body parts that are common for Male and Female, but then there are some specific body parts, present in a Male which are not present in a Female, and some body parts present in Female but not in Males.

All Human Beings walk, eat, see, talk, hear etc. Now again, both Male and Female, performs some common functions, but there are some specifics to both, which is not valid for the other. For example : A Female can give birth, while a Male cannot, so this is only for the Female.

Human Anatomy is interesting, isn't it? But let's see how all this is related to C++ and OOPS. Here we will try to explain all the OOPS concepts through this example and later we will have the technical definitons for all this.

<br/><u>Class</u><br/>

Here we can take Human Being as a class. A class is a blueprint for any functional entity which defines its properties and its functions. Like Human Being, having body parts, and performing various actions.

<br/><u>Inheritance</u><br/>

Considering HumanBeing a class, which has properties like hands, legs, eyes etc, and functions like walk, talk, eat, see etc. Male and Female are also classes, but most of the properties and functions are included in HumanBeing, hence they can inherit everything from class HumanBeing using the concept of Inheritance.

<br/><u>Objects</u><br/>

My name is Abhishek, and I am an instance/object of class Male. When we say, Human Being, Male or Female, we just mean a kind, you, your friend, me we are the forms of these classes. We have a physical existence while a class is just a logical definition. We are the objects.

<br/><u>Abstraction</u><br/>

Abstraction means, showcasing only the required things to the outside workd while hiding the details. Continuing our example, Human Being's can talk, walk, hear, eat, but the details are hidden from the outside world. We can take our skin as the Abstraction factor in our case, hiding the inside mechanism.

<br/><u>Encapsulation</u><br/>

This concept is a little tricky to explain with our example. Our Legs are binded to help us walk. Our hands, help us hold things. This binding of the properties to functions is called Encapsulation.

<br/><u>Polymorphism</u><br/>

Polymorphism is a concept, which allows us to redefine the way something works, by either changing how it is done or by changing the parts using which it is done. Both the ways have different terms for them.

If we walk using our hands, and not legs, here we will change the parts used to perform something. Hence this is called Overloading.

And if there is a defined way of walking, but I wish to walk differently, but using my legs, like everyone else. Then I can walk like I want, this will be calles as Overriding.

<br/><u>OOPS Concept Definitions</u><br/>
Now, let us discuss some of the main features of Object Oriented Programming which you will be using in C++(technically).<br/>

1.Objects<br/>
2.Classes<br/>
3.Abstraction<br/>
4.Encapsulation<br/>
5.Inheritance<br/>
6.Overloading<br/>
7.Exception Handling<br/>
8.Objects<br/>

Objects are the basic unit of OOP. They are instances of class, which have data members and uses various member functions to perform tasks.

<br/><u>Class</u><br/>

It is similar to structures in C language. Class can also be defined as user defined data type but it also contains functions in it. So, class is basically a blueprint for object. It declare & defines what data variables the object will have and what operations can be performed on the class's object.

<br/><u>Abstraction</u><br/>

Abstraction refers to showing only the essential features of the application and hiding the details. In C++, classes provide methods to the outside world to access & use the data variables, but the variables are hidden from direct access. This can be done access specifiers.

<br/><u>Encapsulation</u><br/>

It can also be said data binding. Encapsulation is all about binding the data variables and functions together in class.

<br/><u>Inheritance</u><br/>

Inheritance is a way to reuse once written code again and again. The class which is inherited is called base calls & the class which inherits is called derived class. So when, a derived class inherits a base class, the derived class can use all the functions which are defined in base class, hence making code reusable.

<br/><u>Polymorphism</u><br/>

It is a feature, which lets us create functions with same name but different arguments, which will perform differently. That is function with same name, functioning in different way. Or, it also allows us to redefine a function to provide its new definition. You will learn how to do this in details soon in coming lessons.

<br/><u>Exception Handling</u><br/>

Exception handling is a feature of OOP, to handle unresolved exceptions or errors produced at runtime.<br/>
</p>
<p>
<u>Syntax and Structure of C++ program</u><br/>
Here we will discuss one simple and basic C++ program to print "Hello this is C++" and its structure in parts with details and uses.<br/>


<u>First C++ program</u>
<pre>
#include &lt;iostream.h&gt;
using namespace std;
int main()
{
cout << "Hello this is C++";
}
</pre>
<p>
<u>Header files are included at the beginning just like in C program.</u> Here iostream is a header file which provides us with input & output streams. Header files contained predeclared function libraries, which can be used by users for their ease.<br/>

Using namespace std, tells the compiler to use standard namespace. Namespace collects identifiers used for class, object and variables. NameSpace can be used by two ways in a program, either by the use of using statement at the beginning, like we did in above mentioned program or by using name of namespace as prefix before the identifier with scope resolution (::) operator.

<br/>Example : std::cout << "A";<br/>

main(), is the function which holds the executing part of program its return type is int.<br/>

cout <<, is used to print anything on screen, same as printf in C language. cin and cout are same as scanf and printf, only difference is that you do not need to mention format specifiers like, %d for int etc, in cout & cin.

<br/><u>Comments</u><br/>

For single line comments, use // before mentioning comment, like<br/>

<pre>cout<<"single line";   // This is single line comment
For multiple line comment, enclose the comment between /* and */
/*this is 
  a multiple line 
  comment */
</pre>
<p><u>Using Classes</u><br/>

Classes name must start with capital letter, and they contain data variables and member functions. This is a mere introduction to classes, we will discuss classes in detail throughout the C++ tutorial.

<br/>
<pre>class Abc
{
 int i;           //data variable
 void display()         //Member Function
  { 
   cout<<"Inside Member Function";
  }
}; // Class ends here

int main()
{
 Abc obj;  // Creatig Abc class's object
 obj.display();  //Calling member function using class object
}
</pre>
<p>This is how class is defined, its object is created and the member functions are used.<br/>

Variables can be declared anywhere in the entire program, but must be declared, before they are used. Hence, we don't need to declare variable at the start of the program.<br/>

</p>
<p>
<u>Data Types in C++</u>
<br/>They are used to define type of variables and contents used. Data types define the way you use storage in the programs you write. Data types can be built in or abstract.

<br/><u>Built in Data Types</u><br/>

These are the data types which are predefined and are wired directly into the compiler. eg: int, char etc.<br/>

User defined or Abstract data types<br/>

These are the type, that user creates as a class. In C++ these are classes where as in C it was implemented by structures.

<pre>Basic Built in types
char	for character storage ( 1 byte )
int	for integral number ( 2 bytes )
float	single precision floating point ( 4 bytes )
double	double precision floating point numbers ( 8 bytes )
Example :

char a = 'A';          // character type
int a = 1;             // integer type
float a = 3.14159;     // floating point type 
double a = 6e-4;       // double type (e is for exponential)
Other Built in types

bool	Boolean ( True or False )
void	Without any Value
wchar_t	Wide Character
</pre>

<p><u>Enum as Data type</u>
<br/>Enumerated type declares a new type-name and a sequence of value containing identifiers which has values starting from 0 and incrementing by 1 every time.

<pre>For Example :

enum day(mon, tues, wed, thurs, fri) d;</pre>
<p>Here an enumeration of days is defined with variable d. mon will hold value 0, tue will have 1 and so on. We can also explicitly assign values, like, enum day(mon, tue=7, wed);. Here, mon will be 0, tue is assigned 7, so wed will have value 8.

<p><u>Modifiers</u><br/>
Specifiers modify the meanings of the predefined built-in data types and expand them to a much larger set. There are four data type modifiers in C++, they are :

<pre>long
short
signed
unsigned</pre>
<p><u>Below mentioned are some important points you must know about the modifiers,</u><br/>

<p>1.long and short modify the maximum and minimum values that a data type will hold.<br/>
2.A plain int must have a minimum size of short.<br/>
3.Size hierarchy : short int &lt; int &gt; long int<br/>
4.Size hierarchy for floating point numbers is : float &lt; double &gt; long double<br/>
5.long float is not a legal type and there are no short floating point numbers.<br/>
6.Signed types includes both positive and negative numbers and is the default type.<br/>
7.Unsigned, numbers are always without any sign, that is always positive.<br/>
</p>

<H1><a href="http://www.studytonight.com/cpp/datatypes-and-modifiers-in-cpp.php">For more goto wwww.studytonight.com here</a> &nbsp &copyStudyTonight</H1>

<div id="footer" style="position:relative;bottom:0px">										<!--footer-->
<button id="id4">CONTACT</button><br/><br/>
<span style="font-size:0.7em">Dated 9/12/16.</span>
</div>
</BODY>
</HTML>
