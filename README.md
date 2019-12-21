# Laravel 6 網頁壓縮

引入 renatomarinho 的 laravel-page-speed 套件來用於通過刪除不必要的空格，換行符，製表符和其他額外對象來壓縮 HTML 代碼，可以讓網頁加速開啟，減少等待時間。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/` 來進入歡迎頁面。

----

## 畫面截圖
![](https://i.imgur.com/Ty7FAXr.png)
> 經壓縮過的網頁，並沒有在瀏覽器出現任何變化，反而幫助加速瀏覽網頁開啟
