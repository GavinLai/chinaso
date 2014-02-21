
//xmlhttp和xmldom对象
var GxXHTTP = null;
var GxXDOM = null;
var GxContainer = null;
var GxShowError = false;
var GxShowWait = false;
var GxErrCon = "";
var GxErrDisplay = "下载数据失败";
var GxWaitDisplay = "正在下载数据...";

//获取指定ID的元素

function __(id){
    return document.getElementById(id);
}

//gcontainer 是保存下载完成的内容的容器
//mShowError 是否提示错误信息
//GxShowWait 是否提示等待信息
//mErrCon 服务器返回什么字符串视为错误
//mErrDisplay 发生错误时显示的信息
//mWaitDisplay 等待时提示信息
//默认调用 Gx_Ajax('divid',false,false,'','','')

function Gx_Ajax(gcontainer,mShowError,mShowWait,mErrCon,mErrDisplay,mWaitDisplay){

    GxContainer = gcontainer;
    GxShowError = mShowError;
    GxShowWait = mShowWait;
    if(mErrCon!="") GxErrCon = mErrCon;
    if(mErrDisplay!="") GxErrDisplay = mErrDisplay;
    if(mErrDisplay=="x") GxErrDisplay = "";
    if(mWaitDisplay!="") GxWaitDisplay = mWaitDisplay;


    //post或get发送数据的键值对
    this.keys = Array();
    this.values = Array();
    this.keyCount = -1;
    this.sendlang = 'gb2312';

    //请求头类型
    this.rtype = 'text';

    //初始化xmlhttp
    //IE6、IE5
    if(window.ActiveXObject){
        try { GxXHTTP = new ActiveXObject("Msxml2.XMLHTTP");}catch (e){ }
        if (GxXHTTP == null) try { GxXHTTP = new ActiveXObject("Microsoft.XMLHTTP");} catch (e) { }
    }
    else{
        GxXHTTP = new XMLHttpRequest();
    }

    //增加一个POST或GET键值对
    this.AddKeyN = function(skey,svalue){
        if(this.sendlang=='utf-8') this.AddKeyUtf8(skey, svalue);
        else this.AddKey(skey, svalue);
    };
    
    this.AddKey = function(skey,svalue) {
        this.keyCount++;
        this.keys[this.keyCount] = skey;
        svalue = svalue+'';
        if(svalue != '') svalue = svalue.replace(/\+/g,'$#$');
        this.values[this.keyCount] = escape(svalue);
    };

    //增加一个POST或GET键值对
    this.AddKeyUtf8 = function(skey,svalue) {
        this.keyCount++;
        this.keys[this.keyCount] = skey;
        svalue = svalue+'';
        if(svalue != '') svalue = svalue.replace(/\+/g,'$#$');
        this.values[this.keyCount] = encodeURI(svalue);
    };

    //增加一个Http请求头键值对
    this.AddHead = function(skey,svalue) {
        this.rkeyCount++;
        this.rkeys[this.rkeyCount] = skey;
        this.rvalues[this.rkeyCount] = svalue;
    };

    //清除当前对象的哈希表参数
    this.ClearSet = function(){
        this.keyCount = -1;
        this.keys = Array();
        this.values = Array();
        this.rkeyCount = -1;
        this.rkeys = Array();
        this.rvalues = Array();
    };


    GxXHTTP.onreadystatechange = function(){
        //在IE6中不管阻断或异步模式都会执行这个事件的
        if(GxXHTTP.readyState == 4){
            if(GxXHTTP.status == 200){
                if(GxXHTTP.responseText!=GxErrCon){
                    GxContainer.innerHTML = GxXHTTP.responseText;
                }
                else{
                    if(GxShowError) GxContainer.innerHTML = GxErrDisplay;
                }
                GxXHTTP = null;
            }
            else { if(GxShowError) GxContainer.innerHTML = GxErrDisplay; }
        }
        else { if(GxShowWait) GxContainer.innerHTML = GxWaitDisplay; }
    };

    //检测阻断模式的状态
    this.BarrageStat = function(){
        if(GxXHTTP==null) return;
        if(typeof(GxXHTTP.status)!=undefined && GxXHTTP.status == 200){
            if(GxXHTTP.responseText!=GxErrCon){
                GxContainer.innerHTML = GxXHTTP.responseText;
            }
            else{
                if(GxShowError) GxContainer.innerHTML = GxErrDisplay;
            }
        }
    };

    //发送http请求头
    this.SendHead = function(){
        //发送用户自行设定的请求头
        if(this.rkeyCount!=-1){ 
            for(var i = 0;i<=this.rkeyCount;i++){
                GxXHTTP.setRequestHeader(this.rkeys[i],this.rvalues[i]);
            }
        }
        　if(this.rtype=='binary'){
        　GxXHTTP.setRequestHeader("Content-Type","multipart/form-data");
    }else{
        GxXHTTP.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    }
};

//用Post方式发送数据
this.SendPost = function(purl){
    var pdata = "";
    var i=0;
    this.state = 0;
    GxXHTTP.open("POST", purl, true);
    this.SendHead();
    //post数据
    if(this.keyCount!=-1){
        for(;i<=this.keyCount;i++){
            if(pdata=="") pdata = this.keys[i]+'='+this.values[i];
            else pdata += "&"+this.keys[i]+'='+this.values[i];
        }
    }
    GxXHTTP.send(pdata);
};

//用GET方式发送数据
this.SendGet = function(purl){
    var gkey = "";
    var i=0;
    this.state = 0;
    //get参数
    if(this.keyCount!=-1){ 
        for(;i<=this.keyCount;i++){
            if(gkey=="") gkey = this.keys[i]+'='+this.values[i];
            else gkey += "&"+this.keys[i]+'='+this.values[i];
        }
        if(purl.indexOf('?')==-1) purl = purl + '?' + gkey;
        else  purl = purl + '&' + gkey;
    }
    GxXHTTP.open("GET", purl, true);
    this.SendHead();
    GxXHTTP.send(null);
};

//用GET方式发送数据，阻塞模式
this.Send_Get = function(purl){
    var gkey = "";
    var i=0;
    this.state = 0;
    //get参数
    if(this.keyCount!=-1){ 
        for(;i<=this.keyCount;i++){
            if(gkey=="") gkey = this.keys[i]+'='+this.values[i];
            else gkey += "&"+this.keys[i]+'='+this.values[i];
        }
        if(purl.indexOf('?')==-1) purl = purl + '?' + gkey;
        else  purl = purl + '&' + gkey;
    }
    GxXHTTP.open("GET", purl, false);
    this.SendHead();
    GxXHTTP.send(null);
    //firefox中直接检测XHTTP状态
    this.BarrageStat();
};

//用Post方式发送数据
this.Send_Post = function(purl){
    var pdata = "";
    var i=0;
    this.state = 0;
    GxXHTTP.open("POST", purl, false);
    this.SendHead();
    //post数据
    if(this.keyCount!=-1){
        for(;i<=this.keyCount;i++){
            if(pdata=="") pdata = this.keys[i]+'='+this.values[i];
            else pdata += "&"+this.keys[i]+'='+this.values[i];
        }
    }
    GxXHTTP.send(pdata);
    //firefox中直接检测XHTTP状态
    this.BarrageStat();
};


} // End Class GxAjax

//初始化xmldom
function InitXDom(){
    if(GxXDOM!=null) return;
    var obj = null;
    // Gecko、Mozilla、Firefox
    if (typeof(DOMParser) != "undefined"){ 
        var parser = new DOMParser();
        obj = parser.parseFromString(xmlText, "text/xml");
    }
    // IE
    else{ 
        try { obj = new ActiveXObject("MSXML2.DOMDocument");} catch (e) { }
        if (obj == null) try { obj = new ActiveXObject("Microsoft.XMLDOM"); } catch (e) { }
    }
    GxXDOM = obj;
};



//读写cookie函数
function GetCookie(c_name){
    if (document.cookie.length > 0){
        c_start = document.cookie.indexOf(c_name + "=")
        if (c_start != -1){
            c_start = c_start + c_name.length + 1;
            c_end   = document.cookie.indexOf(";",c_start);
            if (c_end == -1){
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start,c_end));
        }
    }
    return null;
}

function SetCookie(c_name,value,expiredays){
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + expiredays);
    document.cookie = c_name + "=" +escape(value) + ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString()); //使设置的有效时间正确。增加toGMTString()
}
function URLdecode(str) {
        var ret = "";
        for(var i=0;i<str.length;i++) {
                var chr = str.charAt(i);
                if(chr == "+") {
                        ret += " ";
                }else if(chr=="%") {
                        var asc = str.substring(i+1,i+3);
                        if(parseInt("0x"+asc)>0x7f) {
                                ret += decodeURI("%"+ str.substring(i+1,i+9));
                                i += 8;
                        }else {
                                ret += String.fromCharCode(parseInt("0x"+asc));
                                i += 2;
                        }
                }else {
                        ret += chr;
                }
        }
        return ret;
}
function getOffsetLeft(elm){
	var mOffsetLeft=elm.offsetLeft;
	var mOffsetParent = elm.offsetParent; 
	while(mOffsetParent){
		mOffsetLeft += mOffsetParent.offsetLeft;
		mOffsetParent = mOffsetParent.offsetParent;
	}
	return mOffsetLeft;
}
function getLeft(obj){
    var offset=obj.offsetLeft;
    if(obj.offsetParent!=null)  offset +=getLeft(obj.offsetParent);
    return offset;
};
