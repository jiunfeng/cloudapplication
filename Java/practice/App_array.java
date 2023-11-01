package practice;

import java.util.Arrays;
import java.util.Scanner;

class App_array {

    public static void main(String args[]) {
        /*
         * 1 way array
         * int[] score;
         * score = new int[40];
         * for (int i = 0; i < 40; i++) {
         * score[i] = (int) (Math.random() * 100) + 1;
         * System.out.printf("score[%d]=%d%n", i, score[i]);
         * }
         */
        // 2way array50
        // int[][] score = new int[10][10];

        // create array
        Scanner sc01 = new Scanner(System.in);
        System.out.println("Enter array length do you want.");
        int length = sc01.nextInt();
        int[] score = new int[length];
        System.out.printf("The array length is 10%d%n", score.length);

        // random score@array
        for (int i = 0; i < score.length; i++) {
            score[i] = (int) (Math.random() * 100) + 1;
            System.out.printf("The score[%d]=%d%n", i, score[i]);
        }
        System.out.println(Arrays.toString(score));// print all array element
        int[] scoreClone = score.clone();// clone array
        score[0] = 987;
        System.out.println(Arrays.toString(score));
        System.out.println(Arrays.toString(scoreClone));// different array@memory
        Arrays.fill(scoreClone, 123);// fill array
        System.out.println(Arrays.toString(scoreClone));
        System.out.println(Arrays.binarySearch(scoreClone, 123));
        System.out.println(Arrays.equals(scoreClone, score));

        sc01.close();
    }
}