package com.company.oops.callingOfMethod;

public class y {
    public static void main(String[] args) {
        x obj1= new x(9,1);
        System.out.println(obj1.a+ " " +obj1.b);
        obj1.sum1(3,4); //void return type

        x obj2 =new x(1,1);
        System.out.println(obj2.a+ " " +obj2.b);
        System.out.println("The numbers are added " +obj2.sum2(5,6)); //int return type
    }

}
