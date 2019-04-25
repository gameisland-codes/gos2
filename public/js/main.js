var __charInfo = {
	 1:{id: 1,attr:1,introPage:1,name:'ラビ',introText:['トーア（オランド）と共に部隊に新たに配属された副官。<br>任務においてオペレーター役をこなし、任務中のあらゆる場所でトーアたちを応援サポートしている。']},
	 2:{id: 2,attr:2,introPage:2,name:'シェリー',introText:['先天的に感知能力を持つ、偵察を始め、索敵などを担当する。<br>科学的に解明されないレベルでの能力であり、保護命令が出ているが、稀に戦場に現れる。','能力の関係か、俗世離れしており無知。<br>情報の善悪を見定めることができず、騙されやすいのでAIに頼ることで日々生活している。']},
	 3:{id: 3,attr:2,introPage:2,name:'エミ',introText:['少女でありながら機械工学において優秀な実績をもつ現状世界一の科学者でもある。<br>実際に軍の施設や作戦で用いられる兵器、設備は彼女の開発製品であるものがほとんど。自らの作り出した決戦兵器を従え戦場を蹂躙する。','およそ年頃らしくない振る舞いで下を見下す傾向にある。<br>日本支部からやってきた理由はシスネの扱う[RRアイギス]のためでもある。']},
	 4:{id: 4,attr:2,introPage:1,name:'アン',introText:['新規部隊の一番下っ端として配属された少女。記憶喪失を患っており、ここ最近までのデータを持たない。潜在能力は高いのだがその扱い方を知る由はないようだ。<br>気弱ながらにも自らを奮い立たせるような気概をもつ。']},
	 5:{id: 5,attr:2,introPage:1,name:'マリー',introText:['前線で活躍中の女性兵。<br>美人で非常に優秀な兵士だが、それを鼻にかけない立ち居振る舞いが人気。<br>よく男性から告白をされ対処に困っている。']},
	 6:{id: 6,attr:3,introPage:1,name:'トーア',introText:['新規に配属された女性兵士。志願兵の一人。自宅がエイリアンの襲撃に巻き込まれ、家族を全て失った経緯から兵士となることを希望した。<br>復讐心からか上昇志向が極めて高い。']},
	 7:{id: 7,attr:3,introPage:1,name:'オランド',introText:['新規に配属された男性兵士。<br>学問を理由に徴兵制をのらりくらりかわしてきたが、ようやく観念した。真に世界を救おうとは考えておらず、場を盛り上げはするが実績がないため頼りなく思われている。']},
	 8:{id: 8,attr:3,introPage:2,name:'シリウス',introText:['ヴァルキリーシステムの実験体にして最高傑作。体の一部を機械化しておりおよそ人間離れした身体能力を持つため、銃撃が主体の戦いにおいて近接戦闘も可能。','またカロットという伝説のサイボーグ兵に救われ既に引退した彼の最強のスキルをインストールされている。<br>規律第一のアッシュとは事あるごとに対立している様が見られ、もはや風物詩と化している。']},
	 9:{id: 9,attr:3,introPage:2,name:'アッシュ',introText:['軍のエリートにして幹部。硝煙の女神とも称される。冷静に戦局を見極める判断能力と他に類を見ない射撃能力の高さが物語るように、前線においてはリーサルウェポンとも言われる。','軍規や作戦に則って行動をしないシリウスを扱いづらい存在として毛嫌いし、注意忠告を行うがあしらわれている。']},
	10:{id:10,attr:3,introPage:1,name:'カメリア',introText:['前線でバリバリ活躍中の女性兵。<br>暗くなりがちな前線基地での華として明るく振る舞っている節があるが、根も明るい。']},
	11:{id:11,attr:4,introPage:1,name:'ライナー',introText:['軍では珍しい既婚者の男性。<br>娘が一人おり、ホームで帰りを待つ妻子のため、絶対に死なないという強い覚悟を持っている。自分や仲間には厳しい意見も言うが、たまの休みは妻子のために使うマイホームパパでもある。']},
};
var __curCharLength=Object.keys(__charInfo).length;

$(initialize);

function initialize() {
	genChars();
	genCharSwiper();
	btnController();
	setScrollReveals();
	setScrollEvents();
	loadTwitterTimeLine();
}

function genChars(){
	var e='';
	for(var k in __charInfo){
		var info=__charInfo[k];
		e+='<div class="swiper-slide">'+
				'<div class="char_wrapper char_'+info.id+'">'+
					'<div class="voice_btns">'+
						'<div class="voice_btn_1"></div>'+
						'<div class="voice_btn_2"></div>'+
						'<div class="voice_btn_3"></div>'+
					'</div>'+
					'<div class="anim_char">'+
						'<div class="anim_char_wrapper">'+
							// '<div class="char_text"></div>'+
							'<div class="char"></div>'+
						'</div>'+
					'</div>'+
					'<div class="anim_char_label">'+
						'<div class="char_label"></div>'+
					'</div>'+
					'<div class="detail_bg_'+info.attr+'">'+
						'<div class="char_name"><img src="/images/chars/char_name_'+info.id+'.png"></div>'+
						'<div class="char_cv"><img src="/images/chars/cv_'+info.id+'.png"></div>'+
						genIntro(info.id,info.introPage,info.introText[0])+
					'</div>'+
				'</div>'+
			'</div>';
	}
	$('#character .swiper-wrapper').html(e);
}

function genIntro(charNum,pageCount,introText){
	var r='<div class="char_intro"><div class="char_intro_'+charNum+'">'+introText+'</div></div>';
	if (pageCount>1) {
		r+='<div class="char_intro_controller down" data-charnum="'+charNum+'" data-pagenum="1" data-arrowdir="down"></div>';
	}
	return r;
}

function charIntroController () {
	var self = $(this);
	var charNum = self.data('charnum');
	var pageNum = self.data('pagenum');
	var arrowDir = self.data('arrowdir');
	var curCharInfo = __charInfo[charNum];
	
	if (arrowDir=='down') {
		pageNum++;
	} else {
		pageNum--;
	}
	self.data('pagenum',pageNum);

	if (pageNum == curCharInfo.introPage) {
		self.data('arrowdir','up');
		self.css('background-image','url("/images/chars/char_intro_controller_up.png")');
	} else if (pageNum == 1) {
		self.data('arrowdir','down');
		self.css('background-image','url("/images/chars/char_intro_controller_down.png")');
	}

	$('.char_intro_'+charNum).html(curCharInfo.introText[pageNum-1]);
}

function genCharSwiper(){
	setTimeout(function(){
		new Swiper('#character .swiper-container', {
			spaceBetween: 30,
			centeredSlides: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			loop: true,
			slidesPerView: 1,
			paginationClickable: true,
			speed: 800,
			allowTouchMove: false,
			on:{
				slidePrevTransitionEnd:slidePrevTransitionEnd,
				slideNextTransitionEnd:slideNextTransitionEnd,
				init:function(){
					$('.voice_btn_1').on('click', function(){
						playCharVoice(1);
					});

					$('.voice_btn_2').on('click', function(){
						playCharVoice(2);
					});

					$('.voice_btn_3').on('click', function(){
						playCharVoice(3);
					});
				},
			}
		});
	},1500);
}

var __curCharNum = 0;
function slidePrevTransitionEnd(){
	var preChar=__curCharNum==1?__curCharLength:__curCharNum-1;
	hideCharAnim(__curCharNum);
	showCharAnim(preChar);

	__curCharNum--;
	if(__curCharNum==0){
		__curCharNum=__curCharLength;
	}
}

function slideNextTransitionEnd(){
	__curCharNum++;
	if(__curCharNum>__curCharLength){
		__curCharNum=1;
	}

	var preChar=__curCharNum==1?__curCharLength:__curCharNum-1;
	hideCharAnim(preChar);
	showCharAnim(__curCharNum);
}

function hideCharAnim(charNum){
	$('.char_'+charNum+' .anim_char_wrapper').hide();
	$('.char_'+charNum+' .anim_char_label .char_label').css({'margin-left':'894px'});
}

function showCharAnim(charNum){
	$('.char_'+charNum+' .anim_char_wrapper').fadeIn(500);
	$('.char_'+charNum+' .anim_char_label .char_label').animate({'margin-left':0},500);
}

function btnController(){
	$('.twitter_slidein').hover(function(){
		$(this).stop().animate({'right':0},300);
	},function(){
		$(this).stop().animate({'right':'-200px'},300);
	});
	$('.mail_slidein').hover(function(){
		$(this).stop().animate({'right':0},300);
	},function(){
		$(this).stop().animate({'right':'-200px'},300);
	});
	$('.mail_slidein_dmm').hover(function(){
		$(this).stop().animate({'right':0},300);
	},function(){
		$(this).stop().animate({'right':'-200px'},300);
	});

	$('.preregister_btn').on('click',openPreregisterModal);
	$('.mail_slidein,.mail_slidein_dmm').on('click',openPreregisterModal);
	$('.movie_play_btn').on('click',playYoutubeWindow);
	$('.char_intro_controller').on('click',charIntroController);

	$('.system_left_btn').on('click',slideSystemCard);
	$('.system_right_btn').on('click',slideSystemCard);

	$('.banner_clicker').on('click',function(){
		window.open('/preregister_cp', '_blank');
	});
}

function openPreregisterModal () {
	layer.closeAll();
	layer.open({
		type: 2,
		title: false,
		skin: 'layui-layer-none',
		area: ['800px', '600px'],
		closeBtn: true,
		shadeClose: false,
		content: '/preregister/input',
	});
}

function playYoutubeWindow(){
	var yId='7doi8tRnI9k';
	layer.closeAll();
	layer.open({
		type: 2,
		title: false,
		closeBtn: false,
		shadeClose: true,
		shade: .5,
		skin: 'layui-layer-none',
		area: ['800px', '445px'],
		content: 'https://www.youtube.com/embed/' + yId + '?autoplay=1&loop=1&playlist=' + yId + '&fs=0',
	});
}

var __sliderInfo = {
	cardUpperLeft: 280,
	cardLowerLeft: 400,
	cardMoveLeft: 400 - 280,
	moveRange: 2,
	duration: 500,
	upperSystemCard: 1,
	lowerSystemCard: 2,
	cardCount: 7,
	isPlaying: false,
};

function slideSystemCard(){
	if (__sliderInfo.isPlaying) {
		return;
	}

	__sliderInfo.isPlaying = true;

	var cardAddNum = 1;
	if (this.className == 'system_left_btn') {
		cardAddNum = -1;
	}

	var cardUpperElem = $('.system_card_upper');
	$({anim:0}).animate({anim:__sliderInfo.moveRange},{
		duration: __sliderInfo.duration,
		step:function(now){
			cardUpperElem.css({
				transform:'rotate('+(now*-10)+'deg)',
				left:(__sliderInfo.cardUpperLeft-now*__sliderInfo.cardMoveLeft)+'px',
				top:(80-10*(now/__sliderInfo.moveRange))+'px',
			});
		},
		complete:function(){
			__sliderInfo.lowerSystemCard += cardAddNum;
			if(__sliderInfo.lowerSystemCard > __sliderInfo.cardCount){
				__sliderInfo.lowerSystemCard = 1;
			}
			if (__sliderInfo.lowerSystemCard == 0) {
				__sliderInfo.lowerSystemCard = __sliderInfo.cardCount;
			}
			cardUpperElem.css({
				zIndex:5,
				'background-image': "url('/images/system_card_"+__sliderInfo.lowerSystemCard+"_off.png')"
			});
			$({anim:__sliderInfo.moveRange}).animate({anim:-1},{
				duration: __sliderInfo.duration,
				step:function(now){
					cardUpperElem.css({
						transform:'rotate('+(now*-10)+'deg)',
						left:(__sliderInfo.cardUpperLeft-now*__sliderInfo.cardMoveLeft)+'px'
					});
				},
				complete:function(){
					cardUpperElem.css({
						zIndex:10,
						anim:0,
					});
				}
			});
		}
	});
	
	var cardLowerElem = $('.system_card_lower');
	$({anim:0}).animate({anim:__sliderInfo.moveRange},{
		duration: __sliderInfo.duration,
		step:function(now){
			cardLowerElem.css({
				transform:'rotate('+(10+now*10)+'deg)',
				left:(__sliderInfo.cardLowerLeft+now*__sliderInfo.cardMoveLeft)+'px',
				top:(70+10*(now/__sliderInfo.moveRange))+'px'
			});
		},
		complete:function(){
			__sliderInfo.upperSystemCard += cardAddNum;
			if (__sliderInfo.upperSystemCard > __sliderInfo.cardCount) {
				__sliderInfo.upperSystemCard = 1;
			}
			if (__sliderInfo.upperSystemCard == 0) {
				__sliderInfo.upperSystemCard = __sliderInfo.cardCount;
			}

			cardLowerElem.css({
				'background-image': "url('/images/system_card_"+__sliderInfo.upperSystemCard+"_on.png')"
			});
			$({anim:__sliderInfo.moveRange}).animate({anim:-1},{
				duration: __sliderInfo.duration,
				step:function(now){
					cardLowerElem.css({
						transform:'rotate('+(10+now*10)+'deg)',
						left:(__sliderInfo.cardLowerLeft+now*__sliderInfo.cardMoveLeft)+'px'
					});
				},
				complete:function(){
					cardLowerElem.css({
						zIndex:30,
						anim:0,
					});

					cardUpperElem.addClass('system_card_lower');
					cardUpperElem.removeClass('system_card_upper');
					cardLowerElem.addClass('system_card_upper');
					cardLowerElem.removeClass('system_card_lower');

					__sliderInfo.isPlaying = false;
				}
			});
		},
	});
}

function setScrollReveals(){
	var sr = new ScrollReveal();
	sr.reveal('.logo',{duration:2e3,delay:800,scale:.7});
	sr.reveal('.top_chars_right',{origin:'right',duration:2e3,delay:500,distance:'200px'});
	sr.reveal('.top_chars_left',{origin:'left',duration:2e3,delay:500,distance:'200px'});
	sr.reveal('.story_header_left',{origin:'left',duration:2e3,delay:0,distance:'400px',reset:true});
	sr.reveal('.story_header_right',{origin:'right',duration:2e3,delay:0,distance:'400px',reset:true});
	sr.reveal('.story_content_1',{origin:'right',duration:2e3,delay:300,distance:'400px',reset:true});
	sr.reveal('.story_content_2',{origin:'left',duration:2e3,delay:300,distance:'400px',reset:true});
	sr.reveal('.story_content_3',{origin:'right',duration:2e3,delay:300,distance:'400px',reset:true});
	sr.reveal('.story_content_4',{origin:'left',duration:2e3,delay:300,distance:'400px',reset:true});
	sr.reveal('.char_header_left',{origin:'left',duration:2e3,delay:0,distance:'400px',reset:true});
	sr.reveal('.char_header_right',{origin:'right',duration:2e3,delay:0,distance:'400px',reset:true});
	sr.reveal('.system_header_left',{origin:'left',duration:2e3,delay:0,distance:'400px',reset:true});
	sr.reveal('.system_header_right',{origin:'right',duration:2e3,delay:0,distance:'400px',reset:true});
}

function setScrollEvents(){
	var scrollToTopBtn = $('.scroll_to_top_btn');
	var storyOffsetTop = $('#story').offset().top;
	var floatArea = $('.float_area');
	var docHeightM = $(document).innerHeight()-$('.footer_texts').innerHeight()/2;
	$(window).scroll(function(){
		var scrolltop = $(this).scrollTop();

		if(scrolltop >= storyOffsetTop){
			scrollToTopBtn.show();
		}else{
			scrollToTopBtn.hide();
		}

		if(scrolltop >= docHeightM-$(this).innerHeight()){
			floatArea.css({bottom:'300px'});
		} else {
			floatArea.css({bottom:'35px'});
		}
	});
}

function loadTwitterTimeLine(){
	setTimeout(function(){
		!function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0];
			if (!d.getElementById(id)) {
				js = d.createElement(s);
				js.id = id;
				js.src = "https://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js, fjs);
			}
		}(document, "script", "twitter-wjs");
	},1e3);
}

var __soundObj = null;
function playCharVoice (voiceNum) {
	if (__soundObj)
		__soundObj.unload();

	__soundObj = new Howl({
		src: ['/sounds/chars/'+__curCharNum+'_'+voiceNum+'.wav'],
		volume: .5,
	});

	__soundObj.play();
}
