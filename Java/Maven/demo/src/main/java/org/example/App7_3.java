package org.example;

public class App7_3 {
    public static void main(String[] args) {
        System.out.println(Recursion(100));
    }

    public static double Recursion(double n) {
        if (n == 1) {
            return n;
        } else
            return n * Recursion(n - 1);
    }
}
