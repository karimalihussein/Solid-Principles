SOLID stands for:

- S = Single-responsiblity Principle
- O = Open-closed Principle
- L = Liskov Substitution Principle
- I = Interface Segregation Principle
- D = Dependency Inversion Principle

--------------------------------------------------------------
First Type Single-Responsibility Principle

A class should have one and only one reason to change, meaning that a class should have only one job.

--------------------------------------------------------------
Open-Closed Principle
Objects or entities should be open for extension but closed for modification.

This means that a class should be extendable without modifying the class itself.



--------------------------------------------------------------
                            -Notes-
1 - Encapsulate What Varies
2 - Strategy design patterns
3 - Program to an interface no to implementation (Concrate class)



Implements vs extends


Implements for interfaces
implements is for implementing an interface

The difference between an interface and a regular class is that in an interface you can not implement any of the declared methods. Only the class that "implements" the interface can implement the methods. 




extends for abstracts


class to class [Extends]
inrerface to class [Implements]
interface to interface [Extends]

Extends : This is used to get attributes of a parent class into child class and may contain already defined methods that can be overridden in the child class.

Implements : This is used to implement an interface (parent class with functions signatures only but not their definitions) by defining it in the child class.

There is one special condition: "What if I want a new Interface to be the child of an existing interface?". In the above condition, the child interface extends the parent interface.