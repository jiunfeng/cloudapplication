package org.example;

import java.awt.*;
import java.awt.event.*;

import javax.swing.BoxLayout;

/*
1.	請設計三個僅供單選的核取方塊，
標籤分別為 "Sony"、"Olympus" 與 "Canon"，把它們放在視窗的中間，並讓 " Olympus" 核取方塊呈被選取狀。
 */
public class App17_3 {
    static Frame frm = new Frame("Options");

    public static void main(String[] args) {
        Checkbox ck01 = new Checkbox("Sony", true);
        Checkbox ck02 = new Checkbox("Olympus", true);
        Checkbox ck03 = new Checkbox("Canon");
        Checkbox ck04 = new Checkbox("4", true);
        Checkbox ck05 = new Checkbox("5", true);
        CheckboxGroup gtp = new CheckboxGroup();

        // 視窗屬性設定
        int frmSizeHeight = 600;
        int frmSizeWidth = 600;
        frm.setSize(frmSizeWidth, frmSizeHeight);
        Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
        int frmLocatintX = ((int) screenSize.getWidth() - frmSizeWidth) / 2;
        int frmLocatintY = ((int) screenSize.getHeight() - frmSizeHeight) / 2;
        frm.setLocation(frmLocatintX, frmLocatintY);
        frm.setLayout(new GridLayout(3, 2));
        // ck01.setSize(100, 50);
        frm.add(ck01);
        // ck02.setSize(100, 50);
        frm.add(ck02);
        // ck03.setSize(100, 50);
        frm.add(ck03);
        frm.add(ck04);
        frm.add(ck05);
        ck04.setCheckboxGroup(gtp);
        ck05.setCheckboxGroup(gtp);
        frm.setVisible(true);

        frm.addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                System.out.println(e);
                System.exit(0);

            }
        });
    }
}
