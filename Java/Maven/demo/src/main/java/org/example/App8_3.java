/* Ch8_3試設計一個CCalculator類別，資料成員包括a、b及c，型態為int。請建立該類別的物件obj，並完成下列的各method的程式設計：
(a)	定義set_value(int x, int y, int z) method，用來設定資料成員之值。
(b)	定義show() method，可用來列印所有資料成員。
(c)	定義add() method，可用來傳回三數之和。
(d)	定義sub() method，可用來傳回a-b-c之值。
(e)	定義mul() method，可用來傳回三數之乘積。
(f)	定義avg() method，可用來傳回三數之平均值，傳回值型態請設為double。
 */

package org.example;

public class App8_3 {
    public static void main(String[] args) {
        CCalculator calculator = new CCalculator();
        calculator.a = 10;
        calculator.b = 15;
        calculator.c = 20;

        calculator.show();
        System.err.printf("%d+%d+%d=%f%n", calculator.a, calculator.b, calculator.c, calculator.add());
        System.err.printf("%d-%d-%d=%f%n", calculator.a, calculator.b, calculator.c, calculator.sub());
        System.err.printf("%d*%d*%d=%f%n", calculator.a, calculator.b, calculator.c, calculator.mul());
        System.err.printf("(%d+%d+%d)/3=%f%n", calculator.a, calculator.b, calculator.c, calculator.avg());

    }
}

/**
 * CCalculator
 */
class CCalculator {

    int a, b, c;

    void set_value(int x, int y, int z) {
        a = x;
        b = y;
        c = z;
    }

    void show() {
        System.out.printf("All field:%na=%d%nb=%d%nc=%d%n", a, b, c);
    }

    double add() {
        return a + b + c;
    }

    double sub() {
        return a - b - c;
    }

    double mul() {
        return a * b * c;
    }

    double avg() {
        double num = add() / 3;
        return num;
    }
}