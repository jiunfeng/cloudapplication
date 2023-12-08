/*
Ch8_2.已知梯形面積為
(upper+base)*height/2
試在程式碼裡完成下列各敘述：
(a)	試建立一個名為CTrapezoid的類別，其資料成員及型態如下：
int upper;
int base;
int height;
(b)	試在CTrapezoid類別裡定義成員函數area()，用來計算並傳回梯形面積。

 * (c)	試在main() method裡建立一個CTrapezoid類別型態的物件obj。
 *(d)	將obj物件的upper設值為4，base設值為9，height設值為5。
 *(e)	試在CTrapezoid類別裡定義成員函數show()，印出各個資料成員之值。
 *(f)	在main() method裡呼叫show()及area () method。

 */
package org.example;

public class App8_2 {
    public static void main(String[] args) {
        CTrapezoid obj = new CTrapezoid();
        obj.upper = 4;
        obj.base = 9;
        obj.height = 5;
        System.out.println(obj.area());
    }

}

class CTrapezoid {
    int upper;
    int base;
    int height;

    float area() {

        return (upper + base) * height / 2;
    }
}