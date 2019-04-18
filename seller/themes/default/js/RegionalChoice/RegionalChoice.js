/*模拟数据省市*/

// JS执行

function GetRegionPlug() {
    $(".test-div").empty().append(
        $("<div/>", {
            "class": "place-div"
        }).append(
            $("<div/>", {}).append(
                $("<div/>", {
                    "class": "checkbtn"
                }).append(
                    $("<a/>", {
                        "class": "allcheck",
                        "text": "全选",
                        "click": function () {
                            $(".place").find("input").prop("checked", true);
                            ShowTipNum();
                        }
                    })
                ).append(
                    $("<a/>", {
                        "class": "clearCheck",
                        "text": "清空",
                        "click": function () {
                            $(".place").find("input").prop("checked", false);
                            $(".ratio").html("");
                        }
                    })
                )
            ).append(
                $("<div/>", {
                    "class": "placegroup"
                }).append(
                    GetPlace(datas)
                )
            )
        )
    )
}

function GetPlace(datas) {
    // console.log(datas);
    return datas.map(function (item) {
        // console.log(item);
        return $("<div/>", {
            "class": "place clearfloat"
        }).append(
            $("<div/>", {
                "class": "bigplace"
            }).append(
                $("<div/>", {}).append(
                    $("<label/>", {
                        "text": item.name
                    }).append(
                        $("<input/>", {
                            // "id":item.id,
                            "type": "checkbox",
                            "class": "bigarea",
                            "data-name": item.name,
                            "data-r_id": item.r_id,
                            "click": function () {
                                var bool = $(this).prop("checked");
                                var single = $(this).parents(".bigplace").next().find("input");
                                var ee = $(this).parents(".bigplace").next().find(".place-tooltips");
                                single.prop("checked", bool);
                                if (single.prop("checked")) {
                                    ee.each(function (index, a) {
                                        var num = $(this).find(".citys").find("input").length;
                                        $(this).find(".ratio").html("(" + num + "/" + num + ")");
                                    })
                                } else {
                                    ee.each(function (index, a) {
                                        var num = $(this).find(".citys").find("input").length;
                                        $(this).find(".ratio").html("");
                                    })
                                }
                            }
                        })
                    )
                )
            )
        ).append(
            function () {
                if (item.children) {
                    return GetSmallPlace(item.children)
                }
            }()
        )
    })
}
function GetSmallPlace(datas) {
    return $("<div/>", {
        "class": "smallplace clearfloat"
    }).append(
        datas.map(function (item) {
            return $("<div/>", {
                "class": "place-tooltips"
            }).append(
                $("<label/>", {
                    "text": item.name
                }).append(
                    $("<input/>", {
                        // "id":item.id,
                        "type": "checkbox",
                        "class": "bigcity",
                        "data-name": item.name,
                        "data-r_id": item.r_id,
                        "click": function () {
                            var small = $(this).parent().next(".citys").find("input");
                            var smalllength = small.length;
                            var ee = $(this).parents(".smallplace").find(".ratio");
                            if ($(this).prop("checked")) {
                                small.prop("checked", true);
                                $(this).parents(".place-tooltips").find(".ratio").html("(" + smalllength + "/" + smalllength + ")");
                                $(this).parents(".smallplace").prev().find(".bigarea").prop("checked", true);
                            } else {
                                small.prop("checked", false);
                                $(this).parents(".place-tooltips").find(".ratio").html("");
                                ClearArea($(this).parents(".smallplace"), $(this).parents(".smallplace").prev().find(".bigarea"));
                            };
                        }
                    })
                ).append(
                    function () {
                        if (item.children) {
                            return $("<span/>", {
                                "class": "ratio"
                            })
                        }
                    }
                )
            ).append(
                function () {
                    if (item.children) {
                        return $("<div/>", {
                            "class": "citys"
                        }).append(
                            $("<i/>", {
                                "class": "jt"
                            }).append($("<i/>", {}))
                        ).append(
                            GetSmallCitys(item.children)
                        )
                    }
                }

            )
        })
    )
}

function GetSmallCitys(datas) {
    return $("<div/>", {
        "class": "row-div clearfloat"
    }).append(
        datas.map(function (item) {
            return $("<p/>", {}).append(
                $("<label/>", {}).append(
                    $("<input/>", {
                        // "id":item.id,
                        "type": "checkbox",
                        "class": "city",
                        "click": function () {
                            var tf = $(this).parents(".citys").find("input:checked").length;
                            var alltf = $(this).parents(".citys").find("input").length;
                            if (tf > 0) {
                                $(this).parents(".place-tooltips").find(".bigcity").prop("checked", true);
                                $(this).parents(".place-tooltips").find(".ratio").html("(" + tf + "/" + alltf + ")");
                                $(this).parents(".smallplace").prev().find(".bigarea").prop("checked", true);
                            } else if (tf == 0) {
                                $(this).parents(".place-tooltips").find(".bigcity").prop("checked", false);
                                $(this).parents(".place-tooltips").find(".ratio").html("");
                                ClearArea($(this).parents(".smallplace"), $(this).parents(".smallplace").prev().find(".bigarea"));
                            }
                        }
                    })
                ).append(
                    $("<span/>", {
                        "text": item.name
                    })
                )
            )
        })
    )
}


//控制提示个数的显示
function ShowTipNum() {
    var n = $(".place-div").find(".place");
    n.each(function (index, a) {
        var m = $(this).find(".place-tooltips");
        m.each(function (index, a) {
            var u = $(this).find(".citys").find(".city").length;
            var uu = $(this).find(".citys").find(".city:checked").length;
            if (uu != 0) {
                $(this).find(".ratio").html("(" + uu + "/" + u + ")");
                $(this).find(".bigcity").prop("checked", true);
            } else {
                $(this).find(".ratio").html("");
            }

        })

    })
}
//省市区全部取消选择时华北东北等取消选择
function ClearArea(place, area) {//参数area为包含省级input的父级div
    var checked = place.find("input:checked").length;
    if (checked == 0) {
        area.prop("checked", false);
    }
}
//获取已选中的数据

function GetChecked() {
    var CheckedId = [];//先清空数组
    var CheckedName = [];
    var n = $(".place-div").find(".place");
    n.each(function (index, a) {
        var m = $(this).find(".smallplace");
        m.each(function (index, a) {
            var p = $(this).find(".bigcity");
            p.each(function (index, a) {
                if ($(this).prop("checked")) {
                    if ($(this).parents(".place-tooltips").find(".citys").length == 0) {
                        //判断它没有下级地区的时候，将id放入数组
                        //console.log($(this).attr("id"));此时能获取到已选中的省市级id
                        CheckedId.push($(this).attr("data-r_id"));
                        CheckedName.push($(this).attr("data-name"));
                    }
                }
                var s = $(this).parents(".place-tooltips").find(".city");
                s.each(function (index, a) {
                    if ($(this).prop("checked")) {
                        CheckedId.push($(this).attr("data-r_id"));
                        CheckedName.push($(this).attr("data-name"));
                        //console.log($(this).attr("id"));//此时能获取到已选中的县区级id
                    }
                })
            })
        })
    })
    return {"CheckedId":CheckedId,"CheckedName":CheckedName};
}

//根据从后台获取的已选中的id来显示
function SetChecked(param) {
    $.each(param, function (index, value) {
        $("#" + value).trigger("click");
    })
}

// 自定义JS
$(".test-div").on('mouseover', '.place', function () {
    // console.log($(this).children(".bigplace").find(".bigarea").attr("data-name"));
    $(this).addClass("place-active");
    $(this).children(".smallplace").show();
})
$(".test-div").on('mouseout', '.place', function () {
    $(this).removeClass("place-active");
    $(".smallplace").hide();
})


