<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>请假管理系统</title>
</head>
<style>
    .all{
        margin: auto;
        text-align: center;
        width: 100%;
    }
    td{
        text-align: left;
    }
    div{
        font-size: 19px;
        font-family:"宋体";
        font-weight:bold;
    }
    .line1{
        margin-left: -5px;

    }
    h2{
        margin-left: 40px;
        text-align: left;
    }
</style>
<body>

<?php if($leave["l_s_username"] == ''): ?><div class="all" >
        <h2 style="margin-left: 28%;margin-bottom: -10px;">内蒙古农业大学</h2>
        <h2 style="margin-left: 20%">草原与资源环境学院学生请假单（存根）</h2>

        <table align="" width="100%" >



            <tr>
                <td>
                    <div>姓名：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></div>
                </td>
                <td >
                    <div>学号：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> </div>
                </td>
            </tr>
            <tr>
                <td >
                    <div>班级：<u>&nbsp;&nbsp;&nbsp;</u>级<u>&nbsp;&nbsp;&nbsp;</u>班 </div>
                </td>
                <td >
                    <div>电话：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>请假类型: <?php echo ($leave["l_s_phone"]); ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>夜假：<u>2017</u>年<u style="width: 20em;">7</u>月<u>&nbsp;&nbsp;</u>日 至 <u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日 </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>课假：<u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日 第<u>&nbsp;&nbsp;&nbsp;</u>大节 至 <u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日 第<u>&nbsp;&nbsp;</u>大节 </div>
                </td>
            </tr>
            <tr>
                <td  colspan="2">
                    <div>
                        请假原因（具体情况说明）:<u><?php echo ($leave["l_address"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                    </div>
                </td>
            </tr>
            <tr>
                <td >
                    <div style="margin-left: 26%;"> <br>请假必填</div>
                </td>
                <td >
                    <div style="margin-left: 38%;"><br>销假必填</div>
                </td>
            </tr>
            <tr>
                <td align="left" rowspan="1" width="50%" >

                    <table width="80%" style="font-size: 20px;font-family:'宋体';font-weight:400;border:2px solid #000000;" >
                        <tr><td>准假老师：（盖章）</td></tr>
                        <tr><td>学生签字：</td></tr>
                    </table>
                </td>
                <td align="right" rowspan="1" width="50%" >

                    <table align="right" width="80%" style="font-family:'宋体';font-weight:400;border:2px solid #000000;" >
                        <tr><td>销假时间：<u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日  </td></tr>
                        <tr><td>学生签字：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" >
                    <div align="right"><br>草原与资源环境学院
                        <br>
                        <u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日
                    </div>
                </td>
            </tr>
        </table>
        <br><br><br>
        <h2 style="margin-left: 28%;margin-bottom: -10px;">内蒙古农业大学</h2>
        <h2 style="margin-left: 20%">草原与资源环境学院学生请假单</h2>

        <table align="" width="100%" >
            <tr>
                <td>
                    <div>姓名：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></div>
                </td>
                <td >
                    <div>学号：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> </div>
                </td>
            </tr>
            <tr>
                <td >
                    <div>班级：<u>&nbsp;&nbsp;&nbsp;</u>级<u>&nbsp;&nbsp;&nbsp;</u>班 </div>
                </td>
                <td >
                    <div>电话：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>请假类型: <?php echo ($leave["l_s_phone"]); ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>夜假：<u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日 至 <u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日 </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>课假：<u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日 第<u>&nbsp;&nbsp;&nbsp;</u>大节 至 <u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日 第<u>&nbsp;&nbsp;</u>大节 </div>
                </td>
            </tr>
            <tr>
                <td  colspan="2">
                    <div>
                        请假原因（具体情况说明）:<u><?php echo ($leave["l_address"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2">

                    准假老师：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>（盖章）学生签字：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                </td>
            </tr>
            <tr>
                <td colspan="2" >
                    <div align="right"><br>草原与资源环境学院
                        <br>
                        <u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日
                    </div>
                </td>
            </tr>
        </table>



    </div><?php endif; ?>
<?php if($leave["l_s_username"] != ''): ?><div class="all" >
        <h2 style="margin-left: 28%;margin-bottom: -10px;">内蒙古农业大学</h2>
        <h2 style="margin-left: 20%">草原与资源环境学院学生请假单（存根）</h2>
        <table align="" width="100%" >
            <tr>
                <td>
                    <div>姓名：<u><?php echo ($leave["l_s_username"]); ?></u></div>
                </td>
                <td >
                    <div>学号：<u><?php echo ($leave["l_s_card"]); ?></u> </div>
                </td>
            </tr>
            <tr>
                <td >
                    <div>班级：<u>&nbsp;<?php echo ($leave["l_s_grade"]); ?>&nbsp;</u>级<u>&nbsp;<?php echo ($leave["l_s_class"]); ?>&nbsp;</u>班 </div>
                </td>
                <td >
                    <div>电话：<u><?php echo ($leave["l_s_phone"]); ?></u></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>请假类型: 夜假&nbsp;课假</div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>夜假：<?php echo ($leave["l_night_begin_time"]); ?> 至 <?php echo ($levae["l_night_end_time"]); ?> </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>课假：<?php echo ($leave["l_class_begin_time"]); ?> 第<u><?php echo ($leave["l_begin_class"]); ?></u>大节 至 <?php echo ($leave["l_class_end_time"]); ?> 第<u><?php echo ($leave["l_end_class"]); ?></u>大节 </div>
                </td>
            </tr>
            <tr>
                <td  colspan="2">
                    <div>
                        请假原因（具体情况说明）:<u>
                        &nbsp;&nbsp;<?php echo ($leave["l_cause"]); ?>&nbsp;&nbsp;
                    </u>
                    </div>
                </td>
            </tr>
            <tr>
                <td >
                    <div style="margin-left: 26%;"> <br>请假必填</div>
                </td>
                <td >
                    <div style="margin-left: 38%;"><br>销假必填</div>
                </td>
            </tr>
            <tr>
                <td align="left" rowspan="1" width="50%" >

                    <table width="80%" style="font-size: 20px;font-family:'宋体';font-weight:400;border:2px solid #000000;" >
                        <tr><td>准假老师：（盖章）</td></tr>
                        <tr><td>学生签字：</td></tr>
                    </table>
                </td>
                <td align="right" rowspan="1" width="50%" >

                    <table align="right" width="80%" style="font-family:'宋体';font-weight:400;border:2px solid #000000;" >
                        <tr><td>销假时间：<u>&nbsp;</u>年<u>&nbsp;</u>月<u>&nbsp;</u>日  </td></tr>
                        <tr><td>学生签字：<u>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" >
                    <div align="right"><br>草原与资源环境学院
                        <br>
                        <u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <h2 style="margin-left: 28%;margin-bottom: -10px;">内蒙古农业大学</h2>
        <h2 style="margin-left: 20%">草原与资源环境学院学生请假单</h2>

        <table align="" width="100%" >
            <tr>
                <td>
                    <div>姓名：<u><?php echo ($leave["l_s_username"]); ?></u></div>
                </td>
                <td >
                    <div>学号：<u><?php echo ($leave["l_s_card"]); ?></u> </div>
                </td>
            </tr>
            <tr>
                <td >
                    <div>班级：<u>&nbsp;<?php echo ($leave["l_s_grade"]); ?>&nbsp;</u>级<u>&nbsp;<?php echo ($leave["l_s_class"]); ?>&nbsp;</u>班 </div>
                </td>
                <td >
                    <div>电话：<u><?php echo ($leave["l_s_phone"]); ?></u></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>请假类型: 夜假&nbsp;课假</div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>夜假：<?php echo ($leave["l_night_begin_time"]); ?> 至 <?php echo ($levae["l_night_end_time"]); ?> </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>课假：<?php echo ($leave["l_class_begin_time"]); ?> 第<u><?php echo ($leave["l_begin_class"]); ?></u>大节 至 <?php echo ($leave["l_class_end_time"]); ?> 第<u><?php echo ($leave["l_end_class"]); ?></u>大节 </div>
                </td>
            </tr>
            <tr>
                <td  colspan="2">
                    <div>
                        请假原因（具体情况说明）:<u>&nbsp;&nbsp;<?php echo ($leave["l_cause"]); ?>&nbsp;&nbsp;
                        </u>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2">

                    准假老师：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>（盖章）学生签字：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                </td>
            </tr>
            <tr>
                <td colspan="2" >
                    <div align="right"><br>草原与资源环境学院
                        <br>
                        <u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u>日
                    </div>
                </td>
            </tr>
        </table>



    </div><?php endif; ?>
</body>
</html>