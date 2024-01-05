package org.example.ch14;

import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

/*
 * 2.	接續app14_2，先開啟文字檔proverb.txt，
 * 在原先檔案內容的後面再寫入字串 "Time is money!"，
 * 然後印出整個檔案內容（字串 "Time is money!"
 *  請撰寫在新的一行）。
 */
public class App14_2 {
    public static void main(String[] args) throws IOException {
        char data[] = new char[128];
        String str = "Time is money!";
        FileWriter frw = new FileWriter(
                "C:\\Users\\marucs\\Documents\\cloudapplication\\Java\\Maven\\demo\\src\\main\\java\\org\\example\\ch14\\proverb.txt",
                true);
        frw.write(str);
        frw.close();
        FileReader fr = new FileReader(
                "C:\\Users\\marucs\\Documents\\cloudapplication\\Java\\Maven\\demo\\src\\main\\java\\org\\example\\ch14\\proverb.txt");
        int num = fr.read(data);
        String strr = new String(data, 0, num);
        System.out.println(strr);
        fr.close();
    }
}
