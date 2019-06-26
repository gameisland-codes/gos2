var __charInfo = {
	 1:{id: 1,attr:1,introPage:1,name:'ラビ',cv:'Lynn',introText:['新たに部隊に配属された副官。任務中のあらゆる場所で隊員への補助やサポートを行うオペレーターを担う。']},
	 2:{id:12,attr:1,introPage:1,name:'シグルーン',cv:'鈴木みのり',introText:['兵士に内蔵されているアンテナに、戦術や判断を送受信する戦闘AI。各部隊の基地に配備されており、その部隊独自の情報を共有する。']},
	 3:{id: 2,attr:2,introPage:1,name:'シェリー',cv:'Lynn',introText:['生体反応などを感じ取る異能力者。偵察や索敵を担当することが多い。能力の希少性から軍で保護されているが、稀に戦場に現れる。']},
	 4:{id: 3,attr:2,introPage:1,name:'エミ',cv:'田中貴子',introText:['年端もいかぬ少女でありながら、機械工学において優秀な実績をもつ。自分で開発した決戦兵器を従え、高らかに笑いながら戦場を蹂躙する。']},
	 5:{id: 4,attr:2,introPage:1,name:'アン',cv:'鈴木みのり',introText:['部隊の下っ端として配属された記憶喪失の少女。なにかしら能力を持つようだが、それを扱う術すら思い出せずにいる。']},
	 6:{id: 5,attr:2,introPage:1,name:'マリー',cv:'倉知玲鳳',introText:['前線で活躍中の優秀な兵士。美人で聡明な、だがそれを鼻にかけない謙虚さも持つ。男性兵士からの誘いが多く困っている。']},
	 7:{id:13,attr:2,introPage:1,name:'ルーシー',cv:'永恵由彩',introText:['戦災孤児であり、実験体の1人。イスカとは姉妹のように仲が良い。無口で自分の意見をあまり言わない。イスカのような女性に憧れている。']},
	 8:{id:19,attr:2,introPage:1,name:'イスカ',cv:'七瀬ゆか',introText:['戦災孤児であり、実験体の1人。ルーシーとは姉妹のように仲が良い。無口な妹を代弁するかのような気丈さを持つ。']},
	 9:{id: 6,attr:3,introPage:1,name:'トーア',cv:'深川芹亜',introText:['自宅が戦場となったことで、一度に家族を失うという経歴を持つ新兵の1人。プロ意識、上昇志向の強さは復讐の炎によって滾っているようだ。']},
	10:{id: 7,attr:3,introPage:1,name:'オランド',cv:'坂泰斗',introText:['学問を理由に徴兵制をのらりくらりかわしてきた、お調子者の新兵。心から世界を救おうとは考えておらず、どこか頼りない印象を与える。']},
	11:{id: 8,attr:3,introPage:1,name:'シリウス',cv:'小林裕介',introText:['軍の実験体にして最高傑作と称されているいわゆるサイボーグ。規律第一のアッシュと、常に自由行動の彼が対立している様はもはや風物詩。']},
	12:{id: 9,attr:3,introPage:1,name:'アッシュ',cv:'原優子',introText:['軍のエリート、幹部となった女性兵。若さとは裏腹に非常に能力が高く、硝煙の女神とも呼ばれている。規律が兵を守る、が信条。']},
	13:{id:14,attr:3,introPage:1,name:'イリス',cv:'石見舞菜香',introText:['副官候補だったが一般兵として配属。冷静に振る舞おうとしているがとかく男性に免疫がなく、他愛のないことで狼狽する。']},
	14:{id:10,attr:3,introPage:1,name:'カメリア',cv:'相羽あいな',introText:['前線で活躍中の優秀な兵士。暗くなりがちな前線基地での華として、持ち前の明るさで周囲に気力を与える。派手なものを好むのが玉に瑕。']},
	15:{id:15,attr:4,introPage:1,name:'シスネ',cv:'春瀬なつみ',introText:['オーパーツとも呼ばれる戦闘機兵『RRアイギス』への適応を示した人物。見た目の可憐さとは裏腹に、容赦なくその鉄腕を振り下ろす冷徹さも持つ。']},
	16:{id:16,attr:4,introPage:1,name:'シーリン',cv:'原奈津子',introText:['浮遊する小型機兵を超能力のごとく操る中国支部のエリート兵。軍人でありながら料理が趣味で、よく仲間に振る舞っているようだ。']},
	17:{id:11,attr:4,introPage:1,name:'ライナー',cv:'峰健一',introText:['軍では珍しい所帯を持つ兵士。ホームで帰りを待つ妻子の為、絶対に生きて帰るという断固たる意志を持つ。強面だが子には甘いマイホームパパ。']},
	18:{id:17,attr:4,introPage:1,name:'ティグレ',cv:'大野貴史',introText:['時間操作の特殊能力を持つ人物。希少性から軍に保護されているが、慇懃無礼かつ傍若無人、女好きと、基地内での評判はすこぶる悪い。']},
	19:{id:18,attr:4,introPage:1,name:'アーネスト',cv:'峰健一',introText:['自発的に口を開くことはなく、基地内でも装備を脱がない謎の人物。忠実に任務をこなす仕事人でもあり、仲間からの信頼は厚い。']},
};
var __curCharLength=Object.keys(__charInfo).length;

$(initialize);

function initialize() {
	genChars();
	genCharSwiper();
	btnController();
	setScrollReveals();
	loadTwitterTimeLine();
}

function genChars(){
	var e='';
	for(var k in __charInfo){
		var info=__charInfo[k];
		e+='<div class="swiper-slide">'+
				'<div class="char_wrapper char_controller_'+k+' char_'+info.id+'" title="'+info.name+' '+info.cv+'">'+
					'<div class="voice_btns">'+
						'<img class="voice_btn_1" src="/images/voice_btn_1.png" data-charid="'+info.id+'" alt="'+info.cv+' Voice">'+
						'<img class="voice_btn_2" src="/images/voice_btn_2.png" data-charid="'+info.id+'" alt="'+info.cv+' Voice">'+
						'<img class="voice_btn_3" src="/images/voice_btn_3.png" data-charid="'+info.id+'" alt="'+info.cv+' Voice">'+
					'</div>'+
					'<div class="anim_char">'+
						'<div class="anim_char_wrapper">'+
							// '<div class="char_text"></div>'+
							'<div class="char" title="'+info.name+' '+info.cv+'"></div>'+
						'</div>'+
					'</div>'+
					'<div class="anim_char_label">'+
						'<div class="char_label"></div>'+
					'</div>'+
					'<div class="detail_bg_'+info.attr+'">'+
						'<div class="char_name"><img src="/images/chars/char_name_'+info.id+'.png" alt="'+info.name+'"></div>'+
						'<div class="char_cv"><img src="/images/chars/cv_'+info.id+'.png" alt="'+info.cv+'"></div>'+
						genIntro(k,info.introPage,info.introText[0])+
					'</div>'+
				'</div>'+
			'</div>';
	}
	$('#character .swiper-wrapper').html(e);
}

function genIntro(charNum,pageCount,introText){
	var r='<div class="char_intro"><div class="char_intro_'+charNum+'"><p>'+introText+'</p></div></div>';
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
			on:{
				slidePrevTransitionEnd:slidePrevTransitionEnd,
				slideNextTransitionEnd:slideNextTransitionEnd,
				init:function(){
					$('.voice_btn_1').on('click', function(){
						playCharVoice($(this).data('charid'), 1);
					});

					$('.voice_btn_2').on('click', function(){
						playCharVoice($(this).data('charid'), 2);
					});

					$('.voice_btn_3').on('click', function(){
						playCharVoice($(this).data('charid'), 3);
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
	$('.char_controller_'+charNum+' .anim_char_wrapper').hide();
	$('.char_controller_'+charNum+' .anim_char_label .char_label').css({'margin-left':'894px'});
}

function showCharAnim(charNum){
	$('.char_controller_'+charNum+' .anim_char_wrapper').fadeIn(500);
	$('.char_controller_'+charNum+' .anim_char_label .char_label').animate({'margin-left':0},500);
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

	$('.banner_frame').on('click',function(){
		window.open('https://www.gos2.jp/news/2019-06-post-3.html', '_blank');
	});

	$('.menu_btn').on('click',function(){
		$('.menu_modal').show();
	});

	$('.menu_close_btn, .menu_selector_bg').on('click',function(){
		$('.menu_modal').hide();
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
		area: ['90%', '100vw'],
		content: 'https://www.youtube.com/embed/' + yId + '?autoplay=1&loop=1&playlist=' + yId + '&fs=0',
	});
}

var __sliderInfo = {
	cardUpperTop: 11,
	cardLowerTop: 10,
	cardUpperLeft: 10,
	cardLowerLeft: 20,
	cardMoveLeft: 20 - 10,
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
				left:(__sliderInfo.cardUpperLeft-now*__sliderInfo.cardMoveLeft)+'%',
				top:(__sliderInfo.cardUpperTop-(now/__sliderInfo.moveRange))+'vw',
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
						left:(__sliderInfo.cardUpperLeft-now*__sliderInfo.cardMoveLeft)+'%'
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
				left:(__sliderInfo.cardLowerLeft+now*__sliderInfo.cardMoveLeft)+'%',
				top:(__sliderInfo.cardLowerTop+(now/__sliderInfo.moveRange))+'vw'
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
						left:(__sliderInfo.cardLowerLeft+now*__sliderInfo.cardMoveLeft)+'%'
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
	sr.reveal('.logo',{duration:2e3,delay:500,scale:.7});
	sr.reveal('.top_char_1',{origin:'left',duration:2e3,delay:100,distance:'200px'});
	sr.reveal('.top_char_2',{origin:'right',duration:2e3,delay:100,distance:'200px'});
	sr.reveal('.top_char_3',{origin:'right',duration:2e3,delay:600,distance:'200px'});
	sr.reveal('.top_char_4',{origin:'bottom',duration:2e3,delay:300,distance:'200px'});
	sr.reveal('.top_char_5',{origin:'left',duration:2e3,delay:800,distance:'200px'});
	sr.reveal('.story_header_left',{origin:'left',duration:2e3,delay:0,distance:'400px',reset:true});
	sr.reveal('.story_header_right',{origin:'right',duration:2e3,delay:0,distance:'400px',reset:true});
	sr.reveal('.story_content_1',{origin:'right',duration:2e3,delay:200,distance:'400px',reset:true});
	sr.reveal('.story_content_2',{origin:'left',duration:2e3,delay:200,distance:'400px',reset:true});
	sr.reveal('.story_content_3',{origin:'right',duration:2e3,delay:200,distance:'400px',reset:true});
	sr.reveal('.story_content_4',{origin:'left',duration:2e3,delay:200,distance:'400px',reset:true});
	sr.reveal('.char_header_left',{origin:'left',duration:2e3,delay:0,distance:'400px',reset:true});
	sr.reveal('.char_header_right',{origin:'right',duration:2e3,delay:0,distance:'400px',reset:true});
	// sr.reveal('.system_header_left',{origin:'left',duration:2e3,delay:0,distance:'400px',reset:true});
	// sr.reveal('.system_header_right',{origin:'right',duration:2e3,delay:0,distance:'400px',reset:true});
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
function playCharVoice (charId, voiceNum) {
	if (__soundObj)
		__soundObj.unload();

	__soundObj = new Howl({
		src: [
			'/sounds/chars/'+charId+'_'+voiceNum+'.wav',
			'/sounds/chars/'+charId+'_'+voiceNum+'.mp3',
		],
		volume: .5,
	});

	__soundObj.play();
}
