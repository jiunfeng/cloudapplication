package org.example;

/*
 * 4.接續習題3，試將習題3所撰寫的test() method改寫在一個獨立的Ctest類別內，
 * 使得ArithemeticException例外是由Ctest類別內的test() method所拋出（請參考app13_7的寫法）。
 */

/**
 * Ctest
 */
class Ctest {

    public static void test() throws ArithmeticException {
        double ans;
        int num = 12;
        for (int i = 0; i <= 5; i++) {

            ans = num / i;
            System.out.println(num + "/" + i + "=" + num / i);
        }
    }
}

public class App13_4 {
    public static void main(String[] args) {
        try {

            Ctest.test();
        } catch (ArithmeticException e) {
            System.out.println(e + " throws");
        }
    }
}
