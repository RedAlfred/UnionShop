##用户地址 - 删除
<br>

#### 接口功能
> 删除用户地址

#### URL
> [https://api.sample.com/user/v1/address/del](https://api.sample.com/user/v1/address/del)

#### 请求方式
> POST

#### 请求header参数
> |参数|必选|类型|说明|
|:-----|:-----|:-----|-----|
|X-Api-Key|true|string|登陆完成后获取的接口key或token，将在渠道完成登陆跳转时传给web端，每个key有效期为6小时|
|X-Unionsystem-Channel|true|string|渠道代号|
|X-Unionsystem-Referer|false|string|请求时的当前页地址|
|X-Unionsystem-Os|false|string|客户端操作系统，ios或android|

#### 请求body参数
> |参数|必选|类型|说明|
|:-----|:-----|:-----|-----|
|id|true|int|地址ID|

#### 响应header参数
> |参数|类型|说明|
|:-----|:-----|-----|
|X-Unionsystem-Script|string|待执行脚本|

#### 接口示例
``` javascript
<script type="text/javascript">
    $.ajax({
        url: "https://api.sample.com/user/v1/address/del",
        headers: {
            "X-Api-Key": "c3f73e5df26e1740ae71e64cfa779d27",
            "X-Unionsystem-Channel": "channel1",
            "X-Unionsystem-Referer": "https://app.sample.com/module/comtroller/action",
            "X-Unionsystem-Os": "ios",
        },
        data: {
            "id": 15,
        },
        type: "POST",
        success: function () {
            alert("删除地址成功");
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            if (errorThrown) {
                alert(decodeURI(errorThrown));
            } else {
                alert("未知错误");
            }
        },
        complete: function(XMLHttpRequest){
            var script = XMLHttpRequest.getResponseHeader('X-Unionsystem-Script');
            if (script) {
                script = $(script).html();
                if (window.execScript) {
                    window.execScript(script);
                } else {
                    window.eval(script);
                }
            }
        }
    });
</script>