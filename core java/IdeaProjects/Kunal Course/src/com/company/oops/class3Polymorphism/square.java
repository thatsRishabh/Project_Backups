package com.company.oops.class3Polymorphism;

public class square extends shapes{
    @Override
    void area(){  //here we did not write 'static void area' because we had created its object in main class
        System.out.println("This is square class");
    }
    int area (int a, int b){ //here we did not write 'static void area' because we had created its object in main class
        return a*b;
    }
}
