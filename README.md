# CakeTutorial

cakephpに慣れていただくためのテストリポジトリです。
このリポジトリを通じてCakePHPに慣れていただきます。
MVCの概念についてやPHPUnitを使った単体テストや
DBのスキーマを変更するmigration、自動でソースコードを作成する `bake` コマンド等を
このリポジトリを通じて学べるように致します。

またgithubを利用しての開発フローにも慣れていただきます。
URL:https://docs.google.com/presentation/d/1w9hGt1r-prYgHWK9BXpXnPII_oNRUbr-tkVG5_rJvNE/edit#slide=id.p
- issueの作成
- ブランチを切ってissueの対応
- `push` や `merge` の概念
- PR(PullRequest)のやり方

開発環境の構築がまだの場合
URL:https://docs.google.com/presentation/d/1XEPvD2cRlxTSOSAmUipbCdDeSyeDjf1XEm_JJHBufFI/edit#slide=id.p



## 初期設定
1. ローカルにClone  
	git cloneコマンドを利用してこのリポジトリを開発環境にクローンしてください。
	```shell
	$ git clone git@github.com:hayatravis/cake_tutorial.git
	```
	
	必要なパッケージをインストールします。  
	(composerのパスは適宜変更してください。 composer.pharや php ./composer.phar等)
	```mysql
	$ composer install
	 ```

2. 開発環境に合わせたDBの設定  
	DBにデータベースを作ってください。
	今回はわかりやすいよう `cake_tutorial` というDBを作成するのが良いと思います。
	```mysql
	mysql> CREATE DATABASE cake_tutorial DEFAULT CHARSET = UTF8;
	```

	https://github.com/hayatravis/cake_tutorial/blob/master/config/app.default.php  
	上記のファイルを同一のconfigディレクトリに `app.php` という名前でコピーしてください。
	
	https://github.com/hayatravis/cake_tutorial/blob/master/config/app.default.php#L225-L235  
	app.phpの上記のあたりを各開発環境のDBに合わせて設定してください。

3. ブラウザでアクセス  
	vagrant 環境を使っている場合はApacheやNginxの設定を行い、ブラウザからアクセスしてください。  
	DocumentRootは [webroot](https://github.com/hayatravis/cake_tutorial/tree/master/webroot) このディレクトリにセットしてください。

	vagrant を利用せずにアクセスする場合は以下のコマンドを叩くと
	```shell
	$ bin/cake server
	```
	
	```shell
	built-in server is running in http://localhost:8765/
	```
	このような形のメッセージが出ますので `http://localhost:8765/` こちらのURLでアクセスできるようになります。
	 
	Welcome to CakePHP 3.5.12 Red Velvet. Build fast. Grow solid.  
	みたいな画面が表示されれば成功です。  
	DBの接続に失敗しているなど設定にミスがあるとコック帽みたいな帽子が赤色になります。
	
5. DBにテーブルを作る  
	ソースコードの管理にgitがあるようにDBの管理にもマイグレーションという概念があります。
	今回は私が作ったマイグレーションファイルを実行してテーブルを作成してもらいます。
	```shell
	$ bin/cake migrations migrate
	```
	このコマンドを叩くとDBに `comments` というテーブルが作成されていると思います。
	
6. コメントしてみる  
	今回は超簡易的なコメントシステムを作成しました。  
	`/comments` にアクセスしてみてください。  
	緑色ヘッダーの画面が表示されると思います。
	左上の `New Comment` をクリックして適当にコメントしてみてください。
	先程の画面にリダイレクトして入力した項目が表示されていると思います。
	
	ここまでの実装で実質コードを変更したのは [このファイル](https://github.com/hayatravis/cake_tutorial/blob/master/config/Migrations/20180222112059_AddCommentsTable.php) だけです。
	あとはCakeの自動作成機能で作られています。  
	ここまででフレームワークの便利さは伝わったと思います。
