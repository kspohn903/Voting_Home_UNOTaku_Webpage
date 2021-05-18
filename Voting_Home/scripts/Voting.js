let checkLogin = () => {
	if ($("#LoginName").val().trim() == "") {
		alert("Enter a (user) name before continuing to the anime list!");
		return false;
	} else { 
	return true; 
  }  };
let goNegVote = (btn) => {
	form = $(btn).closest("form");
	if ((form.attr("id").indexOf("Guest") < 0) || (checkLogin())) {		
    	form.attr("action","Voting_Negative.php"); /* Set */
		form.submit();
		form.attr("action","Voting_Anime.php"); /* Reset */
	}
	return false;
}; 
  let randomVote = (element) => {
	$($("#animeTable a [src='images/vote-add.png']")[Math.floor(Math.random()*
	($("#animeTable a [src='images/vote-add.png']").length)) ] ).parent().click();
	return false;
 }; 
  let ajaxVote = (user, anime, action, wplogin) => {
	  let image = "", subaction = "";
	  if (action.indexOf("NegativeVoting") >= 0) {
		action = action.replace("Negative","");
		subaction = "Negative";
	  }
	  $.ajax({ 
	    type: "GET",
		url: "//unotaku.com/Voting/php/DB.php",
		data: "action=" + action + "&subaction=" + subaction + "&Number=" + anime + "&Name=" + user + "&WPLogin=" + wplogin,
		dataType: "html",
		beforeSend: () => {
			$("[name='voteFor" + anime + "']").add("[name='voteRandom']").html('<img title="Waiting..." alt="Waiting..." src="images/vote-wait.png">');
			$("[name='voteFor" + anime + "']").removeAttr("onclick").unbind('click');
		},
		success: (data, textStatus, jqXHR) => {
			let affectedElements = $("[name='voteFor" + anime + "']");
			if (jqXHR.responseText.indexOf("name='voteFor" + anime + "'") == -1) {
				action = (action == "Voting") ? "UnVoting": "UnVoting";
			}
			if (subaction != "Negative") subaction = "";
			if (action == "Voting") {
				image = "vote-del.png";
				title = "Remove!";
				affectedElements.click( () => { ajaxVote(user,anime,"Un" + subaction + "Voting",wplogin); });
			} else if (action == "UnVoting") {
				image = "vote-add.png";
				title = "Vote!";
				affectedElements.click(() => { ajaxVote(user,anime,subaction + "Voting",wplogin); });
			}
			affectedElements.html('<img title="' + title + '" alt="' + title + '" src="images/' + image + '">');
			document.getElementById("topLeft").innerHTML = jqXHR.responseText;
		},
		error: () => {
			let affectedElements = $("[name='voteFor" + anime + "']");
			if (subaction != "Negative") subaction = "";
			if (action == "Voting") {
				image = "vote-add.png";
				affectedElements.click( () => { ajaxVote(user,anime,subaction + "Voting",wplogin); });
			} else if (action == "UnVoting") {
				image = "vote-del.png";
				affectedElements.click(() => { ajaxVote(user,anime,"Un" + subaction + "Voting",wplogin); });
			}
			affectedElements.html('<img title="Waiting..." alt="Waiting..." src="images/' + image + '">');
		},
		complete: () => { $("[name='voteRandom']").html('<img title="Vote!" alt="Vote!" src="images/vote-add.png">'); }
	  });/*end of ajaxRequest "GET"*/
};
 let ajaxGetSingleAnime = (el) => { /* Get single anime info */
  if (el.value > 0) {
	  $("#loading_bar").show();
	  $("select").attr("disabled","disabled");
	  $("input").attr("disabled","disabled");
	  $.ajax({ type: "GET", url: "//unotaku.com/Voting/php/DB.php",
	   data: "action=XML_GetSingleAnime&Number=" + el.value,
	    dataType: "xml",
		success: (data, textStatus, jqXHR) => {
			$(data).find('SingleAnimeInfo').each( () => {
				$(this).find('*').each( () => {
					$("#XML" + this.tagName).val($(this).text());
				});
			});
		},
		error: (jqXHR, textStatus, errorThrown) => {
			alert(errorThrown);
		},
		complete: (jqXHR, textStatus, errorThrown) => {
				$("select").removeAttr("disabled");
				$("input").removeAttr("disabled");
				$("#loading_bar").hide();
		}
	}); /*end of Voting/php/DB.php GET Ajax Request...*/
  } else {
	$('input[id^="XML"]').val("");
	$('#XMLNumber').val(-1);
  }  /*end of else*/ 
}; /*end of ajaxGetSingleAnime.*/, 
  
let confirmSubmit = () => {
	if ($("#XMLNumber").val() == "") {
		alert("Please input some anime info before submitting.");
		return false;
	} else if ($("#XMLNumber").val() == -1) {
		return confirm("Submit this new anime?");
	} else if ($("#XMLNumber").val() > 0) {
		return confirm("Submit edits to '" + $("#XMLName").val() + "', previously '" + $("#editAnime option:selected'").text() +"'?");
	} else {
		alert("No idea what you just did...");
		return false;
	}
}; 
$(document).ready( () => { /* Search! */
	jQuery.expr[':'].Contains = (a, i, m) => {
	  return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
	};
	$("#SearchAnime").change(() => {
		if ($("#SearchAnime").val() == "") {
			$("#animeTable tr").show();
			$("#SearchAnime").css("background-color","black")
		} else {
			$("#animeTable tr").not(".noHide").hide();
			$("#animeTable tr:Contains('" + $("#SearchAnime").val()  + "')").closest("tr").show();
			$("#SearchAnime").css("background-color","red")
		}
	}); /*end of inner acync function '#SearchAnime'.change(() => {...}) ...*/
}); /*end of outer async function $(document).ready(()=> {...})*/