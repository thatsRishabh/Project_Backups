import java.util.*;

public class otpAuthenticator {
    public static void main(String[] args) {

    boolean flag = true;
    Scanner Sc = new Scanner(System.in);
    int index;
        int pw= 5555;
    int i = 1;

 while(flag && i<5){
     System.out.println("Enter the OTP");
     index = Sc.nextInt();
     if (pw==index){
         System.out.println("successful");
         flag=false;
     }
     else {
         System.out.println("try again,this is your " +i+ "th attempt, your card will be blocked after 4 attempts");
         i++;}
    }
 if(i>=4) {
     System.out.println("Your 4 attempts is over, your account has been blocked please contact admin");
 }
 }
}

