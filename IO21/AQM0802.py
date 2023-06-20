# -*- coding: utf-8 -*-

#https://www.denshi.club/pc/raspi/i2caqmlcdarduinode1-aqm0802.html
#をベースに作成しました。（山口）

import smbus	#i2c通信用
import time

class AQM0802:
	#LCD AQM0802/1602 コマンド定義
	__command=0x00		#コマンド送信命令
	__data=0x40		#データ送信命令

	_clear=0x01		#画面消去命令
	_home=0x02		#ホームポジション移動命令
	_dispOn_cursorOn=0x0f	#ディスプレイ表示（カーソルも同時に表示）
	_dispOn_cursorOff=0x0c	#ディスプレイ表示（カーソル非表示）
	_display_Off=0x08	#ディスプレイ非表示（カーソルも同時に非表示）

	_line1st=0x80	#1行目先頭に記入
	_line2nd=0x40+0x80	#2行目先頭に記入
	
	
	#コンストラクタ
	def __init__(self, busno=1, i2caddr=0x3e):
		#I2Cバスの設定
		self.i2c = smbus.SMBus(busno)	#バス番号１を指定
		self.addr02=i2caddr		#LCDのI2Cアドレスを設定
	
	#コマンド送信命令
	def command(self, code ):
		self.i2c.write_byte_data(self.addr02, self.__command, code)
		time.sleep(0.1)
	
	#初期化コマンドの送信
	#引数で画面表示設定
	#  _dispOn_cursorOn	ディスプレイ表示（カーソルも同時に表示）…デフォルト
	#  _dispOn_cursorOff	ディスプレイ表示（カーソル非表示）
	#  _display_Off		ディスプレイ非表示（カーソルも同時に非表示）
	def initsig (self, disp = _dispOn_cursorOn):
		self.command(0x38)
		self.command(0x39)
		self.command(0x14)
		self.command(0x73)
		self.command(0x56)
		self.command(0x6c)
		self.command(0x38)
		self.command(self._clear)
		self.command(disp)
	
	#文字列表示命令
	def putsLCD(self, message ):
			mojilist=[]
			for moji in message:
					mojilist.append(ord(moji)) 
			self.i2c.write_i2c_block_data(self.addr02, self.__data, mojilist)
			time.sleep(0.1)

	#バイナリ表示命令
	def putbLCD(self, message ):
			mojilist=[]
			self.i2c.write_i2c_block_data(self.addr02, self.__data, message)
			time.sleep(0.1)
	
	#新しい文字を設定する
	#引数addrは文字ID（0～5)
	#引数dotlistは文字のビットリスト（bit0～bit4に5ドット分のドット列を書いた1バイト値を8行分配列に）
	def chardef(self, addr,dotlist):
		#文字IDが範囲外ならエラー
		if (addr < 0) or (6 < addr):
			return -1
		
		#_data命令と文字IDを合成して書き込み先アドレスを生成
		address = self.__data + (addr << 3)
		
		#ドット情報を生成する
		dots=[]
		for line in range(8):	#8行分繰り返し
			dots.append(dotlist[line] & 0x1f)	#不要な上位3ビットをゼロクリア
		
		#文字情報をLCDに送信する
		self.command(address)
		self.i2c.write_i2c_block_data(self.addr02,self. __data, dots)
		time.sleep(0.1)
		return 0
		
	#文字の描画位置を設定
	def setpos(self,line=_line1st,row=0):
		col = line
		
		if col == 0:
			col = self._line1st
		elif col == 1:
			col = self._line2nd
		elif (col != self._line1st) and (col != self._line2nd):
			return -1
			
		self.command(col+row)
		return 0


#動作確認用プログラム
#ここから下の内容は、このファイルを「単独で」動かしたときのみ
#実行される。（ライブラリとしてimportした時は無視される）
if __name__ == "__main__": 
	lcd = AQM0802()					#LCDクラスの生成
	lcd.initsig(lcd._dispOn_cursorOff)	#初期化信号の送信（カーソル無し）

	#独自文字の定義
	lcd.chardef(0,[0x10,0x18,0x1E,0x1F,0x1E,0x18,0x10,0x00])
	lcd.chardef(1,[0x01,0x03,0x0F,0x1F,0x0F,0x03,0x01,0x00])
	
	lcd.command(lcd._clear)		#LCD画面消去
	lcd.putbLCD([0x00,0x00])		#独自文字0x00を2つ表示
	lcd.putsLCD("TEST")			#文字列表示
	lcd.putbLCD([0x01,0x01])		#独自文字0x01を2つ表示
	lcd.setpos(lcd._line2nd)		#カーソルを2行目に移動
	lcd.putsLCD("COUNT:")		#文字列表示
	
	counter = 0					#カウンタ変数をゼロクリア
	while True:
		lcd.setpos(lcd._line2nd,6)			#カーソルを2行目左から7文字目に移動
		disptext = '{0:2d}'.format(counter)	#カウンタ変数の値を2桁の数値文字列に
		lcd.putsLCD(disptext)				#カウンタ変数文字列を表示
		counter = (counter + 1) % 100		#カウンタ変数のカウントアップ
#動作確認用プログラムここまで
