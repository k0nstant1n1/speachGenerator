<?php
$arr1 = array("С другой стороны","Равным образом","Не следует, однако, забывать, что","Таким образом","Повседневная практика показывает, что","Значимость этих проблем настолько очевидна, что","Разнообразный и богатый опыт","Задача организации, в особенности же","Идейные соображения высшего порядка, а также");
$arr2 = array("реализация намеченных плановых заданий","рамки и место обучения кадров","постоянный количественный рост и сфера нашей активности","сложившаяся структура организации","новая модель организационной деятельности","дальнейшее развитие различных форм деятельности","постоянное информационно-пропагандистское обеспечение нашей деятельности","управление и развитие структуры","консультация с широким активом","начало повседневной работы по формированию позиции");
$arr3 = array("играет важную роль в формировании","требует от нас анализа","требует определения и уточнения","способствует подготовке и реализации","обеспечивает широкому кругу(специалистов, предпринимателей, депутатов...) участие в формировании","позволяет выполнять важные задания по разработке","в значительной степени обуславливает создание","позволяет оценить значение","представляет собой интересный эксперимент проверки","влечет за собой интересный процесс внедрения и модернизации");
$arr4 = array("существующих финансовых и административных условий.","дальнейших направлений развития.","системы массового участия.","позиций, занимаемых участниками в отношении поставленных задач.","новых предложений.","направлений прогрессивного развития.","системы обучения кадров, соответствующей насущным потребностям.","соответствующих условий активизации.","модели развития.","форм воздействия.");
$str = 'Товарищи! ';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>speach generator</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="get">
            <input type="text" name="countOfSentenses" placeholder="количество предложений">
            <input type="submit" name="submit" value="генерировать">
        </form>
    <?php
        if(@$_GET['submit']) {
            for ($i = 0; $i < $_GET['countOfSentenses']; $i++) {
                $str .= $arr1[array_rand($arr1, 1)] . " " . $arr2[array_rand($arr2, 1)] . " " . $arr3[array_rand($arr3, 1)] . " " . $arr4[array_rand($arr4, 1)] . " ";
            }
            echo "<h1 style='text-align: center;'> Речь политработника времен СССР на " . $_GET['countOfSentenses'] . " предложений</h1>";
            echo "<p style='padding: 0px 100px;'>" . $str . "</p>";
        }
    ?>
</body>
</html>