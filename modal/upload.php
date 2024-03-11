<?php
switch ($_GET['table']) {
    case 'title':
        echo "<h3>更新網站標題圖片</h3>";
        break;
    case 'mvim':
        echo "<h3>更新動畫圖片</h3>";
        break;
    case 'image':
        echo "<h3>更新校圖映像圖片</h3>";
        break;
}
?>

<hr>

<form action="./api/upload.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <?php
            switch ($_GET['table']) {
                case 'title':
                    echo "<h3>更新網站標題圖片</h3>";
                    break;
                case 'mvim':
                    echo "<h3>更新動畫圖片</h3>";
                    break;
                case 'image':
                    echo "<h3>更新校圖映像圖片</h3>";
                    break;
            }
            ?>
            <td>
                <input type="file" name="img" id="">
            </td>
        </tr>
    </table>
    <div class="cent">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            <input type="submit" value="更新">
            <input type="reset" value="重置">
    </div>

</form>