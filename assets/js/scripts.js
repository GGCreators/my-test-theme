/* ТАБЫ В ОТКЛЮЧЕНИЯХ */
class ItcAccordion {
	constructor(target, config) {
		this._el = typeof target === 'string' ? document.querySelector(target) : target;
		const defaultConfig = {
			alwaysOpen: true
		};
		this._config = Object.assign(defaultConfig, config);
		this.addEventListener();
	}
	addEventListener() {
		document.querySelector('.adreses__item').classList.toggle('adreses__item_show');
		this._el.addEventListener('click', (e) => {
			const elHeader = e.target.closest('.item__tab');
			if (!elHeader) {
				return;
			}
			if (!this._config.alwaysOpen) {
				const elOpenItem = this._el.querySelector('.adreses__item_show');
				if (elOpenItem) {
					elOpenItem !== elHeader.parentElement ? elOpenItem.classList.toggle('adreses__item_show') : null;
				}
			}
			elHeader.parentElement.classList.toggle('adreses__item_show');
		});
	}
}
new ItcAccordion('#techwork__adreses', { alwaysOpen: true });
var tabs = new Tabby('[data-tabs]');
/* ТАБЫ В ОТКЛЮЧЕНИЯХ */


/* Расчёт прогрессбара отключений */
var $today = new Date();
//первая вкладка
if (document.querySelector("#startdate1") != null) {
	var $startdate1 = document.querySelector("#startdate1"),
		$startdate1 = $startdate1.textContent.replace(/\s/g, ''),
		$starttime1 = document.querySelector("#starttime1"),
		$starttime1 = $starttime1.textContent.replace(/\s/g, ''),
		$startalldate1 = $startdate1 + " " + $starttime1,
		$start1 = new Date($startalldate1.replace(/(\d+).(\d+).(\d+) (\d+):(\d+)/, '$3/$2/$1 $4:$5'));
	var $enddate1 = document.querySelector("#enddate1"),
		$enddate1 = $enddate1.textContent.replace(/\s/g, ''),
		$endtime1 = document.querySelector("#endtime1"),
		$endtime1 = $endtime1.textContent.replace(/\s/g, ''),
		$endalldate1 = $enddate1 + " " + $endtime1,
		$end1 = new Date($endalldate1.replace(/(\d+).(\d+).(\d+) (\d+):(\d+)/, '$3/$2/$1 $4:$5'));
	var $q = Math.abs($today - $start1),
		$d = Math.abs($end1 - $start1),
		$proc1 = Math.round(($q / $d) * 100) + "%";
	if (Math.round(($q / $d) * 100) > 100) $proc1 = "100%";
	if ($proc1 == "NaN%") $proc1 = "0%";
	var $elemproc1 = document.querySelector("#otkl1"),
		$polosa1 = document.querySelector("#polosa1");
	$elemproc1.textContent = $proc1;
	$polosa1.style.width = $proc1;
}

//вторая вкладка
if (document.querySelector("#startdate2") != null) {
	var $startdate2 = document.querySelector("#startdate2"),
		$startdate2 = $startdate2.textContent.replace(/\s/g, ''),
		$starttime2 = document.querySelector("#starttime2"),
		$starttime2 = $starttime2.textContent.replace(/\s/g, ''),
		$startalldate2 = $startdate2 + " " + $starttime2,
		$start2 = new Date($startalldate2.replace(/(\d+).(\d+).(\d+) (\d+):(\d+)/, '$3/$2/$1 $4:$5'));
	var $enddate2 = document.querySelector("#enddate2"),
		$enddate2 = $enddate2.textContent.replace(/\s/g, ''),
		$endtime2 = document.querySelector("#endtime2"),
		$endtime2 = $endtime2.textContent.replace(/\s/g, ''),
		$endalldate2 = $enddate2 + " " + $endtime2,
		$end2 = new Date($endalldate2.replace(/(\d+).(\d+).(\d+) (\d+):(\d+)/, '$3/$2/$1 $4:$5'));
	var $q = Math.abs($today - $start2),
		$d = Math.abs($end2 - $start2),
		$proc2 = Math.round(($q / $d) * 100) + "%";
	if (Math.round(($q / $d) * 100) > 100) $proc2 = "100%";
	if ($proc2 == "NaN%") $proc2 = "0%";
	var $elemproc2 = document.querySelector("#otkl2"),
		$polosa2 = document.querySelector("#polosa2");
	$elemproc2.textContent = $proc2;
	$polosa2.style.width = $proc2;
}

//третья вкладка
if (document.querySelector("#startdate3") != null) {
	var $startdate3 = document.querySelector("#startdate3").textContent.replace(/\s/g, ''),
		$starttime3 = document.querySelector("#starttime3").textContent.replace(/\s/g, ''),
		$startalldate3 = $startdate3 + " " + $starttime3,
		$start3 = new Date($startalldate3.replace(/(\d+).(\d+).(\d+) (\d+):(\d+)/, '$3/$2/$1 $4:$5'));
	var $enddate3 = document.querySelector("#enddate3").textContent.replace(/\s/g, ''),
		$endtime3 = document.querySelector("#endtime3").textContent.replace(/\s/g, ''),
		$endalldate3 = $enddate3 + " " + $endtime3,
		$end3 = new Date($endalldate3.replace(/(\d+).(\d+).(\d+) (\d+):(\d+)/, '$3/$2/$1 $4:$5'));
	var $q = Math.abs($today - $start3),
		$d = Math.abs($end3 - $start3),
		$proc3 = Math.round(($q / $d) * 100) + "%";
	if (Math.round(($q / $d) * 100) > 100) $proc3 = "100%";
	if ($proc3 == "NaN%") $proc3 = "0%";
	var $elemproc3 = document.querySelector("#otkl3"),
		$polosa3 = document.querySelector("#polosa3");
	$elemproc3.textContent = $proc3;
	$polosa3.style.width = $proc3;
}

//четвертая вкладка
if (document.querySelector("#startdate4") != null) {
	var $startdate4 = document.querySelector("#startdate4").textContent.replace(/\s/g, ''),
		$starttime4 = document.querySelector("#starttime4").textContent.replace(/\s/g, ''),
		$startalldate4 = $startdate4 + " " + $starttime4,
		$start4 = new Date($startalldate4.replace(/(\d+).(\d+).(\d+) (\d+):(\d+)/, '$3/$2/$1 $4:$5'));
	var $enddate4 = document.querySelector("#enddate4").textContent.replace(/\s/g, ''),
		$endtime4 = document.querySelector("#endtime4").textContent.replace(/\s/g, ''),
		$endalldate4 = $enddate4 + " " + $endtime4,
		$end4 = new Date($endalldate4.replace(/(\d+).(\d+).(\d+) (\d+):(\d+)/, '$3/$2/$1 $4:$5'));
	var $q = Math.abs($today - $start4),
		$d = Math.abs($end4 - $start4),
		$proc4 = Math.round(($q / $d) * 100) + "%";
	if (Math.round(($q / $d) * 100) > 100) $proc4 = "100%";
	if ($proc4 == "NaN%") $proc4 = "0%";
	var $elemproc4 = document.querySelector("#otkl4"),
		$polosa4 = document.querySelector("#polosa4");
	$elemproc4.textContent = $proc4;
	$polosa4.style.width = $proc4;
}
/* Расчёт прогрессбара отключений */


/* КАРТА ОТКЛЮЧЕНИЙ */
ymaps.ready(init);
function init(point) {
	var myMap = new ymaps.Map('map', {
		center: [46.824179, 29.545689],
		zoom: 1
	});

	for (var i = 0; i < jQuery('.mapInfo_streetName').length; i++) {
		//alert($('.mapInfo_streetName').text());
	}
	jQuery('.item__tab').each(function ($) {
		html = jQuery(this).text();
		// Поиск выбранного адреса
		ymaps.geocode(html, {
			results: 1
		}).then(function (res) {
			// Выбираем первый результат поиска
			var firstGeoObject = res.geoObjects.get(0),
				// получаем координаты объекта
				coords = firstGeoObject.geometry.getCoordinates(),
				// получаем границы объекта для отображения и центрирования на нём
				bounds = firstGeoObject.properties.get('boundedBy');

			firstGeoObject.options.set('preset', 'islands#darkBlueDotIconWithCaption');
			// Getting the address string and displaying it in the geo object icon.
			firstGeoObject.properties.set('iconCaption', firstGeoObject.getAddressLine());

			// Добавление объекта на карту
			myMap.geoObjects.add(firstGeoObject);
			// Центрирование на данном объекте
			myMap.setBounds(bounds, {
				// Checking the availability of tiles at the given zoom level.
				checkZoomRange: true
			});
		});
	});
	jQuery('.item__tab').on('click', function (e) {
		html = jQuery(e.target).parent().children(".item__tab").text();
		ymaps.geocode(html, {
			results: 1
		}).then(function (res) {
			// Выбираем первый результат поиска
			var firstGeoObject = res.geoObjects.get(0),
				// получаем границы объекта для отображения и центрирования на нём
				bounds = firstGeoObject.properties.get('boundedBy');
			// Центрирование на данном объекте
			myMap.setBounds(bounds, {
				// Checking the availability of tiles at the given zoom level.
				checkZoomRange: true
			});
		});
	});
}

/* КАРТА ОТКЛЮЧЕНИЙ */