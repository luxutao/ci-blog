$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    var E = window.wangEditor
    var editor = new E('#editor')
    var $text1 = $('#editor_html')
    editor.customConfig.onchange = function (html) {
        // 监控变化，同步更新到 textarea
        $text1.val(html)
    }
    editor.create()
    // 初始化 textarea 的值
    $text1.val(editor.txt.html())
    if (document.location.href.indexOf('article/edit') != -1) {
        $.ajax({
            type: "get",
            url: "/article/get",
            data: {id:$id},
            dataType: "json",
            success: function (response) {
                $('input[name="title"]').val(response.a_result[0].title)
                $('input[name="subtitle"]').val(response.a_result[0].subtitle)
                if (response.a_result[0].status == "0") {
                    $('select[name="status"]').val('false')
                }else{
                    $('select[name="status"]').val('true')
                }
                editor.txt.html(response.a_result[0].content)
                var $tids = []
                for (var pk in response.t_result) {
                    console.log(response.t_result[pk])
                    $tids.push(response.t_result[pk].id)
                }
                console.log($tids)
                $('.js-example-basic-multiple').val($tids).trigger('change')
                console.log(response)

            }
        });
    }else if (document.location.href.indexOf('tag/edit') != -1) {
        $.ajax({
            type: "get",
            url: "/tag/get",
            data: {id:$id},
            dataType: "json",
            success: function (response) {
                $('input[name="show_name"]').val(response[0].show_name)
                $('input[name="value_name"]').val(response[0].value_name)
                $('textarea[name="desc"]').val(response[0].desc)
                console.log(response)
            }
        });
    }
    
})

function loading() {
    var $pagedata = $('.post-preview').length
    if ($pagedata < 10) {
        alert('没有更多数据')
        return
    }else if ($pagedata >= 10) {
        $.ajax({
            type: "get",
            url: "/article/loading",
            data: {limit:0,offset:$pagedata + 10},
            dataType: "json",
            success: function (response) {
                for (var pk in response) {
                    var string = '<div class="post-preview">' + 
                    '<a href="/view/detail?id=' + response[pk].id + '">' + 
                        '<h4 class="post-title">' +
                            response[pk].title + 
                        '</h4>' + 
                        '<h5 class="post-subtitle">' + 
                            response[pk].subtitle + 
                        '</h5>' + 
                    '</a>' + 
                    '<div class="post-content-preview">' +
                        response[pk].content.substring(0,100) +
                    '</div>' + 
                    '<p class="post-meta">Posted by' +
                        '<a href="">luxutaoooo</a> on ' + 
                        response[pk].create_time + 
                '</div>' +
                '<hr>'
                $('.clearfix.text-center').prev().after(string)
                }
            }
        });
    }

}