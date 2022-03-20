package com.company.oops.class3Polymorphism;

public class main {
    public static void main(String[] args) {
        //here all classes have been extended to shapes
        shapes obj1 = new shapes();
        square obj2 = new square(); //we did not mention the values 3,4 here as "=new square(3,4)" because we are calling a method not, constructor
        System.out.println(obj2.area(3,4));
        obj2.area();  //this will execute empty method
        shapes obj3 = new square();
        circle obj4 = new circle();
//        square obj5 = new shapes(); //error because child class cannot be reference variable
        obj1.area();
        obj3.area(); //this will perform square method

    }
}
