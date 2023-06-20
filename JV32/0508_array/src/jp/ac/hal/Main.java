package jp.ac.hal;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Main {

	public static void main(String[] args) throws IOException {
		BufferedReader br
		 = new BufferedReader(new InputStreamReader(System.in));
		
//		int[] scores = new int[3];
//		
//		System.out.println(scores.length);
//		
//		for(int i = 0; i < scores.length; i++) {
//			scores[1] = 100;
//		}
//		
//		for(int i = 0; i < scores.length; i++) {
//			System.out.println(scores[1]);
//		}
		
		String[] names = {"aaa","bbb","ccc"};
		for(String name : names) {
			System.out.println(name);
		}
		
		String[] names2;
		names2 = names;
		for(String name : names2) {
			System.out.println(name);
		}
		
		names2[1] = "zzz";
		for(String name : names2) {
			System.out.println(name);
		}
		
		for(String name : names) {
			System.out.println(name);
		}
		
		int[][] test = new int [2][3];
		int[][] test2 = {{1,2,3},{4,5,6}};
		for (int[] t : test2) {
			for(int a: t) {
				System.out.println(a);;
			}
		}
		
		int[] scores = new int[5];
		int highestScore = Integer.MIN_VALUE;	// 最初は最低値で初期化する
		int lowScore = Integer.MAX_VALUE;	// 最初は最大値で初期化する
		int totalScore = 0;

		for(int j = 0; j < scores.length; j++) {
		    System.out.print((j + 1) + "人目の得点を入力してください：");
		    int score = Integer.parseInt(br.readLine());

		    if (score > highestScore) {
		        highestScore = score;
		    }
		    
		    if (score < lowScore) {
		        lowScore = score;
		    }
		    
		    totalScore += score;
		    
		    scores[j] = score;
		}

		for (int j = 0; j < scores.length; j++) {
		    System.out.println((j + 1) + "人目の得点：" + scores[j]);
		}
		System.out.println("最高得点：" + highestScore);
		System.out.println("最低得点：" + lowScore);
		System.out.println("平均得点：" + ((double)totalScore / scores.length));
	}
}
