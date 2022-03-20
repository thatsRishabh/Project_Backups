import java.util.*;

public class CbseBordsMarks {
        public static void main(String[] args) {
            Scanner sc = new Scanner(System.in);
            System.out.println("Please enter the maximum of each subject");
            int max=sc.nextInt();
            System.out.println("Enter your of subject 1: ");
            int sub1=sc.nextInt();
            System.out.println("Enter your of subject 2: ");
            int sub2=sc.nextInt();
            System.out.println("Enter your of subject 3: ");
            int sub3=sc.nextInt();
            System.out.println("Enter your of subject 4: ");
            int sub4=sc.nextInt();
            System.out.println("Enter your of subject 5: ");
            int sub5=sc.nextInt();

            // percentage calculation
            int sum= sub1+sub2+sub3+sub4+sub5;
            int per= (sum*100)/(5*max);
            System.out.println("Your percentage is: " +per+ "%");

    }
}
