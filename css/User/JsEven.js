/// <reference path="jquery-1.4.1-vsdoc.js" />
/// <reference path="common.js" />

$().ready(function () {

    //******************************网店卖家**********************************
    //    $("#btn_webshop").live('click', function () {

    //        var webshoptypeid = $("#drp_webshoptypeid").val();
    //        var otherwebshoptype = $("#txt_otherwebshoptype").val();
    //        var nickname = $("#txt_nickname").val();
    //        var webshopurl = $("#txt_webshopurl").val();
    //        var turnover = $("#txt_turnover").val();


    //        $.ajax({
    //            type: "Post",
    //            url: "AjaxInfo.ashx?t=addwebshop&webshoptypeid=" + webshoptypeid + "&otherwebshoptype=" + otherwebshoptype + "&nickname=" + nickname + "&webshopurl=" + webshopurl + "&turnover=" + turnover + "&num=" + Math.random(),
    //            data: "",
    //            contentType: "application/json; charset=utf-8",
    //            cache: false,
    //            success: function (data) {
    //                alert("基本信息成功调用:" + data);
    //                $("#table1").empty();
    //                $("#table1").html(data);
    //            },
    //            error: function () {
    //                alert("，基本信息调用失败");
    //            }
    //        });
    //    });




    //******************************基本资料填写**********************************


    //基本资料填写
    $("#btn_basic").live('click', function () {
        //提交表单
        var mobiephone = $("#txt_mobiephone").val();
        var realname = $("#txt_realname").val();
        var qq = $("#txt_qq").val();
        var educationId = $("#drp_educationid").val();
        var idnumber = $("#txt_idnumber").val();

        if (!VarIsDrp(educationId)) {
            alert("请选择教育程度");
            return;
        }

        if (!VarIsMobieNum(mobiephone)) {
            alert("手机号填写不正确,请填写手机号");
            return;
        }

        if (!VarHanZi(realname)) {
            alert("真实姓名填写不正确,请正确填写真实姓名");
            return;
        }

        if (!VarIsCardId(idnumber)) {
            alert("身份证号码填写不正确,请正确填写身份证号码");
            return;
        }


        //        if (educationId == "请选择" || mobiephone == "" || realname == "" || idnumber == "") {
        //            alert("尚有内容未填写,请填写");
        //            return;
        //        }


        $.ajax({
            type: "Post",
            url: "AjaxInfo.ashx?t=addBasicInfo&mobiephone=" + mobiephone + "&realname=" + realname + "&qq=" + qq + "&educationId=" + educationId + "&idnumber=" + idnumber + "&num=" + Math.random(),
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("基本信息成功调用:" + data);
                $("#table1").empty();
                $("#table1").html(data);
            },
            error: function () {
                alert("，基本信息调用失败");
            }
        });
    });

    //修改
    $("#btn_edit").live('click', function () {
        $.ajax({
            type: "Post",
            url: "AjaxInfo.ashx?t=showBasicInfo&num=" + Math.random(),
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("基本信息修改成功调用:" + data);
                $("#table1").empty();
                $("#table1").html(data);
            },
            error: function () {
                alert("，基本信息调用失败");
            }
        });
    });

    //*************************************下面是家庭情况js ************************************************//

    $("#btn_family").live('click', function () {
        var marriagestatusid = $("#drp_marriagestatusid").val();
        var residencetypeid = $("#drp_residencetypeid").val();
        var residencephone = $("#txt_residencephone").val();
        var residenceaddress = $("#txt_residenceaddress").val();
        var residenceyears = $("#drp_residenceyears").val();
        var hasbuycar = $("input[name='hasbuy']:checked").val();

        if (!VarIsDrp(marriagestatusid)) {
            alert("请选择婚姻状况");
            return;
        }

        if (!VarIsDrp(residencetypeid)) {
            alert("请选择住宅情况");
            return;
        }

        if (!VarIsNull(residenceaddress)) {
            alert("住宅地址不能为空");
            return;
        }

        if (!VarIsMobieNum(residencephone)) {
            alert("住宅电话不能为空");
            return;
        }
        if (!VarIsDrp(residenceyears)) {
            alert("入住年数不能为空");
            return;
        }

        if (!VarIsRadio(hasbuycar)) {
            alert("是否购车不能为空");
            return;
        }


        // alert(residenceaddress);
        // if (marriagestatusid == "请选择" || residencetypeid == "请选择" || residencephone == "" || residenceaddress == "" || residenceyears == "请选择" || hasbuycar == undefined) {
        //     alert("尚有内容未填写,请填写");
        //     return;
        // }

        // alert("marriagestatusid:" + marriagestatusid + ",\n\rresidencetypeid:" + residencetypeid + ",\n\rresidencephone:" + residencephone + ",\n\rresidenceaddress:" + residenceaddress + ",\n\rresidenceyears:" + residenceyears + ",\n\rhasbuycar:" + hasbuycar);

        //var str = encodeURIComponent("AjaxInfo.ashx?t=addfamilyinfo&marriagestatusid=" + marriagestatusid + "&residencetypeid=" + residencetypeid + "&residencephone=" + residencephone + "&residenceaddress=" + residenceaddress + "&residenceyears=" + residenceyears + "&hasbuycar=" + hasbuycar + "&num=" + Math.random());
        var str = "AjaxInfo.ashx?t=addfamilyinfo&marriagestatusid=" + marriagestatusid + "&residencetypeid=" + residencetypeid + "&residencephone=" + residencephone + "&residenceaddress=" + residenceaddress + "&residenceyears=" + residenceyears + "&hasbuycar=" + hasbuycar + "&num=" + Math.random();

        alert(str);

        $.ajax({
            type: "Post",
            url: str,
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("家庭情况成功调用");
                alert(data);
                $("#table2").empty();
                $("#table2").html(data);
            },
            error: function () {
                alert("，家庭情况调用失败");
            }
        });
    });

    $("#btn_familyedit").live('click', function () {
        alert("家庭情况修改跳出");
        $.ajax({
            type: "Post",
            url: "AjaxInfo.ashx?t=showfamilyinfoHtml&num=" + Math.random(),
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("家庭情况修改成功调用:" + data);
                $("#table2").empty();
                $("#table2").html(data);
            },
            error: function () {
                alert("，家庭情况调用失败");
            }
        });
    });

    //*************************************工薪族****************************************************************//

    //addwageearnersinfo
    $("#btn_wageearners").live('click', function () {
        var iscash = $("input[name='rdo_iscash']:checked").val();

        var companytypeid = $("#drp_companytypeid").val();
        var workyears = $("#drp_workyears").val();
        var companyname = $("#txt_companyname").val();
        var department = $("#txt_department").val();
        var companyaddress = $("#txt_companyaddress").val();
        var companyphone = $("#txt_companyphone").val();

        if (!VarIsRadio(iscash)) {
            alert("收入发放方式不能为空。");
            return;
        }
        if (!VarIsDrp(companytypeid)) {
            alert("单位性质不能为空。");
            return;
        }

        if (!VarIsDrp(workyears)) {
            alert("工作年限不能为空。");
            return;
        }

        if (!VarIsNull(companyname)) {
            alert("单位名称不能为空。");
            return;
        }

        if (!VarIsNull(department)) {
            alert("任职部门不能为空。");
            return;
        }
        if (!VarIsNull(companyaddress)) {
            alert("单位地址不能为空。");
            return;
        }
        if (!varis) {
            
        }



        if (iscash == "undefined" || workyears == "请选择" || companytypeid == "请选择" || companyname == "" || department == "" || companyaddress == "" || companyphone == "") {
            alert("尚有内容未填写,请填写");
            return;
        }

        alert("iscash:" + iscash + ",\n\rcompanytypeid:" + companytypeid + ",\n\rworkyears:" + workyears + ",\n\rcompanyname:" + companyname + ",\n\rdepartment:" + department + ",\n\rcompanyaddress:" + companyaddress + ",\n\r companyphone:" + companyphone);

        var str = "AjaxInfo.ashx?t=addwageearnersinfo&iscash=" + iscash + "&workyears=" + workyears +
            "&companytypeid=" + companytypeid + "&companyname=" + companyname + "&department=" + department
                + "&companyaddress=" + companyaddress + "&companyphone=" + companyphone + "&num=" + Math.random();

        alert(str);

        $.ajax({
            type: "Post",
            url: str,
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("工薪族 - 我的单位情况-成功调用");
                alert(data);
                $("#table3").empty();
                $("#table3").html(data);
            },
            error: function () {
                alert("，工薪族 - 我的单位情况-调用失败");
            }
        });
    });


    $("#btn_showwageearners").live('click', function () {

        //alert("工薪族 - 我的单位情况-修改跳出");
        $.ajax({
            type: "Post",
            url: "AjaxInfo.ashx?t=showwageearnershtml&num=" + Math.random(),
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("工薪族 - 我的单位情况-修改成功调用:" + data);
                $("#table3").empty();
                $("#table3").html(data);
            },
            error: function () {
                alert("，工薪族 - 我的单位情况-调用失败");
            }
        });
    });


    //*************************************学生*******************************************************************//

    //提交
    $("#btn_student").live('click', function () {

        var schoolname = $("#txt_schoolname").val();
        var dormitoryphone = $("#txt_dormitoryphone").val();
        var incomefrom = $("#txt_incomefrom").val();

        if (schoolname == "" || dormitoryphone == "" || incomefrom == "") {
            alert("尚有内容未填写,请填写");
            return;
        }

        var str = "AjaxInfo.ashx?t=addstudent&schoolname=" + schoolname + "&dormitoryphone=" + dormitoryphone + "&incomefrom=" + incomefrom + "&num=" + Math.random();

        alert(str);

        $.ajax({
            type: "Post",
            url: str,
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("学生情况成功调用");
                alert(data);
                $("#table3").empty();
                $("#table3").html(data);
            },
            error: function () {
                alert("学生情况调用失败");
            }
        });
    });


    $("#btn_studentedit").live('click', function () {

        alert("学生情况修改跳出");
        $.ajax({
            type: "Post",
            url: "AjaxInfo.ashx?t=showstudentinfoHtml&num=" + Math.random(),
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("学生情况修改成功调用:" + data);
                $("#table3").empty();
                $("#table3").html(data);
            },
            error: function () {
                alert("学生情况调用失败");
            }
        });
    });

    //************************************其他*****************************************************************//

    $("#btn_other").live('click', function () {
        var incomefrom = $("#txt_incomefrom").val();

        if (incomefrom == "") {
            alert("尚有内容未填写,请填写");
            return;
        }

        var str = "AjaxInfo.ashx?t=addother&incomefrom=" + incomefrom + "&num=" + Math.random();

        alert(str);

        $.ajax({
            type: "Post",
            url: str,
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("其他情况成功调用");
                alert(data);
                $("#table3").empty();
                $("#table3").html(data);
            },
            error: function () {
                alert("其他情况调用失败");
            }
        });
    });

    $("#btn_otheredit").live('click', function () {

        alert("其他情况修改跳出");
        $.ajax({
            type: "Post",
            url: "AjaxInfo.ashx?t=showotherinfoHtml&num=" + Math.random(),
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("其他情况修改成功调用:" + data);
                $("#table3").empty();
                $("#table3").html(data);
            },
            error: function () {
                alert("其他情况调用失败");
            }
        });
    });

    //*********************************************私营业主*****************************************************//

    $("#btn_owneredit").live('click', function () {
        alert("私营业主情况修改跳出");
        $.ajax({
            type: "Post",
            url: "AjaxInfo.ashx?t=showownersinfoHtml&num=" + Math.random(),
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("私营业主情况修改成功调用:" + data);
                $("#table3").empty();
                $("#table3").html(data);
            },
            error: function () {
                alert("私营业主情况调用失败");
            }
        });

    });

    $("#btn_owner").live('click', function () {

        var companyname = $("#txt_companyname").val();
        var companysizeid = $("#txt_companysizeid").val();

        if (companyname == "" || companysizeid == "请选择") {
            alert("尚有内容未填写,请填写");
            return;
        }
        var str = "AjaxInfo.ashx?t=addowners&companyname=" + companyname + "&companysizeid=" + companysizeid + "&num=" + Math.random();

        alert(str);

        $.ajax({
            type: "Post",
            url: str,
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("私营业主情况成功调用");
                alert(data);
                $("#table3").empty();
                $("#table3").html(data);
            },
            error: function () {
                alert("私营业主情况调用失败");
            }
        });

    });

    //*****************************************新的网店卖家×××××××××××××××××××//


    $("#btn_webshopaddmain").live('click', function () {

        var idd = this.name;

        var webshoptypeid = $("#drp_webshoptypeid" + idd).val();
        var otherwebshoptype = $("#txt_otherwebshoptype" + idd).val();
        var nickname = $("#txt_nickname" + idd).val();
        var webshopurl = $("#txt_webshopurl" + idd).val();
        var turnover = $("#txt_turnover" + idd).val();

        if (turnover == "" || webshopurl == "" || nickname == "" || webshoptypeid == "请选择") {
            alert("尚有内容未填写,请填写");
            return;
        } else {
            if (webshoptypeid == "其他" && otherwebshoptype == "") {
                alert("请选择经营网店");
                return;
            }
        }


        var removeid = "webshop" + idd;

        alert(removeid);
        var url = "AjaxInfo.ashx?t=addwebshop&webshoptypeid=" + webshoptypeid + "&idd=" + idd + "&otherwebshoptype=" + otherwebshoptype + "&nickname=" + nickname + "&webshopurl=" + webshopurl + "&turnover=" + turnover + "&num=" + Math.random();


        alert(url);

        $.ajax({
            type: "Post",
            url: url,
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                window.location.reload();
                //                alert("基本信息成功调用:" + data);
                //                $("#divedit").empty();
                //                // var j = "<div id=\"nomainwebshop1\">  <input id=\"btn_webshopaddtoo\" type=\"button\" name=\"name\" value=\"继续添加网店\" /></div>"
                //                $("#divshow").html(data);
            },
            error: function () {
                alert("，基本信息调用失败");
            }
        });
    });

    //追加和添加
    $("#btn_webshopadd").live('click', function () {

        var i = "div" + this.name + "show";
        alert(i);
        var j = "div" + this.name + "edit";
        alert(j);
        var idd = this.name;

        var webshoptypeid = $("#drp_webshoptypeid" + idd).val();
        var otherwebshoptype = $("#txt_otherwebshoptype" + idd).val();
        var nickname = $("#txt_nickname" + idd).val();
        var webshopurl = $("#txt_webshopurl" + idd).val();
        var turnover = $("#txt_turnover" + idd).val();



        var url = "AjaxInfo.ashx?t=addwebshop&webshoptypeid=" + webshoptypeid + "&idd=" + idd + "&otherwebshoptype=" + otherwebshoptype + "&nickname=" + nickname + "&webshopurl=" + webshopurl + "&turnover=" + turnover + "&num=" + Math.random();

        alert(url);

        $.ajax({
            type: "Post",
            url: url,
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("基本信息成功调用:" + data);
                window.location.reload();
                //                $("#" + j).empty();
                //                $("#webshop2edit").empty();
                //                $("#" + i).html(data);
            },
            error: function () {
                alert("，基本信息调用失败");
            }
        });
    });

    //修改
    $("#btn_webshopedited").live('click', function () {
        alert("网店卖家情况修改跳出");

        var i = "webshop" + this.name;
        alert(i);
        var j = "webshop" + this.name;
        alert(j);

        alert(this.name);

        $.ajax({
            type: "Post",
            url: "AjaxInfo.ashx?t=webshopedited" + "&idd=" + this.name + "&num=" + Math.random(),
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {

                alert("网店卖家情况修改成功调用:" + data);
                $("#" + i).empty();
                $("#" + j).html(data);
            },
            error: function () {
                alert("网店卖家情况调用失败");
            }
        });
    });

    //继续添加网店模块
    $("#btn_webshopaddtoo").live('click', function () {
        alert("网店卖家情况继续添加点击");

        var idd = this.name;
        alert(idd);

        $.ajax({
            type: "Post",
            url: "AjaxInfo.ashx?t=webshopaddtoo" + "&idd=" + idd + "&num=" + Math.random(),
            data: "",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function (data) {
                alert("网店卖家情况继续添加成功调用:" + data);
                $("#div2").empty();
                $("#div2").html(data);
                // $("#editwebshop").empty();
                // $("#editwebshop").append(data);
            },
            error: function () {
                alert("网店卖家情况继续添加调用失败");
            }
        });
    });

    //结束标签
});
