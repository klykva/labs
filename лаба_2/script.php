<?php
ini_set('display_errors', 1);
if(isset($_POST['textField']) | isset($_POST['list'])){
    echo "����� ���������� ������� POST<br>";
    echo "textField=" . $_POST['textField'] . "<br>";
    echo "list=" . $_POST['list'];
    if(isset($_FILES['userFile'])){
        $fileName = $_FILES['userFile']['name'];
        copy($_FILES['userFile']['tmp_name'], $_FILES['userFile']['name']);
        echo "<br>���� $fileName ������� ��������";
    }
} else {
    echo "����� ���������� ������� GET<br>";
    echo "textField=" . $_GET['textField'] . "<br>";
    echo "list=" . $_GET['list'];
}