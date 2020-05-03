
<script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/localResizeIMG-master/dist/lrz.all.bundle.js"></script>
<link href="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/webuploader/webuploader.css" type="text/css" rel="stylesheet"/>

<h2>Image Compress</h2>


<div class="container">

    <form >
        <div class="image-uploader-item">
            <span class="btn btn-danger" id="uploadImage">

                Upload
            </span>
            <!--展示图片-->
            <img id="show_uploadImage" src="" alt="" width="240">
            <div>
                <label for="">原图大小: <label class="label label-danger" id="primary_size">0</label></label>
            </div>
            <div>
                <label for="">压缩后大小：<label class="label label-danger" id="compress_size">0</label></label>
            </div>
            <div>
                <label for="">压缩率：<label class="label label-danger" id="compress_rate">0</label></label>
            </div>
        </div>
    </form>


</div>

<script>

    function webuploader2upyun(upload_id, default_dir) {
        var _btn = $("#" + upload_id);
        var _div = (_btn).closest(".image-uploader-item");

        _btn.addClass("btn btn-default");
        var _file_item = $('<input type="file" class="file-item" style="display: none">');
        _div.append(_file_item);
        _btn.on("click", function () {
            _file_item.click();
        });

        var _upload_execute = function(data){
            //_div.waiting();
            yo.loadData({
                _c: "root",
                _m: "upload2UpYun",
                param: data,
                is_formData: true,
                ajax: {
                    cache: false,
                    processData: false,
                    contentType: false,
                    dataType: "JSON"
                },
                callback: function (_o) {
                    //_div.unmask();
                    if (!_o.STS) return;
                    var _img_path = _o.DATA.image_path;
                    var _full_path = _o.DATA.full_path;

                    _div.find('input[name=' + upload_id + ']').val(_img_path);
                    _div.find('input[id=txt_' + upload_id + ']').val(_img_path);
                    _div.find('#show_' + upload_id).attr('src', _full_path).show();
                    if (_div.find('.show_' + upload_id + '_div').length > 0) {
                        _div.find('.show_' + upload_id + '_div').css('display', 'block');
                    }
                }
            });
        };

        _file_item.on("change", function () {

            var _data = new FormData();
            _data.append("file_key", "file_new_item");
            _data.append("file_dir", default_dir);
            _data.append('file_new_item', _file_item[0].files[0]);

            // 图片大于3M就压缩上传
            var _file_size = _file_item[0].files[0].size;
            console.log(_file_size);
            if( _file_size > 0 ){  // _file_size > 0 && _file_size > 3*1024*1024
                // 测试图片压缩

                // 这是个异步方式，一定要小心顺序逻辑
                lrz(_file_item[0].files[0], {
                    width: 1200,  // 最大宽度
                    //height: false,  // 最大高度，不设置自动匹配
                    quality: 0.9,  // 压缩质量 0-1
                    fieldName: 'file_new_item'  // 后端接收的名字，默认是file
                }).then(function (rst) {
                    console.log(rst);
                    $('#show_uploadImage').attr('src', rst.base64);
                    $('#compress_size').html(rst.fileLen);
                    $('#compress_rate').html(parseFloat(rst.fileLen / _file_item[0].files[0].size * 100).toFixed(2) + '%');
                    // 压缩成功后，重置上传数据
                    //console.log(_data);
                    //console.log(_data.get('file_new_item'));

                    _data = rst.formData;
                    //console.log(rst.file);
                    _data.append("file_key", "file_new_item");
                    _data.append("file_dir", default_dir);
                    //_data.append('file_new_item', rst.file);
                    //console.log(_data.get('file_new_item'));
                    console.log('压缩后的图片：');
                    console.log(rst.formData.get('file_new_item'));
                    //_upload_execute(_data);

                }).catch(function (err) {
                    alert(err);

                }).always(function () {
                    // 不管成功失败都会调用
                    // 在这里调用的目的是不管压缩图片是否成功，都执行图片的上传逻辑
                    console.log(_data.get('file_new_item'));
                    _upload_execute(_data);
                    $('#primary_size').html(_file_item[0].files[0].size);
                });

            }else{

                //console.log(_file_item.val());
                //console.log(_data);
                //console.log(_file_item[0].files[0]);

                console.log('上传时的图片：');
                console.log(_data.get('file_new_item'));
                //_div.waiting();
                _upload_execute(_data);
            }




        });
    }

    webuploader2upyun('uploadImage','test');
</script>