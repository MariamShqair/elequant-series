// var video =  videojs('my-video');


//ended , play , pause , volumechange
// video.on('ended',function (){
// 	alert('The video has ended');
// });
//=================================

// video.ready(function (){
// 	// setTimeout(() => {
// 	// 	this.play();
// 	// }, 3000);

// 	var speed = prompt('How fast should we go?');
	
// 	this.playbackRate(speed);

// 	this.play();
// });

//=================================

// tow way to define plugines 1-
// video.ready(function () {
// 	this.hotkeys({
// 		volumeStep: 0.3,
// 		enableNumbers:true,
// 		enableMute:true,
// 		seekStep: 10
// 	});
// });

//the second way by add option to videojs function 

var video = videojs('my-video',{
	playbackRates:[.5 , 1 , 1.5 , 2 ,2.5],//for speed of video
	fluid:true,//for responsive
	plugins:{ //using plugin in videojs 
		hotkeys:{
			seekStep:2,
			enableNumbser:true
		}
	}
}).on('ended',function (){
	$.ajax({
		type:'POST',
		url:'/completion',
		data:{ videoId:1  }
	});

});