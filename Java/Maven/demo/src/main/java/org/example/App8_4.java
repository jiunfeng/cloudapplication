/* 
 * ch8_4設有一CCalculator類別，此類別內含三個成員函數，可以用來計算不同形狀的面積。試在程式碼裡完成下列各敘述：
(a)	試加入double area(int base, int height) method，使得它可以計算三角形的面積。
(b)	請多載double area(double radius) method，使得它可以計算圓形的面積。
(c)	請多載double area(int upper,int base,int height) method，可以用來計算梯形的面積。

 */
package org.example;

public class App8_4 {
    public static void main(String[] args) {
        CCalculator84 calculator = new CCalculator84();
        System.out.printf("三角形面積=%f%n", calculator.area(10, 17));
        System.out.printf("圓形面積=%f%n", calculator.area(5));
        System.out.printf("梯形面積=%f%n", calculator.area(5, 17, 20));
    }
}

/**
 * CCalculator
 */
class CCalculator84 {
    private final double PI = 3.14159265358979323846;

    double area(int base, int height) {
        return base * height / 2;
    }

    double area(double radius) {
        return radius * radius * PI;
    }

    double area(int upper, int base, int height) {
        return (upper + base) * height / 2;
    }
}
