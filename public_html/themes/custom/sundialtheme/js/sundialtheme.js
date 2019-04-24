function toggleMobileLatestNews() {
	var toggle = document.getElementById("Mobile-latest-news-body").style.display;
	if (toggle != 'block') {
		document.getElementById("Mobile-latest-news-body").style.display = 'block';
		document.getElementById("Mobile-latest-news-left-arrow").style.display = 'none';
		document.getElementById("Mobile-latest-news-down-arrow").style.display = 'block';
	} else {
		document.getElementById("Mobile-latest-news-body").style.display = 'none';
		document.getElementById("Mobile-latest-news-down-arrow").style.display = 'none';
		document.getElementById("Mobile-latest-news-left-arrow").style.display = 'block';
	}
}

function toggleMobileLocalEvents() {
	var toggle = document.getElementById("Mobile-local-events-body").style.display;
	if (toggle != 'block') {
		document.getElementById("Mobile-local-events-body").style.display = 'block';
		document.getElementById("Mobile-local-events-left-arrow").style.display = 'none';
		document.getElementById("Mobile-local-events-down-arrow").style.display = 'block';
	} else {
		document.getElementById("Mobile-local-events-body").style.display = 'none';
		document.getElementById("Mobile-local-events-down-arrow").style.display = 'none';
		document.getElementById("Mobile-local-events-left-arrow").style.display = 'block';
	}
}
function displayMobileFrontPageLocalEvents() {

	document.getElementById("Mobile-front-page-latest-news-body").style.display = 'none';
	document.getElementById("Mobile-front-page-local-events-body").style.display = 'block';
	document.getElementById("Events-mobile-tab").innerHTML = '<img class="mobile-front-page-event-article-tabs" src="/themes/custom/sundialtheme/images/events_on_02.png">';
	document.getElementById("Articles-mobile-tab").innerHTML = '<img class="mobile-front-page-event-article-tabs" src="/themes/custom/sundialtheme/images/articles_off_02.png">';

}

function displayMobileFrontPageLatestArticles() {

	document.getElementById("Mobile-front-page-local-events-body").style.display = 'none';
	document.getElementById("Mobile-front-page-latest-news-body").style.display = 'block';
	document.getElementById("Articles-mobile-tab").innerHTML = '<img class="mobile-front-page-event-article-tabs" src="/themes/custom/sundialtheme/images/articles_on_02.png">';
	document.getElementById("Events-mobile-tab").innerHTML = '<img class="mobile-front-page-event-article-tabs" src="/themes/custom/sundialtheme/images/events_off_02.png">';

}
