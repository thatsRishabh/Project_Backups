import java.util.Scanner;

public class leapYearChecker {
    public static void main(String[] args) {
        System.out.print("Enter a year:\t");
        Scanner sc = new Scanner(System.in);
        int year = sc.nextInt();

        if (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0)) {
            System.out.println("Given year is a leap year");
        } else {
            System.out.println("Given year is not leap year");
        }
    }
}