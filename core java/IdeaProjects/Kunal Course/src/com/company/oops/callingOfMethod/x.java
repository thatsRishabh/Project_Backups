package com.company.oops.callingOfMethod;

public class x {
    int a;
    int b;

    public x(int a, int b) {
        this.a = a;
        this.b = b;
    }
    void sum1(int a, int b){
        System.out.println("The sum is " +(a+b));
    }
    int sum2(int a, int b){
        return a+b;
    }
}
