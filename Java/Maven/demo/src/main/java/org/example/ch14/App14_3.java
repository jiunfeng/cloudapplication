package org.example.ch14;

import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

/*
3.	試依下列的步驟完成程式設計：
(a)	請設計一名為Data的類別，其資料成員如下：
class Data
{
   String name;
   int english;
   int math;
}
請建立一有引數的Data(String str, int e,int m) 建構元，用來將學生姓名name設值為str，英文成績english設值為e，數學成績math設值為m。
並於main() method中宣告2個Data類別的物件stu1及stu2，stu1的name為"Ariel"，english為92，math為85；stu2的name為"Fiona"，
english為67，math為89。
(b)	試在Data類別裡撰寫writeData() method，將物件stu1、stu2之資料成員依序寫入student.txt。
(c)	請設計show() method，可以印出Data類別的所有成員之值，以及英文及數學成績的平均分數。
(d)	請於main()請撰寫readData() method，用來讀取student.txt的資料後，利用show() method印出各項資料。

 */

class Data {
    String name;
    int english;
    int math;

    public Data(String str, int e, int m) {
        name = str;
        english = e;
        math = m;
    }

    public void writeData() throws IOException {
        FileWriter wf = new FileWriter(
                "C:\\Users\\marucs\\Documents\\cloudapplication\\Java\\Maven\\demo\\src\\main\\java\\org\\example\\ch14\\student.txt",
                true);
        wf.write(name);
        wf.write(Integer.toString(english));
        wf.write(Integer.toString(math));
        wf.write(System.lineSeparator());
        wf.flush();
        wf.close();
    }

    public void show() {
        System.out.printf("name:%s english:%d math:%d%n", name, english, math);
    }
}

public class App14_3 {
    public static void main(String[] args) throws IOException {
        Data stu1 = new Data("Ariel", 92, 85);
        Data stu2 = new Data("Fiona", 67, 89);
        stu1.writeData();
        stu1.show();
        stu2.writeData();
        stu2.show();
        readData();
    }

    public static void readData() throws IOException {
        FileReader fr = new FileReader(
                "C:\\Users\\marucs\\Documents\\cloudapplication\\Java\\Maven\\demo\\src\\main\\java\\org\\example\\ch14\\student.txt");
        char data[] = new char[200];
        int num = fr.read(data);
        String str = new String(data, 0, num);
        System.out.println(str);
        fr.close();
    }
}
