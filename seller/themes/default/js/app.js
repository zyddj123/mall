let token = $("meta[name=csrf-token]").attr('content');
if (token) {
    $.ajaxSettings.headers = { 'CSRF-TOKEN': token };
}else{
    throw new Error('没有设置csrf-token');
}


