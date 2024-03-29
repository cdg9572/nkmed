		var timer = 3 * 60;
		var phone1,phone2,phone3,phoneid,con_inputid,countno,confirmno,confirmtext;

		fn.id_search_init = function(wrap){
			wrap.find('.entry').show();
			wrap.find('.result').hide();
			wrap.find('.btn-next').off().on('click',function(){
				var iname  = $("#i_name").val();
				var phone1 = $.trim($("#i_phone1").html());
				var phone2 = $.trim($("#i_phone2").val());
				var phone3 = $.trim($("#i_phone3").val());
				var iphone = phone1+"-"+phone2+"-"+phone3;				
				
				if($("#i_name").val() == ""){
					warningBox("이름을 입력하세요.");
					return false;
				}
				
				if($("#confirm_no").val() != "Y"){
					warningBox("핸드폰 인증을 받으세요");
					return false;
				}		
				
				iname = decodeURIComponent(iname);			
				
				$.ajax({
					type: "POST",
					url: "/con/ajax/find_ajax_info/",
					data: "mode=id&name="+iname+"&phone="+iphone,
					dataType: "text",
					beforeSend: function() {
						//wrapWindowByMask();
						$('#ajax_load').html('<img src="/images/ajax-loader.gif">');
					},  			
					success: function(data) {
						$('#ajax_load').empty();
						if($.trim(data) == "false") {
							warningBox("회원정보를 찾을수 없습니다.");
							return false;
						}else{
							$("#result_id").empty().html(data);
							wrap.find('.entry').hide();
							wrap.find('.result').show();							
						}
						
					},
					error: function(xhr, status, error) { alert(error); }
				});							
				
				return false;
			});
		};
		fn.pw_search_init = function(wrap){
			wrap.find('.entry').show();
			wrap.find('.result').hide();
			wrap.find('.btn-next').off().on('click',function(){
				var pname  = $("#p_name").val();
				var p_id   = $("#p_id").val();
				var phone1 = $.trim($("#p_phone1").html());
				var phone2 = $.trim($("#p_phone2").val());
				var phone3 = $.trim($("#p_phone3").val());
				var pphone = phone1+"-"+phone2+"-"+phone3;				
				
				if(pname == ""){
					warningBox("이름을 입력하세요.");
					return false;
				}

				if(p_id == ""){
					warningBox("아이디를 입력하세요.");
					return false;
				}
				
				if($("#p_confirm_no").val() != "Y"){
					warningBox("핸드폰 인증을 받으세요");
					return false;
				}									
				pname = decodeURIComponent(pname);
				$.ajax({
					type: "POST",
					url: "/con/ajax/find_ajax_info/",
					data: "mode=pw&name="+pname+"&phone="+pphone+"&id="+p_id,
					dataType: "text",
					beforeSend: function() {
						//wrapWindowByMask();
						$('#ajax_load').html('<img src="/images/ajax-loader.gif">');
					},  			
					success: function(data) {
						$('#ajax_load').empty();
						if($.trim(data) == "false") {
							warningBox("회원정보를 찾을수 없습니다.");
							return false;
						}else{
							wrap.find('.entry').hide();
							wrap.find('.result').show();						
						}
						
					},
					error: function(xhr, status, error) { alert(error); }
				});						
			
			});
		};
		
		function sms_confirm(gubun,m){
			if(m == "re") {
				clearInterval(interval);
				timer = 3 * 60;
			}			
			
			if(gubun == "i"){
				phoneid 	= "i_phone";
				con_inputid = "confirmNo_p";
				countno		= "confirmNo";
				confirmno   = "confirm_no";
				confirmtext = "confirm_test";
			}else if(gubun == "p") {
				phoneid 	= "p_phone";		
				con_inputid = "p_confirmNo_p";					
				countno		= "p_confirmNo";
				confirmno   = "p_confirm_no";
				confirmtext = "p_confirm_test";								
			}	
			var iname  = $("#i_name").val();
			phone1 = $.trim($("#"+phoneid+"1").html());
			phone2 = $.trim($("#"+phoneid+"2").val());
			phone3 = $.trim($("#"+phoneid+"3").val());
			if(phone2.length < 3 || phone3.length < 3) {
					warningBox("핸드폰 번호를 정확하게 입력해 주세요");
					return false;
			}
			var phone = phone1+"-"+phone2+"-"+phone3;
			
			$("#"+con_inputid).prop('disabled',false);
			$('#'+countno).empty();
			
			
			$.ajax({
				type: "POST",
				url: "/con/ajax/find_ajax_info/",
				data: "mode=id&name="+iname+"&phone="+phone,
				dataType: "text",
				beforeSend: function() {
					//wrapWindowByMask();
					$('#ajax_load').html('<img src="/images/ajax-loader.gif">');
				},  			
				success: function(data) {
					$('#ajax_load').empty();
					if($.trim(data) == "false") {
						warningBox("회원정보를 찾을수 없습니다.");
						return false;
					}else{
						$.ajax({
							type: "POST",
							url: "/con/ajax/sms_ajax_send/",
							data: "phone="+phone,
							dataType: "text",
							beforeSend: function() {
								//wrapWindowByMask();
								$('#ajax_load').html('<img src="/path/images/ajax-loader.gif">');
							},  			
							success: function(data) {
								$('#ajax_load').empty();
								if($.trim(data) == "false") {
									warningBox("발송에 실패 했습니다. 잠시후에 다시 시도해 주세요");
									return false;
								}else{
									successBox(phone + "번호로 인증번호를 발송하였습니다. 3분이내에 입력해주세요");
									$(".count-time").show();
									$("#"+confirmno).val(data);
									$("#"+confirmtext).empty().html('<a href="javascript:void(0)" class="btn-entry" onClick="sms_confirm(\'gubun\',\'re\')">재전송</a>');
									interval = setInterval(timer_update, 1000);
								}
							},
							error: function(xhr, status, error) { 
								$('#ajax_load').empty();
								alert(error); 
							}
						});				
					}
					
				}			
			});
		};
		
		function sconfirm(){
			var c_no = $.trim($("#"+confirmno).val());
			var r_no = $.trim($("#"+con_inputid).val());
			if(c_no != r_no) {
				warningBox("인증번호가 다릅니다.");
				return false;
			}
			successBox("정상적으로 인증 되셨습니다.");
			$("#"+con_inputid).attr("placeholder","인증 완료");
			$('#'+con_inputid).val('');
			$('#'+countno).empty();
			$('#'+confirmno).val('Y');
			clearInterval(interval)
		}
		

		function timer_update(interval){
			
			var minutes, seconds;
			timer = parseInt(timer);
			minutes = parseInt(timer / 60 % 60, 10);
			seconds = parseInt(timer % 60, 10);
			
			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;
			
			$('#'+countno).html(minutes+":"+seconds);

			if (--timer < 0) {
				timer = 0;
 				$("#"+con_inputid).attr("placeholder","요청하신 시간이 만료되었습니다.");
				/*$("#"+con_inputid).prop('disabled',true);
				$("#"+confirmtext).empty().html('<a href="javascript:void(0)" class="btn-entry" onClick="sms_confirm(\'gubun\');">인증번호 발송</a>');
				window.clearInterval(interval);
				*/
				
				$("#"+confirmno).val("N");
				$("#"+confirmtext).empty().html('<a href="javascript:void(0)" class="btn-entry" onClick="sms_confirm(\'gubun\',\'re\')">재전송</a>');		
				
			}
		}
		
		$("#confirmNo_p").focus(function(){
			$("#confirm_test").empty().html('<a href="javascript:void(0)" class="btn-entry" onClick="sconfirm()">확인</a>');
		});		