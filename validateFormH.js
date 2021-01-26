// JavaScript Document


function verifyForm(){
	var commentsTB = document.getElementById('comments');
	var comment = commentsTB.value;
	var regex = /[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/=]*)/g;
	if(!comment.match(/[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/=]*)/g)){
		return true;
	}
	var rfgp = document.getElementsByClassName('rfgp3')[0];
	rfgp.style.position = 'relative';
	var div = document.createElement("div");
	div.id = 'markup-textbox-id';
	removeDivIfExist('markup-textbox-id');
	var errorMsg = document.createElement("p");
	errorMsg.id = 'error-msg';
	removeDivIfExist('error-msg');
	var formTag = document.getElementsByTagName('form')[0];
	errorMsg.innerHTML = "* Please enter a valid message. Your message contains url";
	errorMsg.classList.add("error-url-validation");
	rfgp.parentNode.insertBefore(errorMsg,rfgp);
	// console.log(formTag);
	// console.log(formTag.parentNode);
	div.classList.add("markup-textbox");
	rfgp.appendChild(div);
	div.innerHTML = comment.replace(regex, '<span class = "mark-url">$&</span>');
	div.onclick = function(){rfgp.removeChild(div);};
	//setTimeout(function(){ rfgp.removeChild(div); }, 3000);
	return false;
}

function removeDivIfExist(id){
	try{
		if (document.contains(document.getElementById(id))) {
					document.getElementById(id).remove();
		}
	}
	catch(err){
		var ele = document.getElementById(id);
		if(ele){
			ele.parentNode.removeChild(ele);
		}
	}
}


