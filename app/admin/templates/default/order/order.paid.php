<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <h3>订单列表</h3>
            <ul class="tab-base">
                <li><a class="current"><span>List</span></a></li>
            </ul>
        </div>
    </div>
    <div class="container" style="width: 99%">
        <div class="business-condition">

        </div>

        <div class="business-content">

            <div class="business-list">

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        btn_search_onclick(1,20);
    });

    function btn_search_onclick(_pageNumber, _pageSize) {
        if (!_pageNumber) _pageNumber = $(".business-content").data('pageNumber');
        if (_pageSize === undefined ) _pageSize = $(".business-content").data('pageSize');
        if (!_pageNumber) _pageNumber = 1;
        if (!_pageSize) _pageSize = 0;
        $(".business-content").data("pageNumber", _pageNumber);
        $(".business-content").data("pageSize", _pageSize);

        var _values = $('#frm_search_condition').getValues();
        _values.pageNumber = _pageNumber;
        _values.pageSize = _pageSize;
        _values.is_paid = 1;

        yo.dynamicTplOfAdmin({
            tpl: "order/order.list",
            dynamic: {
                api: "admin_order",
                method: "getOrderList",
                param: _values
            },
            callback: function (_tpl) {
                $(".business-list").html(_tpl);
            }
        });
    }
</script>
