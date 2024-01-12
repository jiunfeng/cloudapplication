package org.example;
/*
 3.	小華去便利商店買了張面值200元的電話卡，他分別在3個不同的公共電話使用這張電話卡。請完成下列程式的需求：
(a)	請撰寫PrePaid類別，繼承自Thread類別，資料成員為sum，用來記錄電話卡的餘額。
(b)	請在run() method中，利用亂數產生0~99的整數fee，用來當成單次使用電話卡的通話費。當電話卡的餘額sum大於10元時，即呼叫talk(fee) method，傳入此次打電話的通話費，計算並顯示電話卡的餘額。
(c)	請在talk() method中加入sleep()，故意拖延時間，使程式發生同步問題。

 */

class Cal {
    static int sum = 200;

    public synchronized static void talk(int fee) {
        if ((sum - fee) >= 0) {
            sum -= fee;
            System.out.println("餘額為:" + sum);
        }

    }
}

/**
 * PrePaid()
 */

class PrePaid extends Thread {
    static int fee;

    public void run() {
        while (Cal.sum > 10) {
            fee = (int) (Math.random() * 100) + 1;
            Cal.talk(fee);

        }

    }

}

public class App15_3 {
    public static void main(String[] args) {
        PrePaid c1 = new PrePaid();
        PrePaid c2 = new PrePaid();
        PrePaid c3 = new PrePaid();
        c1.start();
        c2.start();
        c3.start();
        System.out.println("最後餘額為:" + Cal.sum);
    }
}
