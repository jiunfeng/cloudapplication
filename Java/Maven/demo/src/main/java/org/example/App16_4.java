package org.example;

import java.util.*;
/*
16.5 走訪集合物件的元素　
4.	請依下面的題意依序完成程式的需求。
(a)	請取出5個小於100的整數亂數，以TreeSet的泛型型態儲存。
(b)	完成 (a) 後，請利用iterator() method走訪 TreeSet，計算並印出所有元素的總和及平均值。

 */

class CTSet {
    TreeSet<Integer> tSet = new TreeSet<Integer>();

    void set(int r) {
        System.out.println(r);
        tSet.add(r);
        System.out.println(tSet);
    }
}

public class App16_4 {
    public static void main(String[] args) {
        CTSet cc = new CTSet();
        for (int i = 0; i < 5; i++) {
            cc.set((int) (Math.random() * 100));
        }
        Iterator<Integer> itr = cc.tSet.iterator();
        while (itr.hasNext()) {
            System.out.println(itr.next());

        }

    }
}
