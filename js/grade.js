// Created by guoqy
//省、市、区基本信息
var departments=["计算机工程学院","理学院","外国语学院"];
var majors =[["网络","信管"],["数学","物理"],["文学","翻译"]];
var classrooms=[
    [
        ["一班","二班","三班"],["信管1611","信管1612"]
    ],
    [
        ["一班","二班","三班"],["一班","二班","三班"]
    ],
    [
        ["一班","二班","三班"],["一班","二班","三班"]
    ]
];

//定义变量
var department,major,classroom;

//初始化省份下拉列表
function initDepartment(){
    //获取表单中的省、市、区元素
    department=document.getElementById("department");
    major=document.getElementById("major");
    classroom=document.getElementById("classroom");
    department.options.length=1;
    for(var i=0; i<departments.length; i++){
        var option = new Option(departments[i],departments[i]);
        department.options.add(option);
    }
}

//选择省份时触发
function departmentChange(){
    //对地区下拉列表初始化
    majorChange();
    //对城市下拉列表初始化
    major.options.length=1;
    if(department.selectedIndex==0){
        return;
    }
    //注意：选项的下标是从1开始的，数组的下标是从0开始的
    var pIndex=department.selectedIndex;
    for(var i=0; i<majors[pIndex-1].length; i++){
        var optionValue=majors[pIndex-1][i];
        var option=new Option(optionValue,optionValue);
        major.options.add(option);
    }
}

//选择城市时触发
function majorChange(){
    //对地区下拉列表初始化
    classroom.options.length=1;
    if (major.selectedIndex==0){
        return;
    }
    var pIndex=department.selectedIndex;
    var cIndex=major.selectedIndex;
    for (var i=0; i<classrooms[pIndex-1][cIndex-1].length; i++) {
        var optionValue=classrooms[pIndex-1][cIndex-1][i];
        var option=new Option(optionValue,optionValue);
        classroom.options.add(option);
    }
}

//窗口加载完毕时，完成事件绑定和初始化
/*window.onload = function () {
	//初始化省份下拉列表
	initDepartment();
	//为下拉列表绑定onchange事件
    department.onchange = departmentChange;
	major.onchange = majorChange;
};*/