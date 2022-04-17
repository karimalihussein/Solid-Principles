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
Liskov Substitution Principle

Liskov Substitution Principle states:

Let q(x) be a property provable about objects of x of type T. Then q(y) should be provable for objects y of type S where S is a subtype of T.

This means that every subclass or derived class should be substitutable for their base or parent class.

Building off the example AreaCalculator class, consider a new VolumeCalculator class that extends the AreaCalculator class:

for example:

Function F(User $user){

}

Class User{

}
Class Man extends User{

}

Class Woman extends User{

}
f = function f
f(x = man)
f(y = women)
S is SubType of User

Preconditions: cannot be strengthened in the subtype = like valdtion on requests .
Postconditions: cannot be weakened in the subtype = operations on output before extract the results.
Invariants: must be preserved in the subtype = A set of conditions must be running during call



























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