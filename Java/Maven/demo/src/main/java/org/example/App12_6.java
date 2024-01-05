package org.example;

// 6.	(Java常用類別庫)試撰寫一程式，將浮點數123.45轉換成字串，並印出該字串的長度。
public class App12_6 {
    public static void main(String[] args) {
        float num = 123.45f;
        String str;
        double num1 = 123.45;
        String str1;
        str = Float.toString(num);
        str1 = Double.toString(num1);
        System.out.println(num);
        System.out.printf("%f轉換為字串%s長度為%s%n", num, str, str.length());
        System.out.printf("%f轉換為字串%s長度為%s%n", num1, str1, str1.length());
    }
}
