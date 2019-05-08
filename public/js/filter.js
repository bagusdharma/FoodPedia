// Countries
var country_arr = new Array("Aceh","Bali","Banten","Bangka Belitung","Bengkulu","DKI Jakarta","DIY Yogyakarta","Gorontalo","Jambi","Jawa Barat","Jawa Tengah","Jawa Timur","Kepulauan Riau","Kalimantan Utara","Kalimantan Barat","Kalimantan Tengah","Kalimantan Selatan","Kalimantan Timur","Lampung","Maluku","Maluku Utara","Nusa Tenggara Barat","Nusa Tenggara Timur","Papua Barat","Papua","Riau","Sumatera Utara","Sumatera Barat","Sumatera Selatan");

// States
var s_a = new Array();
s_a[0] = "";
s_a[1] = "Kabupaten Aceh Barat|Kabupaten Aceh Barat Daya|Kabupaten Aceh Besar|Kabupaten Aceh Jaya|Kabupaten Aceh Selatan|Kabupaten Aceh Singkil|Kabupaten Aceh Tamiang|Kabupaten Aceh Tengah|Kabupaten Aceh Tenggara|Kabupaten Aceh Timur|Kabupaten Aceh Utara|Kabupaten Bener Meriah|Kabupaten Bireuen|Kabupaten Nagan Raya|Kabupaten Pidie|Kabupaten Pidie Jaya|Kabupaten Simeulue|Kota Banda Aceh|Kota Langsa|Kota Lhokseumawe|Kota Sabang|Kota Subulussalam";
s_a[2] = "Denpasar|Badung|Buleleng|Tabanan|Bangli|Gianyar|Jembrana|Karangasem|Klungkung";
s_a[3] = "Lebak|Pandeglang|Serang|Tanggerang|Cilegon|Serang|Tangerang|Tangerang Selatan";
s_a[4] = "Bangka|Bangka Barat|Bangka Selatan|Bangka Tengah|Belitung|Belitung Timur|Pangkal Pinang";
s_a[5] = "Bengkulu Selatan|Bengkulu Tengah|Bengkulu Utara|Kaur|Kepahiang|Lebong|Seluma";
s_a[6] = "Jakarta Timur|Jakarta Pusat|Jakarta Barat|Jakarta Selatan";
s_a[7] = "Bantul|Gunung Kidul|Kulon Progo|Sleman";
s_a[8] = "Boalemo|Bone Bolango|Gorontalo Utara|Pohuwato";
s_a[9] = "Batanghari|Bungo|Kerinci|Merangin|Muaro Jambi|Sarolangun|Tanjung Jabung Barat|Tanjung Jabung Timur|Tebo|Sungaipenuh";
s_a[10] = "Bandung|Bandung Barat|Bekasi|Bogor|Ciamis|Cianjur|Cirebon|Garut|Indramayu|Karawang|Kuningan|Majalengka|Pangandaran|Purwakarta|Subang|Sukabumi|Sumedang|Tasikmalaya";
s_a[11] = "Banjarnegara|Banyumas|Batang|Blora|Boyolali|Brebes|Cilacap|Demak|Grobogan|Jepara|Kebumen|Klaten|Magelang|Surakarta|Tegal";
s_a[12] = "Bangkalan|Banyuwangi|Blitar|Bojonegoro|Bojonegoro|Bondowoso|Gresik|Jember|Jombang|Kediri|Lamongan|Lumajang|Madiun|Magetan|Malang|Mojokerto|Nganjuk|Ngawi|Pacitan|Pamekasan|Pasuruan|Ponorogo|Probolinggo|Sampang|Sidoarjo|Situbondo|Sumenep|Surabaya|Trenggalek|Tuban|Tulungagung";
s_a[13] = "Australian Capital Territory|New South Wales|Northern Territory|Queensland|South Australia|Tasmania|Victoria|Western Australia";
s_a[14] = "Burgenland|Kaernten|Niederoesterreich|Oberoesterreich|Salzburg|Steiermark|Tirol|Vorarlberg|Wien";
s_a[15] = "Abseron Rayonu|Agcabadi Rayonu|Agdam Rayonu|Agdas Rayonu|Agstafa Rayonu|Agsu Rayonu|Ali Bayramli Sahari|Astara Rayonu|Baki Sahari|Balakan Rayonu|Barda Rayonu|Beylaqan Rayonu|Bilasuvar Rayonu|Cabrayil Rayonu|Calilabad Rayonu|Daskasan Rayonu|Davaci Rayonu|Fuzuli Rayonu|Gadabay Rayonu|Ganca Sahari|Goranboy Rayonu|Goycay Rayonu|Haciqabul Rayonu|Imisli Rayonu|Ismayilli Rayonu|Kalbacar Rayonu|Kurdamir Rayonu|Lacin Rayonu|Lankaran Rayonu|Lankaran Sahari|Lerik Rayonu|Masalli Rayonu|Mingacevir Sahari|Naftalan Sahari|Naxcivan Muxtar Respublikasi|Neftcala Rayonu|Oguz Rayonu|Qabala Rayonu|Qax Rayonu|Qazax Rayonu|Qobustan Rayonu|Quba Rayonu|Qubadli Rayonu|Qusar Rayonu|Saatli Rayonu|Sabirabad Rayonu|Saki Rayonu|Saki Sahari|Salyan Rayonu|Samaxi Rayonu|Samkir Rayonu|Samux Rayonu|Siyazan Rayonu|Sumqayit Sahari|Susa Rayonu|Susa Sahari|Tartar Rayonu|Tovuz Rayonu|Ucar Rayonu|Xacmaz Rayonu|Xankandi Sahari|Xanlar Rayonu|Xizi Rayonu|Xocali Rayonu|Xocavand Rayonu|Yardimli Rayonu|Yevlax Rayonu|Yevlax Sahari|Zangilan Rayonu|Zaqatala Rayonu|Zardab Rayonu";
s_a[16] = "Acklins and Crooked Islands|Bimini|Cat Island|Exuma|Freeport|Fresh Creek|Governor's Harbour|Green Turtle Cay|Harbour Island|High Rock|Inagua|Kemps Bay|Long Island|Marsh Harbour|Mayaguana|New Providence|Nicholls Town and Berry Islands|Ragged Island|Rock Sound|San Salvador and Rum Cay|Sandy Point";
s_a[17] = "Al Hadd|Al Manamah|Al Mintaqah al Gharbiyah|Al Mintaqah al Wusta|Al Mintaqah ash Shamaliyah|Al Muharraq|Ar Rifa' wa al Mintaqah al Janubiyah|Jidd Hafs|Juzur Hawar|Madinat 'Isa|Madinat Hamad|Sitrah";
s_a[18] = "Barguna|Barisal|Bhola|Jhalokati|Patuakhali|Pirojpur|Bandarban|Brahmanbaria|Chandpur|Chittagong|Comilla|Cox's Bazar|Feni|Khagrachari|Lakshmipur|Noakhali|Rangamati|Dhaka|Faridpur|Gazipur|Gopalganj|Jamalpur|Kishoreganj|Madaripur|Manikganj|Munshiganj|Mymensingh|Narayanganj|Narsingdi|Netrokona|Rajbari|Shariatpur|Sherpur|Tangail|Bagerhat|Chuadanga|Jessore|Jhenaidah|Khulna|Kushtia|Magura|Meherpur|Narail|Satkhira|Bogra|Dinajpur|Gaibandha|Jaipurhat|Kurigram|Lalmonirhat|Naogaon|Natore|Nawabganj|Nilphamari|Pabna|Panchagarh|Rajshahi|Rangpur|Sirajganj|Thakurgaon|Habiganj|Maulvi bazar|Sunamganj|Sylhet";
s_a[19] = "Bridgetown|Christ Church|Saint Andrew|Saint George|Saint James|Saint John|Saint Joseph|Saint Lucy|Saint Michael|Saint Peter|Saint Philip|Saint Thomas";
s_a[20] = "Brestskaya (Brest)|Homyel'skaya (Homyel')|Horad Minsk|Hrodzyenskaya (Hrodna)|Mahilyowskaya (Mahilyow)|Minskaya|Vitsyebskaya (Vitsyebsk)";
s_a[21] = "Antwerpen|Brabant Wallon|Brussels Capitol Region|Hainaut|Liege|Limburg|Luxembourg|Namur|Oost-Vlaanderen|Vlaams Brabant|West-Vlaanderen";
s_a[22] = "Belize|Cayo|Corozal|Orange Walk|Stann Creek|Toledo";
s_a[23] = "Alibori|Atakora|Atlantique|Borgou|Collines|Couffo|Donga|Littoral|Mono|Oueme|Plateau|Zou";
s_a[24] = "Devonshire|Hamilton|Hamilton|Paget|Pembroke|Saint George|Saint Georges|Sandys|Smiths|Southampton|Warwick";
s_a[25] = "Bumthang|Chhukha|Chirang|Daga|Geylegphug|Ha|Lhuntshi|Mongar|Paro|Pemagatsel|Punakha|Samchi|Samdrup Jongkhar|Shemgang|Tashigang|Thimphu|Tongsa|Wangdi Phodrang";
s_a[26] = "Beni|Chuquisaca|Cochabamba|La Paz|Oruro|Pando|Potosi|Santa Cruz|Tarija";
s_a[27] = "Federation of Bosnia and Herzegovina|Republika Srpska";
s_a[28] = "Central|Chobe|Francistown|Gaborone|Ghanzi|Kgalagadi|Kgatleng|Kweneng|Lobatse|Ngamiland|North-East|Selebi-Pikwe|South-East|Southern";
s_a[29] = "Acre|Alagoas|Amapa|Amazonas|Bahia|Ceara|Distrito Federal|Espirito Santo|Goias|Maranhao|Mato Grosso|Mato Grosso do Sul|Minas Gerais|Para|Paraiba|Parana|Pernambuco|Piaui|Rio de Janeiro|Rio Grande do Norte|Rio Grande do Sul|Rondonia|Roraima|Santa Catarina|Sao Paulo|Sergipe|Tocantins";

function populateStates(countryElementId, stateElementId) {

    var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;

    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('Nama Kota / Kabupaten', '');
    stateElement.selectedIndex = 0;

    var state_arr = s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
}

function populateCountries(countryElementId, stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Nama Provinsi', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId);
        };
    }
}

//Filter News
$('select#sort-news').change(function() {
	var filter = $(this).val()
	filterList(filter);
});

//News filter function
function filterList(value) {
	var list = $(".news-list .news-item");
	$(list).fadeOut("fast");
	if (value == "All") {
		$(".news-list").find("article").each(function (i) {
			$(this).delay(200).slideDown("fast");
		});
	} else {
		//Notice this *=" <- This means that if the data-category contains multiple options, it will find them
		//Ex: data-category="Cat1, Cat2"
		$(".news-list").find("article[data-category*=" + value + "]").each(function (i) {
			$(this).delay(200).slideDown("fast");
		});
	}
}