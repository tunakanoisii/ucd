<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>sample</title>
</head>

<body>

  <style type="text/css">
    <!--@charset "UTF-8";
    * {
      margin: 0;
      padding: 0;
    }

    body{
      margin: 0 auto;
      width: 600px;
      height: 700px;
    }

    #main{
      margin: 30px;
      width: 500px;
      height: 400px;

      border: solid 1px;
    }

    .contents{
      margin: 50px;
      width: 400px;
      height: 300px;
    }
  -->
</style>

<div id="main">
  <div class="contents">
    <p><?php
      $updir = "./files/";
      $tmp_file = @$_FILES['upfile']['tmp_name'];
      @list($file_name,$file_type) = explode(".",@$_FILES['upfile']['name']);
      $png = glob($updir. "*.png");
      $jpg = glob($updir. "*.jpg");
      $jpeg = glob($updir. "*.jpeg");
      $result = count($png) + count($jpg) + count($jpeg);
      $copy_file = $result . "." . $file_type;
      $copy_file_2 = $result . ".jpg";
      if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
        if (move_uploaded_file($tmp_file,"$updir/$copy_file_2")) {
          chmod("upload_files/" . $_FILES["upfile"]["name"], 0644);
          echo $_FILES["upfile"]["name"] . "をアップロードしました。<br /><br />";
          echo "（※アップロードしたファイルは <a href=\"" . $updir . "/" . $copy_file_2 . "\" target=\"_blank\">こちら</a> から確認できます。）";
        } else {
          echo "ファイルをアップロード出来ませんでした。";
        }
      } else {
        echo "ファイルが選択されていません。";
      }
      ?></p>

    </div>

  </div>
</body>

</html>