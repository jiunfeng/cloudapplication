package org.example;
/*
 1.	試加入try-catch-finally區塊，使得catch() 可以捕捉ArithmeticException例外。
01   // hw13_1, 例外訊息的擷取
02   public class hw13_1
03   {
04      public static void main(String args[])
05      {      
06         double ans;
07         int num=12;
08         
09         for(int i=0;i<=5;i++)
10         {
11            ans=num/i;
12            System.out.println(num+"/"+i+"="+num/i);
13         }         
14         System.out.println("end of main() method !!");
15      }
16   }  

除數為0
12/1=12
12/2=6
12/3=4
12/4=3
12/5=2
end of main() method !! 
*/

public class App13_1 {
    public static void main(String args[]) {
        double ans;
        int num = 12;

        for (int i = 0; i <= 5; i++) {
            try {
                ans = num / i;
                System.out.println(num + "/" + i + "=" + num / i);
            } catch (ArithmeticException e) {
                System.out.println("出事了!");
                System.out.println(e);
            }
        }

    }
}
