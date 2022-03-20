package com.company;

import java.util.Scanner;

public class countingOccurrencePg44 {
    public static void main(String[] args) {
        Scanner sc= new Scanner(System.in);
        System.out.println("Enter the 1st number");
        int fn= sc.nextInt();
        System.out.println("Enter the 2nd number");
        int sn= sc.nextInt();
        int ans=0;

        while (fn>0) {
            int num=fn%10;
            if(num==sn){
                    ans++;
                }
            fn=fn/10;
        }
        System.out.println(ans);
    }
}
