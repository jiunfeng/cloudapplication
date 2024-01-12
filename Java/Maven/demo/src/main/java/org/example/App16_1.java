package org.example;

import java.util.*;

/*
 1.	請依下面的題意依序完成程式的需求。
(a)	試著將整數52、14、6、28、105以HashSet的泛型型態儲存。
(b)	將集合中所有的元素印出。
(c)	刪除值為14的元素。
(d)	尋找集合物件中是否有值為92的元素。
(e)	傳回集合物件中目前的元素個數。
(f)	利用removeAll() method刪除集合物件中所有的元素。

 */
public class App16_1 {
    public static void main(String[] args) {
        HashSet<String> hSet = new HashSet<String>();
        hSet.addAll(Arrays.asList("52", "14", "6", "28", "105"));
        System.out.println("hset:" + hSet);
        hSet.remove("14");
        System.out.println("hset remove '14':" + hSet);

        if (hSet.contains("92")) {
            System.out.println("hset has '92'");
        }
        System.out.println("hset elements are " + hSet.size());
        hSet.clear();
        System.out.println("hset elements are " + hSet.size());
    }
}
