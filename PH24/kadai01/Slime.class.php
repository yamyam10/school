<?php // メソッド =>  インスタンス内に保存される関数 // プロパティ => インスタンス内に保存される変数 
class Slime {
    private int $pos = 0;       // 位置
    private string $footprint;  // スライムの足跡
    private string $mark;       // スライムのマーク
    function __construct($feature_foot, $feature_mark){
        $this->footprint = $feature_foot;   // $feature_foot を $footprint に入れる。
        $this->mark = $feature_mark;        // $feature_mark を $mark に入れる。
    }
    public function get_position(){     // 現在位置を取得
        return $this->pos;
    }
    public function get_mark(){         // スライムのマーク
        return $this->mark;
    }
    public function move_position(){    // スライムを走らせる
        $position = "";
        $this->pos += rand(-1, 3);      // 「-1~3」の範囲の乱数
        if ($this->pos > 0) {
            $position .= str_repeat($this->footprint, $this->pos);
        }
        echo $position.$this->mark.PHP_EOL;
    }
}