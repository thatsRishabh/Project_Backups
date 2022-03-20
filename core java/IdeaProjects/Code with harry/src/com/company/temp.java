package com.company;
import java.util.*;

public class temp {
    public static void main(String[] args){

            Scanner in = new Scanner (System.in);
            char ch = in.next().trim().charAt(0);
            if (ch >='a' && ch <= 'z'){
                System.out.println("Lowercase");
            }
            else {
                System.out.println("Uppercase");
            }
        }
    }

