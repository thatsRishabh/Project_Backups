package com.company.oops;

public class oopsClass2 {
    public static void main(String[] args) {
//        abc();
//above function will not work because we have not mentioned static in its method

        oopsClass2 obj=new oopsClass2();
        obj.xyz();

    }
        static void aabb(){
            System.out.println("This is static method");
    }
        void xyz() {
        aabb();
        System.out.println("This non static method has been created via object");
    }
        void abc() {
        System.out.println("Hello this is non static method");
    }
}
