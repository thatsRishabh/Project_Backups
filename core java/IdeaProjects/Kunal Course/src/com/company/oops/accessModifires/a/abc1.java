package com.company.oops.accessModifires.a;

import com.company.oops.accessModifires.b.xyz;

public class abc1 {
    public static void main(String[] args) {
        xyz obj1=new xyz(1,2,3,4);
        System.out.println(obj1.a1);
//        System.out.println(obj1.a2); //cannot be accessed from outside package, make that variable public

        abc obj2=new abc(9,8,7);
        System.out.println(obj2.b1); //made protected & is accessible
//        System.out.println(obj2.b2);  //made private & not accessible in same package
        System.out.println(obj2.b3); // no modifier mentioned here
    }
}
