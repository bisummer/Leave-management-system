<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/9
 * Time: 18:43
 */

namespace Home\Controller;
use Think\Controller;

class StudentController extends CommonController {
    public function index(){
        /* s_g_id是班级表中的级别id字段，用于判断是否有查找班级的操作   */
        $s_g_id = request('get','int','s_g_id',0);
        if ($s_g_id != 0){
            $where['s_c_id'] = request('get','int','s_c_id',0);
            $where['s_g_id'] = $s_g_id;
            // 查找学生，并将级别和班级的id传入作为条件查找
            $student_list = D('Student')->get_StudentList($where);
            // 查找到学生后，查找 班级，用于在顶部的班级下拉列表中显示
            $class_list = D('Class')->get_ClassList(array('c_g_id'=>$s_g_id));
            $this->assign('student_list',$student_list);
            $this->assign('class_list',$class_list);
        }
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
//        $grade_list = D('Grade')->get_GradeList();
//        $this->assign('grade_list',$grade_list);
        $this->display();
    }

    public function apply(){
        $this->assign('active',6);
        // 提交表单的操作，判断是否有提交
        $flag = request('post','int','flag',0);
        if ($flag==1){
            // 获取各种信息
            $data['s_username'] =request('post','str','s_username','');
            $data['s_card'] = request('post','int','s_card','');
            $data['s_phone'] = request('post','int','s_phone','');
            $data['s_g_id'] = request('post','int','s_g_id','');
            $data['s_c_id'] = request('post','int','s_c_id','');
            $data['s_addtime'] = date("Y-m-d");
            $grade = D('Grade')->get_GradeInfo($data['s_g_id']);
            $data['s_grade'] = $grade['g_name'];
            $class = D('Class')->get_ClassInfo($data['s_c_id']);
            $data['s_class'] = $class['c_name'];
            $data['s_state'] = 1;
            // 添加学生信息
            $result = D('Student')->add_StudentInfo($data);
            // 返回前台操作的结果，是否添加成功，或者记录有重复等
            $state = get_addInfoState($result);
            $this->assign('state',$state);
        }
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
//        $list = D('Grade')->get_GradeList();
//        $this->assign('grade_list',$list);
        $this->display();
    }
    public function menu_active(){
        $this->assign('active',3);
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $grade_list = D('Grade')->get_GradeList();
        $this->assign('grade_list',$grade_list);
    }
    /**
     * 表单中，选择级别下拉列表时，通过ajax去后台查找对应的班级信息
     */
    public function apply_ajax(){
        /* s_g_id是班级表中的级别id字段，用于判断是否有查找级别的操作   */
        $s_g_id = request('get','int','s_g_id',0);
        if ($s_g_id != 0){
            // 返回对应的班级列表
            $class_list = D('Class')->get_ClassList(array('c_g_id'=>$s_g_id));
//            $ret = array(array('name'=>'123543'),array('name'=>'7894561423'));
            echo json_encode($class_list);
        }
    }
    public function delete(){
        $this->assign('active',7);
        /* s_g_id是班级表中的级别id字段，用于判断是否有查找班级的操作   */
        $s_g_id = request('get','int','s_g_id',0);
        $s_id = request('get','int','s_id',0);
        /**
         * 删除学生信息的操作，先获取当前学生信息中的班级和级别，方便删除以后重新定位到该班级里
         */
        if ($s_id != 0){
            $student = D('Student')->get_StudentInfo($s_id);
            D('Student')->del_StudentInfo($s_id);
            $this->success('删除成功','/index.php?c=student&a=delete&s_g_id='.$student['s_g_id'].'&s_c_id='.$student['s_c_id']);
            exit();
        }
        if ($s_g_id != 0){
            $where['s_c_id'] = request('get','int','s_c_id',0);
            $where['s_g_id'] = $s_g_id;
            // 查找学生，并将级别和班级的id传入作为条件查找
            $student_list = D('Student')->get_StudentList($where);
            // 查找到学生后，查找 班级，用于在顶部的班级下拉列表中显示
            $class_list = D('Class')->get_ClassList(array('c_g_id'=>$s_g_id));
            $this->assign('student_list',$student_list);
            $this->assign('class_list',$class_list);
        }
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
//        $grade_list = D('Grade')->get_GradeList();
//        $this->assign('grade_list',$grade_list);

        $this->display();
    }
}