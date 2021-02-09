document.write('<!DOCTYPE html>\n<html>\n<head>\n    \x3Cscript>\n        var publisher = 339;\n        var mid;\n        var publishers = {\n            "225" : ["767700", "767699", "767701"],\n            "161" : ["767562", "767561", "767563"],\n            "374" : ["767987", "767986", "767988"],\n            "273" : ["767825", "767823", "767826"],\n            "114" : ["767468", "767467", "767469"],\n            "258" : ["767786", "767785", "767787"],\n            "76" : ["767411", "767410", "767412"],\n            "480" : ["768074", "768073", "768075"],\n            "69" : ["767398", "767397", "767399"],\n            "88" : ["767434", "767433", "767435"],\n            "207" : ["791251", "791250", "791252"],\n            "327" : ["767905", "767904", "767906"],\n            "229" : ["792109", "792108", "792110"],\n            "194" : ["767631", "767630", "767632"],\n            "230" : ["792096", "792095", "792097"],\n            "242" : ["767735", "767734", "767736"],\n            "924" : ["774611", "774610", "774612"],\n            "162" : ["768549", "768548", "768550"],\n            "923" : ["768164", "768163", "768165"],\n            "278" : ["768158", "768157", "768159"],\n            "245" : ["767750", "767749", "767751"],\n            "128" : ["767493", "767492", "767494"],\n            "265" : ["767797", "767795", "767798"],\n            "197" : ["767637", "767636", "767638"],\n            "246" : ["767754", "767753", "767755"],\n            "316" : ["768170", "768169", "768171"],\n            "1091" : ["792574", "792573", "792575"],\n            "125" : ["767480", "767479", "767481"],\n            "403" : ["768020", "768019", "768021"],\n            "91" : ["767440", "767439", "767441"],\n            "126" : ["768545", "768544", "768546"],\n            "127" : ["767488", "767487", "767489"],\n            "367" : ["765680", "765679", "765681"],\n            "368" : ["767967", "767966", "767968"],\n            "98" : ["767460", "767459", "767461"],\n            "116" : ["794270", "794269", "794271"],\n            "117" : ["767476", "767475", "767477"],\n            "130" : ["794283", "794282", "794284"],\n            "131" : ["768212", "768211", "768213"],\n            "137" : ["767504", "767503", "767505"],\n            "155" : ["794344", "794343", "794345"],\n            "156" : ["767556", "767555", "767557"],\n            "336" : ["767924", "767923", "767925"],\n            "339" : ["767937", "767936", "767938"],\n            "369" : ["767972", "767971", "767973"],\n            "370" : ["767978", "767977", "767980"],\n            "371" : ["767984", "767983", "767985"],\n            "375" : ["767990", "767989", "767991"],\n            "380" : ["767993", "767992", "767994"],\n            "381" : ["767996", "767995", "767997"],\n            "383" : ["767999", "767998", "768000"],\n            "384" : ["768002", "768001", "768003"],\n            "386" : ["768008", "768007", "768009"],\n            "387" : ["768011", "768010", "768012"],\n            "421" : ["768215", "768214", "768216"],\n            "455" : ["768053", "768052", "768054"],\n            "457" : ["768056", "768055", "768057"],\n            "459" : ["794459", "794458", "794460"],\n            "471" : ["768065", "768064", "768066"],\n            "472" : ["794468", "794467", "794469"],\n            "475" : ["794481", "794480", "794482"],\n            "478" : ["768068", "768067", "768069"],\n            "557" : ["768101", "768100", "768102"],\n            "571" : ["768107", "768106", "768108"],\n            "573" : ["768110", "768109", "768111"],\n            "577" : ["768113", "768112", "768114"],\n            "524" : ["795329", "795328", "795330"],\n            "529" : ["795334", "795333", "795335"],\n            "530" : ["795342", "795341", "795343"],\n            "532" : ["795349", "795348", "795350"],\n            "533" : ["795358", "795357", "795359"],\n            "534" : ["795369", "795368", "795370"],\n            "535" : ["795378", "795377", "795379"],\n            "554" : ["795385", "795384", "795386"],\n            "555" : ["795400", "795399", "795401"],\n            "556" : ["795405", "795404", "795406"],\n            "84" : ["819289", "819288", "819290"],\n            "542" : ["768569", "768568", "768570"],\n            "716" : ["768137", "768136", "768138"],\n            "1057" : ["816819", "816818", "816820"],\n            "1179" : ["820123", "820122", "820124"],\n            "1180" : ["820128", "820127", "820129"],\n            "1181" : ["820133", "820132", "820134"],\n            "1182" : ["820138", "820137", "820139"],\n            "1183" : ["820143", "820142", "820144"],\n            "1184" : ["820148", "820147", "820149"],\n            "1185" : ["820186", "820185", "820187"],\n            "1186" : ["820153", "820152", "820154"],\n            "1187" : ["820158", "820157", "820159"],\n            "1188" : ["820191", "820190", "820192"],\n            "1189" : ["820165", "820164", "820166"],\n            "1190" : ["820196", "820195", "820197"],\n            "1191" : ["820201", "820200", "820202"],\n            "693" : ["765695", "765694", "765696"],\n            "695" : ["823618", "823617", "823619"],\n            "697" : ["823623", "823622", "823624"],\n            "198" : ["823629", "823628", "823630"],\n            "317" : ["768038", "768037", "768039"],\n            "176" : ["819593", "819592", "819594"],\n            "318" : ["819598", "819597", "819599"],\n            "315" : ["768200", "768199", "768201"],\n            "922" : ["765674", "765673", "765675"],\n            "787" : ["774622", "774621", "774623"],\n            "1169" : ["819606", "819605", "819607"],\n            "463" : ["820170", "820169", "820171"],\n            "276" : ["767836", "767835", "767837"],\n            "790" : ["768185", "768184", "768186"],\n            "789" : ["768203", "768202", "768204"],\n            "791" : ["768221", "768220", "768222"],\n            "238" : ["767724", "767723", "767725"],\n            "256" : ["820175", "820174", "820176"],\n            "235" : ["767711", "767710", "767712"],\n            "239" : ["767729", "767728", "767731"],\n            "469" : ["768062", "768061", "768063"],\n            "963" : ["774361", "774360", "774363"],\n            "1082" : ["812778", "812777", "812779"],\n            "704" : ["768155", "768154", "768156"],\n            "446" : ["819318", "819317", "819319"],\n            "1040" : ["774646", "774645", "774647"],\n            "1035" : ["790887", "790886", "790888"],\n            "1036" : ["790912", "790911", "790913"],\n            "1041" : ["774638", "774637", "774639"],\n            "70" : ["819323", "819322", "819324"],\n            "930" : ["768152", "768151", "768153"],\n            "914" : ["768140", "768139", "768141"],\n            "788" : ["768191", "768190", "768192"],\n            "1056" : ["790892", "790891", "790893"],\n            "678" : ["827753", "827752", "827754"],\n            "917" : ["828180", "828176", "828177"],\n            "913" : ["768167", "768166", "768168"],\n            "329" : ["767919", "767918", "767920"],\n            "672" : ["768197", "768196", "768198"],\n            "261" : ["792090", "792089", "792091"],\n            "328" : ["767909", "767908", "767910"],\n            "335" : ["794355", "794354", "794356"],\n            "1008" : ["790917", "790916", "790918"],\n            "333" : ["829847", "829846", "829848"],\n            "466" : ["829835", "829834", "829836"],\n            "479" : ["768071", "768070", "768072"],\n            "587" : ["812766", "812765", "812767"],\n            "583" : ["768119", "768118", "768120"],\n            "836" : ["829860", "829859", "829861"],\n            "472" : ["794468", "794467", "794469"],\n            "156" : ["767556", "767555", "767557"],\n            "169" : ["830200", "830199", "830201"],\n            "168" : ["767594", "767593", "767595"],\n            "167" : ["767582", "767581", "767583"],\n            "344" : ["790921", "790920", "790922"],\n            "216" : ["767657", "767656", "767658"],\n            "217" : ["767662", "767661", "767663"],\n            "221" : ["767681", "767680", "767682"],\n            "220" : ["767676", "767675", "767677"],\n            "223" : ["767689", "767688", "767690"],\n            "222" : ["767685", "767684", "767686"],\n            "213" : ["767647", "767646", "767648"],\n            "219" : ["767671", "767670", "767672"],\n            "200" : ["831220", "831219", "831221"],\n            "218" : ["767666", "767665", "767667"],\n            "182" : ["767604", "767603", "767605"],\n            "214" : ["767651", "767650", "767652"],\n            "150" : ["831736", "831735", "831737"],\n            "151" : ["831747", "831746", "831748"],\n            "565" : ["812734", "812733", "812735"],\n            "268" : ["767805", "767804", "767806"],\n            "281" : ["765671", "765670", "765672"],\n            "1211" : ["833018", "833017", "833019"],\n            "1205" : ["833031", "833030", "833032"],\n            "1216" : ["833166", "833165", "833167"],\n            "175" : ["833213", "833212", "833214"],\n            "191" : ["767619", "767618", "767620"],\n            "498" : ["819638", "819637", "819639"],\n            "164" : ["765677", "765676", "765678"],\n            "525" : ["823417", "823416", "823418"],\n            "442" : ["768044", "768043", "768045"],\n            "338" : ["834040", "834039", "834041"],\n            "422" : ["768032", "768031", "768033"],\n            "266" : ["767801", "767800", "767802"],\n            "254" : ["767777", "767776", "767778"],\n            "1178" : ["836020", "836019", "836021"],\n			"944" : ["844815", "844814", "844816"],\n			"1255" : ["844778", "844777", "844779"],\n			"1252" : ["845073", "845072", "845074"],\n			"1253" : ["845112", "845111", "845113"],\n			"1217" : ["845785", "845784", "845786"],\n			"1221" : ["835038", "835037", "835039"],\n			"228" : ["847512", "847511", "847513"],\n			"1254" : ["847524", "847523", "847525"],\n			"1260" : ["852212", "852211", "852213"],\n			"1262" : ["852290", "852289", "852291"],\n			"1263" : ["852338", "852337", "852339"],\n			"1264" : ["852464", "852463", "852465"],\n			"1265" : ["852504", "852503", "852505"],\n			"1266" : ["852509", "852508", "852510"],\n			"74" : ["853876", "853875", "853877"],\n			"1273" : ["854641", "854640", "854642"],\n			"1276" : ["855853", "855852", "855854"],\n			"1277" : ["855872", "855871", "855873"],\n			"183" : ["767609", "767608", "767610"],\n			"243" : ["767740", "767739", "767741"],\n			"259" : ["767791", "767790", "767792"],\n			"269" : ["767810", "767809", "767811"],\n			"274" : ["767828", "767827", "767829"],\n			"277" : ["768194", "768193", "768195"],\n			"1293" : ["880087", "880086", "880088"],\n			"1274" : ["881449", "881448", "881450"],\n			"163" : ["767573", "767572", "767574"],\n			"1312" : ["882793", "882792", "882794"],\n			"1317" : ["899097", "899096", "899091"],\n			"1325" : ["907027", "907026", "907028"],\n			"162" : ["913980", "913979", "913981"],\n			"680" : ["839778", "839777", "839779"],\n			"117" : ["921816", "921815", "921817"]\n\n            ,"119" : ["767398", "767397", "767399"]\n        }\n\nconsole.log(publishers[publisher],  window.innerWidth);\n        if(publishers[publisher]){\n            if(window.innerWidth >= 700){\n                mid = publishers[publisher][0];\n            } else if(window.innerWidth >= 468){\n                mid = publishers[publisher][1];\n            } else if(window.innerWidth >= 320){\n                mid = publishers[publisher][2];\n            }\n        }\n\nconsole.log(mid );\n        // mid=752139;\n\n        var html = \'\x3Cscript src="https://adx.adform.net/adx/?mid=\'+mid+\'"><\'+\'/script>\' \n\n        document.open(\'text/html\', \'replace\');\n        document.write(html);\n        document.close();\n		\n		var message = {\n		type: "noFormat",\n		closeDiv: {},\n		view50Url :"https://rads.recognified.net/md.tracking.php?t=lead&lead_event=90&lead_type=web_interaction&type=normal&campaign_id=13064&lead_title=view50&ad_id=40263&zone_id=3684",\n		view100Url:"https://rads.recognified.net/md.tracking.php?t=lead&lead_event=91&lead_type=web_interaction&type=normal&campaign_id=13064&lead_title=view100&ad_id=40263&zone_id=3684",\n		};\n		top.postMessage(message,"*");\n	\n    \x3C/script>\n</head>\n<body>\n<img style="display:none;" src="https://rads.recognified.net/md.tracking.php?zone_id=3684&h=abc842da2a262352f0c94a2651c4321c&t=impression&wp=2.938676&wp_curr=EUR&type=normal&campaign_id=13064&ad_id=40263&ref=aHR0cHM6Ly93d3cuYW1pY2VsbGEuZGUv&did=3942be09f38b9543b564e72e53ba9cf9&idt=100&rip=&srw=106&srh=106&dspf=0&instl=1&mraid=-1&_s=&_p=&bid_id=&pub_id=339&gts=2021-02-09_12-48-31"/>\n\n</body>\n</html>');