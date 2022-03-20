package com.company.oops.class3Inheritance;

public class main {
    public static void main(String[] args) {
        rectangle obj1=new rectangle(4,3);
//        cube obj2=new cube(7,6,5);
//        rectangle obj3=new rectangle(obj2);
//        System.out.println(obj3.l);

//        below is example that parent class cannot be passed as object in child class
//        cube obj4=new cube(obj1);

//        cube obj4= new rectangle(3,4); //you cannot call child class as referance variable
//        System.out.println(" "+obj4.h);

        rectangle obj5= new cube(5,6,8); // you can initialize l,b,h but can access only l and b
        System.out.println(obj5.b);

        price obj6=new price(6,7,8,18);
        System.out.println(obj6.h+ " "+ obj6.cost);


    }
}
