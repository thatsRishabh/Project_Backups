package com.company;
import java.util.*;

public class callingOfMethod {
    public static int logic(int x, int y)
    {

        int z;
        if (x > y) {
            z = x - y;
        } else {
            z = x + y;
        }
        return z;
    }
    public static void main(String[] args) {
        Scanner sc =new Scanner(System.in);
        System.out.println("Enter fist number");
        int a= sc.nextInt();
        System.out.println("Enter the Second number");
        int b= sc.nextInt();
//        int c;
//        c =logic(a,b);
        System.out.println(logic(a,b));
    }
}


