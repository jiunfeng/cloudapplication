package org.example;

import java.util.*;

/*
3.	請依下面的題意依序完成程式的需求。
(a)	請取出5個小於100的整數亂數，以HashMap的泛型型態儲存，關鍵值為0~4。
(b)	請利用values() method，將(a) 中HashMap物件的對應值，轉換成TreeSet物件。
(c)	請利用keySet() method，將(a) 中HashMap物件的關鍵值，轉換成HashSet物件。
(d)	印出HashMap、TreeSet及HashSet的所有元素。

 */
public class App16_3 {
    public static void main(String[] args) {
        HashMap<Integer, Integer> hMap = new HashMap<Integer, Integer>();
        for (int i = 0; i < 5; i++) {
            hMap.put(i, (int) (Math.random() * 100 + 1));
        }
        System.out.println(hMap);
        TreeSet<Integer> tSet = new TreeSet<Integer>();
        tSet.addAll(hMap.values());
        System.out.println("TreeSet:" + tSet);

        HashSet<Integer> hSet = new HashSet<Integer>();
        hSet.addAll(hMap.values());
        System.out.println("HashSet:" + hSet);

    }

}
