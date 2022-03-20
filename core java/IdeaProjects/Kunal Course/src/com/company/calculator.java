import java.util.*;

public class calculator {
    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        System.out.println("Please enter the first number");
        int a= sc.nextInt();
        System.out.println("Please enter the Second number");
        int b= sc.nextInt();
        System.out.println("Enter the operation you want to perform: +,-,*,/, %");
        char c=sc.next().charAt(0);

        switch (c){
            case '+' -> System.out.println("The sum is " + (a + b));
            case '-' -> System.out.println("The subtraction is " + (a - b));
            case '*' -> System.out.println("The multiplication is " + (a * b));
            case '/' -> System.out.println("The division is " + (a / b));
//            case '+':
//                System.out.println("The sum is " +(a+b));
//                break;
        }
    }
}
