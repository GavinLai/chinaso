<!--
//xmlhttp��xmldom����
var GxXHTTP = null;
var GxXDOM = null;
var GxContainer = null;
var GxShowError = false;
var GxShowWait = false;
var GxErrCon = "";
var GxErrDisplay = "��������ʧ��";
var GxWaitDisplay = "������������...";

//��ȡָ��ID��Ԫ��

function __(id){
    return document.getElementById(id);
}

//gcontainer �Ǳ���������ɵ����ݵ�����
//mShowError �Ƿ���ʾ������Ϣ
//GxShowWait �Ƿ���ʾ�ȴ���Ϣ
//mErrCon ����������ʲô�ַ�����Ϊ����
//mErrDisplay ��������ʱ��ʾ����Ϣ
//mWaitDisplay �ȴ�ʱ��ʾ��Ϣ
//Ĭ�ϵ��� Gx_Ajax('divid',false,false,'','','')

function Gx_Ajax(gcontainer,mShowError,mShowWait,mErrCon,mErrDisplay,mWaitDisplay){

    GxContainer = gcontainer;
    GxShowError = mShowError;
    GxShowWait = mShowWait;
    if(mErrCon!="") GxErrCon = mErrCon;
    if(mErrDisplay!="") GxErrDisplay = mErrDisplay;
    if(mErrDisplay=="x") GxErrDisplay = "";
    if(mWaitDisplay!="") GxWaitDisplay = mWaitDisplay;


    //post��get�������ݵļ�ֵ��
    this.keys = Array();
    this.values = Array();
    this.keyCount = -1;
    this.sendlang = 'gb2312';

    //����ͷ����
    this.rtype = 'text';

    //��ʼ��xmlhttp
    //IE6��IE5
    if(window.ActiveXObject){
        try { GxXHTTP = new ActiveXObject("Msxml2.XMLHTTP");}catch (e){ }
        if (GxXHTTP == null) try { GxXHTTP = new ActiveXObject("Microsoft.XMLHTTP");} catch (e) { }
    }
    else{
        GxXHTTP = new XMLHttpRequest();
    }

    //����һ��POST��GET��ֵ��
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

    //����һ��POST��GET��ֵ��
    this.AddKeyUtf8 = function(skey,svalue) {
        this.keyCount++;
        this.keys[this.keyCount] = skey;
        svalue = svalue+'';
        if(svalue != '') svalue = svalue.replace(/\+/g,'$#$');
        this.values[this.keyCount] = encodeURI(svalue);
    };

    //����һ��Http����ͷ��ֵ��
    this.AddHead = function(skey,svalue) {
        this.rkeyCount++;
        this.rkeys[this.rkeyCount] = skey;
        this.rvalues[this.rkeyCount] = svalue;
    };

    //�����ǰ����Ĺ�ϣ�����
    this.ClearSet = function(){
        this.keyCount = -1;
        this.keys = Array();
        this.values = Array();
        this.rkeyCount = -1;
        this.rkeys = Array();
        this.rvalues = Array();
    };


    GxXHTTP.onreadystatechange = function(){
        //��IE6�в�����ϻ��첽ģʽ����ִ������¼���
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

    //������ģʽ��״̬
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

    //����http����ͷ
    this.SendHead = function(){
        //�����û������趨������ͷ
        if(this.rkeyCount!=-1){ 
            for(var i = 0;i<=this.rkeyCount;i++){
                GxXHTTP.setRequestHeader(this.rkeys[i],this.rvalues[i]);
            }
        }
        ��if(this.rtype=='binary'){
        ��GxXHTTP.setRequestHeader("Content-Type","multipart/form-data");
    }else{
        GxXHTTP.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    }
};

//��Post��ʽ��������
this.SendPost = function(purl){
    var pdata = "";
    var i=0;
    this.state = 0;
    GxXHTTP.open("POST", purl, true);
    this.SendHead();
    //post����
    if(this.keyCount!=-1){
        for(;i<=this.keyCount;i++){
            if(pdata=="") pdata = this.keys[i]+'='+this.values[i];
            else pdata += "&"+this.keys[i]+'='+this.values[i];
        }
    }
    GxXHTTP.send(pdata);
};

//��GET��ʽ��������
this.SendGet = function(purl){
    var gkey = "";
    var i=0;
    this.state = 0;
    //get����
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

//��GET��ʽ�������ݣ�����ģʽ
this.Send_Get = function(purl){
    var gkey = "";
    var i=0;
    this.state = 0;
    //get����
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
    //firefox��ֱ�Ӽ��XHTTP״̬
    this.BarrageStat();
};

//��Post��ʽ��������
this.Send_Post = function(purl){
    var pdata = "";
    var i=0;
    this.state = 0;
    GxXHTTP.open("POST", purl, false);
    this.SendHead();
    //post����
    if(this.keyCount!=-1){
        for(;i<=this.keyCount;i++){
            if(pdata=="") pdata = this.keys[i]+'='+this.values[i];
            else pdata += "&"+this.keys[i]+'='+this.values[i];
        }
    }
    GxXHTTP.send(pdata);
    //firefox��ֱ�Ӽ��XHTTP״̬
    this.BarrageStat();
};


} // End Class GxAjax

//��ʼ��xmldom
function InitXDom(){
    if(GxXDOM!=null) return;
    var obj = null;
    // Gecko��Mozilla��Firefox
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



//��дcookie����
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
    document.cookie = c_name + "=" +escape(value) + ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString()); //ʹ���õ���Чʱ����ȷ������toGMTString()
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
-->