package org.example;

/*
13.2例外類別的繼承架構 
2. 試修改使用try-catch區塊來捕捉由錯誤而產生的例外，其中catch區塊應可同時捕捉 "除數為0" 與 "陣列索引值超出範圍" 這兩種錯誤所造成的例外。 
01   // hw13_2,
02   public class hw13_2
03   {
04      public static void main(String args[])
05      {  
06         int arr[]={4,12,87,21,6,18};   
07         int den[]={2,0,7,0,61,0};      
08         double sum=0.0;
09         
10         for(int i=0;i<=6;i++)             
11            sum+=(double)arr[i]/den[i];         
12         System.out.println("sum="+sum);               
13      }
14   }

 output----
除數為0
*/

public class App13_2 {
    public static void main(String args[]) {
        int arr[] = { 4, 12, 87, 21, 6, 18 };
        int den[] = { 2, 0, 7, 0, 61, 0, 9 };
        double sum = 0.0;

        for (int i = 0; i <= 6; i++) {
            try {
                // sum += (double) arr[i] / den[i];
                // 電腦數學除0.0會得到無限大的結果
                sum += arr[i] / den[i];
                System.out.println("sum=" + sum);

            } catch (ArithmeticException e) {
                System.out.println("有問題");
                System.out.println(e);
            } catch (ArrayIndexOutOfBoundsException e) {
                System.out.println("有問題");
                System.out.println(e);
            } catch (Exception e) {
                System.out.println("有問題");
                System.out.println(e);
            }
        }
    }
}
