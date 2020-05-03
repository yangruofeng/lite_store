;(function ($, window, document, undefined) {
    $.fn.selectpick = function (options) {
        var selectpick_config = {container: "body", height: '100%', width: '100%', disabled: false, onSelect: ""}
        var settings = $.extend({}, selectpick_config, options);
        return this.each(function (elem_id) {
            var obj = this;
            var _offset = $(this).offset();
            var top = _offset.top + $(document).scrollTop();
            var elem_width = $(obj).width();
            var left = _offset.left + $(document).scrollLeft();
            var elem_id = $(obj).attr("id");
            var _selectBody = "<div class='selectpick_div_box' onselectstart='return false;'><div class='selectpick_div selectpick_div_" + elem_id + "'  id='selectpick_" + elem_id + "'><span id='selectpick_span_" + elem_id + "'></span><span class='selectpick_icon' id='selectpick_icon_" + elem_id + "'></span></div><div class='selectpick_options selectpick_options_" + elem_id + "'></div></div>";
            $(_selectBody).appendTo(settings.container);
            $(obj).addClass("select_hide");
            $(".selectpick_div_" + elem_id).css({"height": settings.height, "width": settings.width});
            $(".selectpick_div_" + elem_id + " span").first().text($(obj).find("option:selected").text());
            if (settings.disabled) {
                $(".selectpick_div_" + elem_id).addClass("selectpick_no_select");
                return;
            }
            $(".selectpick_div_" + elem_id + ",#selectpick_span_" + elem_id + ",#selectpick_options_" + elem_id + "").bind("click", function (event) {
                var selected_text = $(".selectpick_div_" + elem_id + " span").first().text();
                event.stopPropagation();
                if ($(".selectpick_ul_" + elem_id + " li").length > 0) {
                    $(".selectpick_options_" + elem_id).empty().hide();
                    return;
                } else {
                    $(".selectpick_options").hide();
                    $(".selectpick_options_" + elem_id).show();
                    $(".selectpick_options ul li").remove();
                    var ul = "<ul class='selectpick_ul_" + elem_id + "'>";
                    $(obj).children("option").each(function () {
                        if ($(this).text() == selected_text) {
                            ul += "<li class='selectpick_options_selected' style='height:" + (settings.height - 3) + "px; line-height:" + (settings.height - 3) + "px;'><label style='display:none;'>" + $(this).val() + "</label><label>" + $(this).text() + "</label></li>";
                        } else {
                            ul += "<li style='height:" + (settings.height - 3) + "px; line-height:" + (settings.height - 3) + "px;'><label style='display:none;'>" + $(this).val() + "</label><label>" + $(this).text() + "</label></li>";
                        }
                    });
                    ul += "</ul>";
                    $(".selectpick_options_" + elem_id).css({
                        "width": settings.width + 5,
                        "left": 0,
                        "top": settings.height
                    }).append(ul).show();
                    $(".selectpick_ul_" + elem_id + " li").bind("click", function () {
                        $(".selectpick_div_" + elem_id + " span").first().text($(this).children("label").first().next().text());
                        $(".selectpick_options_" + elem_id).empty().hide();
                        $(obj).val($(this).children("label").first().text());
                        if (settings.onSelect != undefined && settings.onSelect != "" && typeof settings.onSelect == "function") {
                            settings.onSelect($(this).children("label").first().text(), $(this).children("label").first().next().text());
                        }
                    });
                }
            });
            $(document).bind("click", function (event) {
                var e = event || window.event;
                var elem = e.srcElement || e.target;
                if (elem.id == "selectpick_" + elem_id || elem.id == "selectpick_icon_" + elem_id || elem.id == "selectpick_span_" + elem_id) {
                    return;
                } else {
                    $(".selectpick_options_" + elem_id).empty().hide();
                }
            });
        });
    }
})($, window, document);