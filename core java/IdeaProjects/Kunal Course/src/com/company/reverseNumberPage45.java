package com.company;

import java.util.Scanner;

public class reverseNumberPage45 {
    public static void main(String[] args) {
        Scanner sc= new Scanner(System.in);
        System.out.println("Enter the 1st number");
        int fn= sc.nextInt();
        int ans=0;
        while (fn>0){
            int rem=fn%10;
            ans=ans*10+rem;
            fn /=10;
        }
        System.out.println(ans);
    }
}
