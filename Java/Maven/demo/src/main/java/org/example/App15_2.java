package org.example;

import java.util.concurrent.TimeUnit;

/*
 * 2.	試修改習題1，以實作Runnable介面的方式建立hi與bye兩個執行緒。
 * hi執行緒每隔1秒便分別印出 "Hello 1" ~ "Hello 5"的字串
 * ，bye執行緒每隔2.5秒便分別印出 "Good bye 1" ~ "Good bye 5" 字串。
 */
class CTest02 implements Runnable {
    protected String id;

    CTest02(String str) {
        id = str;

    }

    public void run() {
        try {
            psl();
        } catch (InterruptedException e) {
            e.printStackTrace(); // 或者進行其他適當的處理
        }

    }

    void psl() throws InterruptedException {

        for (int i = 1; i <= 5; i++) {
            TimeUnit.SECONDS.sleep(2);
            System.out.println(id + " " + i);
        }
    }
}

public class App15_2 {
    public static void main(String[] args) {

        CTest02 hi = new CTest02("hello");
        CTest02 bye = new CTest02("Good");
        Thread t1 = new Thread(hi);
        Thread t2 = new Thread(bye);

        t1.start();
        t2.start();

    }
}
