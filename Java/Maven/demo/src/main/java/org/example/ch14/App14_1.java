package org.example.ch14;

import java.io.FileReader;
import java.io.IOException;

public class App14_1 {
    public static void main(String[] args) throws IOException {
        char data[] = new char[128];

        FileReader fr = new FileReader(
                "C:\\Users\\marucs\\Documents\\cloudapplication\\Java\\Maven\\demo\\src\\main\\java\\org\\example\\ch14\\train.txt");
        int num = fr.read(data);
        String str = new String(data, 0, num);
        System.out.println("Characters read=" + num);
        System.out.println(str);
        System.out.println(data[0]);
        fr.close();
    }
}
