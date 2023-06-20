class sample{
    //↑クラス名称はファイル名と統一する。

    public static void main(String[] a) {
        System.out.print("hello java");
        System.out.print("hello java");

        //改行付き出力
        System.out.println();
        System.out.println("hello java");
        System.out.println("hello java");

        //変数宣言
        //[書式]
        //型 変数名;
        int i;

        i = 0;
        i++;

        System.out.println(i);

        //重複宣言はNG
        // int i;

        int j,k;
        int I = 100;

        System.out.println(I);

        //文字列は String 型！
        //文字列データは「"」でくくる。
        String name = "S水";

        System.out.println(name);

        //文字はchar型！
        //文字は「'」でくくる。
        char moji = 'a';

        System.out.println(moji);

        //配列
        //[書式]
        //型[] 配列名;
        int[] array = {10,20,30};
        System.out.println(array[1]);

        // System.out.println(a[0]);


        return;
    }
}

// function int a(){

// }