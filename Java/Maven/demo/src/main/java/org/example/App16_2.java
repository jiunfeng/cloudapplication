package org.example;

import java.util.*;

/*
 2.	請依下面的題意依序完成程式的需求。
(a)	請取出5個小於100的整數亂數，以TreeSet的泛型型態儲存。
(b)	將(a)的集合元素加入LinkedList集合。
(c)	將150、55、10加入LinkedList集合中，並印出LinkedList的所有元素。
(d)	將索引值5的元素置換成999。
(e)	印出LinkedList集合中的第一個及最後一個元素。
(f)	印出索引值2~5的子集合。

 */
public class App16_2 {
    public static void main(String[] args) {
        TreeSet<Integer> tset = new TreeSet<Integer>();
        for (int i = 0; i < 5; i++) {
            tset.add((int) (Math.random() * 100 + 1) + 1);
        }
        System.out.println(tset);

        LinkedList<Integer> Lset = new LinkedList<Integer>();
        Lset.addAll(tset);
        System.out.println(Lset);
        Lset.addAll(Arrays.asList(150, 55, 10));
        System.out.println(Lset);
        Lset.set(5, 999);
        System.out.println(Lset);
        System.out.println(Lset.getFirst());
        System.out.println(Lset.getLast());
        System.out.println(Lset.subList(2, 6));

    }

}
