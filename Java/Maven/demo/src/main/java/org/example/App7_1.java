package org.example;
// 1.	試撰寫void proverb() method，當呼叫proverb() 時，螢幕上會顯示出 "Two heads are better than one." 之字串。

// /* output-----------------------
// Two heads are better than one.
// ------------------------------*/

// 2.	試撰寫double fahrenheit(double c) method，傳入攝氏溫度，計算並傳回對應的華氏溫度。其轉換公式如下：
// 華氏溫度=(9/5)*攝氏溫度+32
// /* output------------
// 攝氏20.0度=華氏68.0度
// -------------------*/

public class App7_1 {
    public static void main(String[] args) {
        proverb();
        System.out.println(fahrenheit(32.5));

    }

    // 沒有回傳值所以要給void
    public static void proverb() {
        System.out.println("Two heads are better than one.");
    }

    // 有回傳值要指定回傳值的型別
    public static double fahrenheit(double c) {
        double temperatureF = c * 9 / 5 + 32;
        return temperatureF;
    }
}
