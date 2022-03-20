package com.company;

import java.util.*;
public class Main {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("enter the number of natural numbers");
        int n = sc.nextInt();

        //print sum of n natural numbers
        // int sum = 0;
        //for (int i = 0; i <= n; i++)
        //{  sum= sum+ i;
        //}
        //System.out.println(sum);

        //for table of given number
        //for (int i=1; i<11; i++){
        //    System.out.println(n*i);

         // print all even n numbers
        for (int i=1; i<=n; i++){
            System.out.println(2*i);
         }
        }
}