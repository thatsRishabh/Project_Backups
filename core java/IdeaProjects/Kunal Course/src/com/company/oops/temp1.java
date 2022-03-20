package com.company.oops;

public class temp1 {
   static int a;
    static int b;

    public temp1() {
        this.a = 1;
        this.b = 1;
    }

    public temp1(int a, int b) {
        this.a = a;
        this.b = b;
    }
}
class basic extends temp1{
    public static void main(String[] args) {
        temp1 abc = new temp1( 6,7);
        System.out.println(a+b);

    }
}