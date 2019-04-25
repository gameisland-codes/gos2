function openPreregisterModal () {
	var notificationIsChecked = $('#preRegPram1').prop('checked') == true ? '1' : '0';
	var myappIsChecked = $('#preRegPram2').prop('checked') == true ? '1' : '0';

	$.ajax({
		type: 'GET',
		dataType: 'json',
		url: "https://games.dmm.com/detail/api/v1/emulator-pre-registration/ajax-create-token/?title_id=gos2",
        xhrFields: {
            withCredentials: true
        },
        crossDomain: true,

        success: function(resp) {
        	var params = 'csrf_token=' + resp.csrf_token
        		+ '&title_id=gos2'
        		+ '&success_url=http://dmg.gos2.jp/preregister/complate'
        		+ '&already_url=http://dmg.gos2.jp/preregister/duplicate'
        		+ '&error_url=http://dmg.gos2.jp/preregister/error'
        		+ '&notification=' + notificationIsChecked
        		+ '&myapp=' + myappIsChecked;
        	window.location.replace("https://games.dmm.com/detail/api/v1/emulator-pre-registration/?" + params);
        	//console.log(encodeURI("https://games.dmm.com/detail/api/v1/emulator-pre-registration/?" + params));
        },

        error:function(data){
            //alert("error");
        }

    });
}

$(function(){
    $('.dmm_gamestart_btn, .game_start_btn').on('click', function(){
        layer.closeAll();
        layer.open({
            type: 2,
            title: false,
            skin: 'layui-layer-none',
            area: ['600px', '320px'],
            closeBtn: true,
            shadeClose: true,
            content: '/gamestart',
        });
    });
});