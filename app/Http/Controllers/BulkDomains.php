<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BulkDomains extends Controller
{
    public static function findURL() {
        $list = '{
   "Type" : "D",
   "Redirect" : "",
   "AbstractText" : "",
   "ImageHeight" : 0,
   "ImageWidth" : 0,
   "DefinitionSource" : "",
   "AnswerType" : "",
   "Answer" : "",
   "Definition" : "",
   "AbstractURL" : "https://en.wikipedia.org/wiki/Cat_(disambiguation)",
   "DefinitionURL" : "",
   "Entity" : "",
   "Infobox" : "",
   "RelatedTopics" : [
      {
         "Icon" : {
            "URL" : "https://duckduckgo.com/i/90d64e34.jpg",
            "Width" : "",
            "Height" : ""
         },
         "Text" : "Cat A small, typically furry, carnivorous mammal. They are often called house cats when kept as...",
         "FirstURL" : "https://duckduckgo.com/Cat",
         "Result" : "<a href=\"https://duckduckgo.com/Cat\">Cat</a> A small, typically furry, carnivorous mammal. They are often called house cats when kept as..."
      },
      {
         "Text" : "Cat Stevens A British singer-songwriter and multi-instrumentalist.",
         "Icon" : {
            "URL" : "https://duckduckgo.com/i/www.yusufislam.com.ico",
            "Width" : 16,
            "Height" : 16
         },
         "FirstURL" : "https://duckduckgo.com/Cat_Stevens",
         "Result" : "<a href=\"https://duckduckgo.com/Cat_Stevens\">Cat Stevens</a>A British singer-songwriter and multi-instrumentalist."
      },
      {
         "Result" : "<a href=\"https://duckduckgo.com/CT_scan\">Computed axial tomography</a>A CT scan, also known as computed tomography scan, makes use of computer-processed combinations...",
         "Text" : "Computed axial tomography A CT scan, also known as computed tomography scan, makes use of computer-processed combinations...",
         "Icon" : {
            "URL" : "",
            "Width" : "",
            "Height" : ""
         },
         "FirstURL" : "https://duckduckgo.com/CT_scan"
      },
      {
         "Topics" : [
            {
               "Result" : "<a href=\"https://duckduckgo.com/%C3%87at\">\u00c7at</a>A town and district of Erzurum Province in the Eastern Anatolia region of Turkey.",
               "FirstURL" : "https://duckduckgo.com/%C3%87at",
               "Text" : "\u00c7at A town and district of Erzurum Province in the Eastern Anatolia region of Turkey.",
               "Icon" : {
                  "URL" : "",
                  "Width" : "",
                  "Height" : ""
               }
            },
            {
               "FirstURL" : "https://duckduckgo.com/%C3%87at_Dam",
               "Text" : "\u00c7at Dam An embankment dam on the Abd\u00fclharap River, located near \u00c7elikhan in Ad\u0131yaman Province, Turkey.",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "Result" : "<a href=\"https://duckduckgo.com/%C3%87at_Dam\">\u00c7at Dam</a>An embankment dam on the Abd\u00fclharap River, located near \u00c7elikhan in Ad\u0131yaman Province, Turkey."
            },
            {
               "Text" : "Cat Cays The Cat Cays are two islands in the Bahamas, North Cat Cay and South Cat Cay, approximately south...",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/8cb8d25d.jpg",
                  "Width" : "",
                  "Height" : ""
               },
               "FirstURL" : "https://duckduckgo.com/Cat_Cays",
               "Result" : "<a href=\"https://duckduckgo.com/Cat_Cays\">Cat Cays</a>The Cat Cays are two islands in the Bahamas, North Cat Cay and South Cat Cay, approximately south..."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Kingdom_of_Cat\">Kingdom of Cat</a> A legendary Pictish kingdom originating c.",
               "FirstURL" : "https://duckduckgo.com/Kingdom_of_Cat",
               "Text" : "Kingdom of Cat A legendary Pictish kingdom originating c.",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               }
            }
         ],
         "Name" : "Places"
      },
      {
         "Name" : "In science and technology",
         "Topics" : [
            {
               "Text" : "Catalytic converter An exhaust emission control device that converts toxic gases and pollutants in exhaust gas from...",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : "https://duckduckgo.com/i/5d3a5e0b.jpg"
               },
               "FirstURL" : "https://duckduckgo.com/Catalytic_converter",
               "Result" : "<a href=\"https://duckduckgo.com/Catalytic_converter\">Catalytic converter</a>An exhaust emission control device that converts toxic gases and pollutants in exhaust gas from..."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/cat_(Unix)\">cat (Unix)</a>A standard Unix utility that reads files sequentially, writing them to standard output.",
               "FirstURL" : "https://duckduckgo.com/cat_(Unix)",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "Text" : "cat (Unix) A standard Unix utility that reads files sequentially, writing them to standard output."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Canon_Cat\">Canon Cat</a>A task-dedicated, desktop computer released by Canon Inc. in 1987 at a price of.",
               "Text" : "Canon Cat A task-dedicated, desktop computer released by Canon Inc. in 1987 at a price of.",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : "https://duckduckgo.com/i/06a87f8b.jpg"
               },
               "FirstURL" : "https://duckduckgo.com/Canon_Cat"
            },
            {
               "FirstURL" : "https://duckduckgo.com/Novation_CAT",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/053bd7bf.jpg",
                  "Width" : "",
                  "Height" : ""
               },
               "Text" : "Novation CAT An early modem manufacturer whose CAT series were popular in the early home computer market in...",
               "Result" : "<a href=\"https://duckduckgo.com/Novation_CAT\">Novation CAT</a>An early modem manufacturer whose CAT series were popular in the early home computer market in..."
            }
         ]
      },
      {
         "Topics" : [
            {
               "FirstURL" : "https://duckduckgo.com/Cat_(nickname)",
               "Text" : "Cat (nickname) A nickname, often a short form. It may refer to...",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "Result" : "<a href=\"https://duckduckgo.com/Cat_(nickname)\">Cat (nickname)</a> A nickname, often a short form. It may refer to..."
            },
            {
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "Text" : "Cat Glover A professional choreographer, dancer and singer.",
               "FirstURL" : "https://duckduckgo.com/Cat_Glover",
               "Result" : "<a href=\"https://duckduckgo.com/Cat_Glover\">Cat Glover</a> A professional choreographer, dancer and singer."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Cat_Power\">Cat Power</a>An American singer-songwriter, musician, occasional actress, and model.",
               "FirstURL" : "https://duckduckgo.com/Cat_Power",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/b63c84f3.jpg",
                  "Width" : "",
                  "Height" : ""
               },
               "Text" : "Cat Power An American singer-songwriter, musician, occasional actress, and model."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Cat_Rambo\">Cat Rambo</a>An American science fiction and fantasy writer and editor.",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/4e2e4637.jpg",
                  "Height" : "",
                  "Width" : ""
               },
               "Text" : "Cat Rambo An American science fiction and fantasy writer and editor.",
               "FirstURL" : "https://duckduckgo.com/Cat_Rambo"
            },
            {
               "Text" : "Cat Stevens A British singer-songwriter and multi-instrumentalist.",
               "Icon" : {
                  "Height" : 16,
                  "Width" : 16,
                  "URL" : "https://duckduckgo.com/i/www.yusufislam.com.ico"
               },
               "FirstURL" : "https://duckduckgo.com/Cat_Stevens",
               "Result" : "<a href=\"https://duckduckgo.com/Cat_Stevens\">Cat Stevens</a>A British singer-songwriter and multi-instrumentalist."
            }
         ],
         "Name" : "People"
      },
      {
         "Topics" : [
            {
               "Result" : "<a href=\"https://duckduckgo.com/Cat_(Red_Dwarf)\">Cat (Red Dwarf)</a>A fictional character in the British science fiction sitcom Red Dwarf.",
               "FirstURL" : "https://duckduckgo.com/Cat_(Red_Dwarf)",
               "Text" : "Cat (Red Dwarf) A fictional character in the British science fiction sitcom Red Dwarf.",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/d49ea1c4.jpg",
                  "Height" : "",
                  "Width" : ""
               }
            },
            {
               "FirstURL" : "https://duckduckgo.com/Cat_MacKenzie",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "Text" : "Cat MacKenzie A fictional character in UK soap opera Family Affairs, played by Nicola Duffett from 1998 until...",
               "Result" : "<a href=\"https://duckduckgo.com/Cat_MacKenzie\">Cat MacKenzie</a>A fictional character in UK soap opera Family Affairs, played by Nicola Duffett from 1998 until..."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Cat_Valentine_(Sam_%26_Cat)\">Cat Valentine</a> On the Nickelodeon television series Sam & Cat.",
               "Icon" : {
                  "URL" : "",
                  "Width" : "",
                  "Height" : ""
               },
               "Text" : "Cat Valentine On the Nickelodeon television series Sam & Cat.",
               "FirstURL" : "https://duckduckgo.com/Cat_Valentine_(Sam_%26_Cat)"
            },
            {
               "Text" : "Cat Valentine On the Nickelodeon television series Victorious.",
               "Icon" : {
                  "URL" : "",
                  "Width" : "",
                  "Height" : ""
               },
               "FirstURL" : "https://duckduckgo.com/Cat_Valentine_(Victorious)",
               "Result" : "<a href=\"https://duckduckgo.com/Cat_Valentine_(Victorious)\">Cat Valentine</a> On the Nickelodeon television series Victorious."
            }
         ],
         "Name" : "Fictional characters"
      },
      {
         "Topics" : [
            {
               "FirstURL" : "https://duckduckgo.com/Cat_o\'_nine_tails",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/8056da57.jpg",
                  "Width" : "",
                  "Height" : ""
               },
               "Text" : "Cat o\' nine tails A type of multi-tailed whip that originated as an implement for severe physical punishment...",
               "Result" : "<a href=\"https://duckduckgo.com/Cat_o\'_nine_tails\">Cat o\' nine tails</a>A type of multi-tailed whip that originated as an implement for severe physical punishment..."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Cat_(zodiac)\">Cat (zodiac)</a>The fourth animal symbol in the 12-year cycle of the Vietnamese zodiac and Gurung zodiac, taking...",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : ""
               },
               "Text" : "Cat (zodiac) The fourth animal symbol in the 12-year cycle of the Vietnamese zodiac and Gurung zodiac, taking...",
               "FirstURL" : "https://duckduckgo.com/Cat_(zodiac)"
            },
            {
               "FirstURL" : "https://duckduckgo.com/Cat_Records",
               "Icon" : {
                  "URL" : "",
                  "Width" : "",
                  "Height" : ""
               },
               "Text" : "Cat Records A short-lived subsidiary of Atlantic Records, specializing in rhythm and blues music.",
               "Result" : "<a href=\"https://duckduckgo.com/Cat_Records\">Cat Records</a> A short-lived subsidiary of Atlantic Records, specializing in rhythm and blues music."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Cat_Records_(TK_label)",
               "Icon" : {
                  "URL" : "",
                  "Width" : "",
                  "Height" : ""
               },
               "Text" : "Cat Records (TK label) A subsidiary of TK Productions whose flagship label was TK Records.",
               "Result" : "<a href=\"https://duckduckgo.com/Cat_Records_(TK_label)\">Cat Records (TK label)</a>A subsidiary of TK Productions whose flagship label was TK Records."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Catalan_language\">Catalan language</a>A Western Romance language derived from Vulgar Latin and named after the medieval Principality of...",
               "FirstURL" : "https://duckduckgo.com/Catalan_language",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : "https://duckduckgo.com/i/8595407a.png"
               },
               "Text" : "Catalan language A Western Romance language derived from Vulgar Latin and named after the medieval Principality of..."
            },
            {
               "FirstURL" : "https://duckduckgo.com/.cat",
               "Text" : ".cat .cat is a sponsored top-level domain intended to be used to highlight the Catalan language and...",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/9d76716b.png",
                  "Width" : "",
                  "Height" : ""
               },
               "Result" : "<a href=\"https://duckduckgo.com/.cat\">.cat</a>.cat is a sponsored top-level domain intended to be used to highlight the Catalan language and..."
            }
         ],
         "Name" : "Other uses"
      },
      {
         "Topics" : [
            {
               "Result" : "<a href=\"https://duckduckgo.com/CAT_Telecom\">CAT Telecom</a>The state-owned company that runs Thailand\'s international telecommunications infrastructure...",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "Text" : "CAT Telecom The state-owned company that runs Thailand\'s international telecommunications infrastructure...",
               "FirstURL" : "https://duckduckgo.com/CAT_Telecom"
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Cambridge_Antibody_Technology\">Cambridge Antibody Technology</a>A biotechnology company headquartered in Cambridge, England, United Kingdom.",
               "Text" : "Cambridge Antibody Technology A biotechnology company headquartered in Cambridge, England, United Kingdom.",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : "https://duckduckgo.com/i/3e45f6e2.png"
               },
               "FirstURL" : "https://duckduckgo.com/Cambridge_Antibody_Technology"
            },
            {
               "FirstURL" : "https://duckduckgo.com/Caterpillar_Inc.",
               "Text" : "Caterpillar Inc. Caterpillar Inc. is an American Fortune 100 corporation which designs, develops, engineers...",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : "https://duckduckgo.com/i/9f4052a6.png"
               },
               "Result" : "<a href=\"https://duckduckgo.com/Caterpillar_Inc.\">Caterpillar Inc.</a>Caterpillar Inc. is an American Fortune 100 corporation which designs, develops, engineers..."
            },
            {
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : "https://duckduckgo.com/i/d16073b0.png"
               },
               "Text" : "Centre for Alternative Technology An eco-centre in Powys, mid-Wales, dedicated to demonstrating and teaching sustainable development.",
               "FirstURL" : "https://duckduckgo.com/Centre_for_Alternative_Technology",
               "Result" : "<a href=\"https://duckduckgo.com/Centre_for_Alternative_Technology\">Centre for Alternative Technology</a>An eco-centre in Powys, mid-Wales, dedicated to demonstrating and teaching sustainable development."
            },
            {
               "Text" : "Cognitive Abilities Test A group-administered K\u201312 assessment intended to estimate students\' learned reasoning and problem...",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : ""
               },
               "FirstURL" : "https://duckduckgo.com/Cognitive_Abilities_Test",
               "Result" : "<a href=\"https://duckduckgo.com/Cognitive_Abilities_Test\">Cognitive Abilities Test</a>A group-administered K\u201312 assessment intended to estimate students\' learned reasoning and problem..."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Colegio_Americano_de_Torre%C3%B3n\">Colegio Americano de Torre\u00f3n</a>Colegio Americano de Torre\u00f3n, A.C. or the American School of Torre\u00f3n is an American international...",
               "Text" : "Colegio Americano de Torre\u00f3n Colegio Americano de Torre\u00f3n, A.C. or the American School of Torre\u00f3n is an American international...",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : ""
               },
               "FirstURL" : "https://duckduckgo.com/Colegio_Americano_de_Torre%C3%B3n"
            },
            {
               "Text" : "Common Admission Test A computer based test held in India.",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/www.cat2013.iimidr.ac.in.ico",
                  "Height" : 16,
                  "Width" : 16
               },
               "FirstURL" : "https://duckduckgo.com/Common_Admission_Test",
               "Result" : "<a href=\"https://duckduckgo.com/Common_Admission_Test\">Common Admission Test</a>A computer based test held in India."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Computerized_adaptive_testing",
               "Text" : "Computerized adaptive testing A form of computer-based test that adapts to the examinee\'s ability level.",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "Result" : "<a href=\"https://duckduckgo.com/Computerized_adaptive_testing\">Computerized adaptive testing</a>A form of computer-based test that adapts to the examinee\'s ability level."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/CAT_(phototypesetter)\">CAT (phototypesetter)</a>A phototypesetter developed by Graphic Systems in 1972.",
               "FirstURL" : "https://duckduckgo.com/CAT_(phototypesetter)",
               "Text" : "CAT (phototypesetter) A phototypesetter developed by Graphic Systems in 1972.",
               "Icon" : {
                  "URL" : "",
                  "Height" : "",
                  "Width" : ""
               }
            },
            {
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : "https://duckduckgo.com/i/57bfb6d7.jpg"
               },
               "Text" : "CAT(k) space A specific type of metric space in mathematics.",
               "FirstURL" : "https://duckduckgo.com/CAT(k)_space",
               "Result" : "<a href=\"https://duckduckgo.com/CAT(k)_space\">CAT(k) space</a> A specific type of metric space in mathematics."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Catadioptric_system",
               "Text" : "Catadioptric system A catadioptric optical system is one where refraction and reflection are combined in an optical...",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/8780f876.jpg",
                  "Height" : "",
                  "Width" : ""
               },
               "Result" : "<a href=\"https://duckduckgo.com/Catadioptric_system\">Catadioptric system</a>A catadioptric optical system is one where refraction and reflection are combined in an optical..."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Catalase\">Catalase</a>A common enzyme found in nearly all living organisms exposed to oxygen.",
               "FirstURL" : "https://duckduckgo.com/Catalase",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : "https://duckduckgo.com/i/1cb0b83d.jpg"
               },
               "Text" : "Catalase A common enzyme found in nearly all living organisms exposed to oxygen."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Cherenkov_Array_at_Themis",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "Text" : "Cherenkov Array at Themis An atmospheric Cherenkov imaging telescope for detection of high-energy gamma rays, sited in the...",
               "Result" : "<a href=\"https://duckduckgo.com/Cherenkov_Array_at_Themis\">Cherenkov Array at Themis</a>An atmospheric Cherenkov imaging telescope for detection of high-energy gamma rays, sited in the..."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Chloramphenicol_acetyltransferase\">Chloramphenicol acetyltransferase</a>A bacterial enzyme that detoxifies the antibiotic chloramphenicol and is responsible for...",
               "FirstURL" : "https://duckduckgo.com/Chloramphenicol_acetyltransferase",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : "https://duckduckgo.com/i/83304511.png"
               },
               "Text" : "Chloramphenicol acetyltransferase A bacterial enzyme that detoxifies the antibiotic chloramphenicol and is responsible for..."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Cognitive_analytic_therapy",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/bc5b7cb8.jpg",
                  "Height" : "",
                  "Width" : ""
               },
               "Text" : "Cognitive analytic therapy A form of psychological therapy initially developed in the United Kingdom by Anthony Ryle.",
               "Result" : "<a href=\"https://duckduckgo.com/Cognitive_analytic_therapy\">Cognitive analytic therapy</a> A form of psychological therapy initially developed in the United Kingdom by Anthony Ryle."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Communication_accommodation_theory\">Communication accommodation theory</a>A theory of communication developed by Howard Giles.",
               "Icon" : {
                  "URL" : "",
                  "Height" : "",
                  "Width" : ""
               },
               "Text" : "Communication accommodation theory A theory of communication developed by Howard Giles.",
               "FirstURL" : "https://duckduckgo.com/Communication_accommodation_theory"
            },
            {
               "Icon" : {
                  "URL" : "",
                  "Width" : "",
                  "Height" : ""
               },
               "Text" : "Computed axial tomography A CT scan, also known as computed tomography scan, makes use of computer-processed combinations...",
               "FirstURL" : "https://duckduckgo.com/CT_scan",
               "Result" : "<a href=\"https://duckduckgo.com/CT_scan\">Computed axial tomography</a>A CT scan, also known as computed tomography scan, makes use of computer-processed combinations..."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Conidial_anastomosis_tubes",
               "Text" : "Conidial anastomosis tubes Conidial anastomosis tubes are cells formed from the conidia of many filamentous fungi.",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "Result" : "<a href=\"https://duckduckgo.com/Conidial_anastomosis_tubes\">Conidial anastomosis tubes</a>Conidial anastomosis tubes are cells formed from the conidia of many filamentous fungi."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Cosmic_Anisotropy_Telescope\">Cosmic Anisotropy Telescope</a>A three-element interferometer for cosmic microwave background radiation observations at 13 to 17...",
               "FirstURL" : "https://duckduckgo.com/Cosmic_Anisotropy_Telescope",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "Text" : "Cosmic Anisotropy Telescope A three-element interferometer for cosmic microwave background radiation observations at 13 to 17..."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Talleres_de_C%C3%B3rdoba",
               "Text" : "Club Atl\u00e9tico Talleres An Argentine sports club from the city of C\u00f3rdoba.",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : "https://duckduckgo.com/i/c61be597.png"
               },
               "Result" : "<a href=\"https://duckduckgo.com/Talleres_de_C%C3%B3rdoba\">Club Atl\u00e9tico Talleres</a>An Argentine sports club from the city of C\u00f3rdoba."
            },
            {
               "Text" : "Club Atl\u00e9tico Tucum\u00e1n An Argentinian football club based in the city of San Miguel de Tucum\u00e1n of Tucum\u00e1n Province.",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/4b7153a2.png",
                  "Height" : "",
                  "Width" : ""
               },
               "FirstURL" : "https://duckduckgo.com/Atl%C3%A9tico_Tucum%C3%A1n",
               "Result" : "<a href=\"https://duckduckgo.com/Atl%C3%A9tico_Tucum%C3%A1n\">Club Atl\u00e9tico Tucum\u00e1n</a> An Argentinian football club based in the city of San Miguel de Tucum\u00e1n of Tucum\u00e1n Province."
            },
            {
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : "https://duckduckgo.com/i/e695c6fc.png"
               },
               "Text" : "Canby Area Transit The public transit bus service provided by and for the US city of Canby, Oregon.",
               "FirstURL" : "https://duckduckgo.com/Canby_Area_Transit",
               "Result" : "<a href=\"https://duckduckgo.com/Canby_Area_Transit\">Canby Area Transit</a> The public transit bus service provided by and for the US city of Canby, Oregon."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Capital_Area_Transit_(Harrisburg)\">Capital Area Transit (Harrisburg)</a>A regional public transportation agency that operates bus and paratransit service in the...",
               "FirstURL" : "https://duckduckgo.com/Capital_Area_Transit_(Harrisburg)",
               "Text" : "Capital Area Transit (Harrisburg) A regional public transportation agency that operates bus and paratransit service in the...",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : "https://duckduckgo.com/i/8491aa96.png"
               }
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/GoRaleigh\">Capital Area Transit (Raleigh)</a>The transit system responsible for operating most of the public transportation services in...",
               "FirstURL" : "https://duckduckgo.com/GoRaleigh",
               "Icon" : {
                  "URL" : "",
                  "Height" : "",
                  "Width" : ""
               },
               "Text" : "Capital Area Transit (Raleigh) The transit system responsible for operating most of the public transportation services in..."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Center_for_Appropriate_Transport",
               "Icon" : {
                  "Height" : 16,
                  "Width" : 16,
                  "URL" : "https://duckduckgo.com/i/www.catoregon.org.ico"
               },
               "Text" : "Center for Appropriate Transport A non-profit community center dedicated to bicycles and alternative transport located in Eugene...",
               "Result" : "<a href=\"https://duckduckgo.com/Center_for_Appropriate_Transport\">Center for Appropriate Transport</a>A non-profit community center dedicated to bicycles and alternative transport located in Eugene..."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Charlottesville_Area_Transit",
               "Text" : "Charlottesville Area Transit The provider of mass transportation in Charlottesville, Virginia.",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/2013387b.png",
                  "Height" : "",
                  "Width" : ""
               },
               "Result" : "<a href=\"https://duckduckgo.com/Charlottesville_Area_Transit\">Charlottesville Area Transit</a>The provider of mass transportation in Charlottesville, Virginia."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Chatham_Area_Transit",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/f8604964.png",
                  "Height" : "",
                  "Width" : ""
               },
               "Text" : "Chatham Area Transit The provider of public transportation in the Savannah, Georgia metropolitan area.",
               "Result" : "<a href=\"https://duckduckgo.com/Chatham_Area_Transit\">Chatham Area Transit</a>The provider of public transportation in the Savannah, Georgia metropolitan area."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/City_Airport_Train\">City Airport Train</a>An express train that connects Vienna International Airport and Vienna city center in 16 minutes...",
               "Text" : "City Airport Train An express train that connects Vienna International Airport and Vienna city center in 16 minutes...",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/519a9d40.jpg",
                  "Height" : "",
                  "Width" : ""
               },
               "FirstURL" : "https://duckduckgo.com/City_Airport_Train"
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Civil_Air_Transport\">Civil Air Transport</a>A Nationalist Chinese airline, later owned by the CIA, that supported United States covert...",
               "FirstURL" : "https://duckduckgo.com/Civil_Air_Transport",
               "Text" : "Civil Air Transport A Nationalist Chinese airline, later owned by the CIA, that supported United States covert...",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : "https://duckduckgo.com/i/64dc2fcc.png"
               }
            },
            {
               "Text" : "Clear-air turbulence The turbulent movement of air masses in the absence of any visual clues such as clouds, and is...",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/33ee7364.png",
                  "Width" : "",
                  "Height" : ""
               },
               "FirstURL" : "https://duckduckgo.com/Clear-air_turbulence",
               "Result" : "<a href=\"https://duckduckgo.com/Clear-air_turbulence\">Clear-air turbulence</a>The turbulent movement of air masses in the absence of any visual clues such as clouds, and is..."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Clemson_Area_Transit\">Clemson Area Transit</a>The most frequently used transit system in South Carolina.",
               "Text" : "Clemson Area Transit The most frequently used transit system in South Carolina.",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : "https://duckduckgo.com/i/52d15d22.png"
               },
               "FirstURL" : "https://duckduckgo.com/Clemson_Area_Transit"
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Collier_Area_Transit\">Collier Area Transit</a>The public transportation system in Collier County, Florida.",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/0c6d1854.png",
                  "Width" : "",
                  "Height" : ""
               },
               "Text" : "Collier Area Transit The public transportation system in Collier County, Florida.",
               "FirstURL" : "https://duckduckgo.com/Collier_Area_Transit"
            },
            {
               "FirstURL" : "https://duckduckgo.com/Perth_Central_Area_Transit",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : "https://duckduckgo.com/i/8f2a90e6.png"
               },
               "Text" : "Perth Central Area Transit The Perth Central Area Transit System, or simply CAT, is four bus routes in the centre of Perth...",
               "Result" : "<a href=\"https://duckduckgo.com/Perth_Central_Area_Transit\">Perth Central Area Transit</a>The Perth Central Area Transit System, or simply CAT, is four bus routes in the centre of Perth..."
            },
            {
               "Text" : "CAT (magazine) An international simulation and training publication produced bi-monthly in the UK by Halldale...",
               "Icon" : {
                  "Width" : 16,
                  "Height" : 16,
                  "URL" : "https://duckduckgo.com/i/www.halldale.com.ico"
               },
               "FirstURL" : "https://duckduckgo.com/CAT_(magazine)",
               "Result" : "<a href=\"https://duckduckgo.com/CAT_(magazine)\">CAT (magazine)</a>An international simulation and training publication produced bi-monthly in the UK by Halldale..."
            },
            {
               "FirstURL" : "https://duckduckgo.com/Canadian_Army_Trophy",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : "https://duckduckgo.com/i/2d6d5218.jpg"
               },
               "Text" : "Canadian Army Trophy A tank gunnery competition established to foster excellence, camaraderie and competition among...",
               "Result" : "<a href=\"https://duckduckgo.com/Canadian_Army_Trophy\">Canadian Army Trophy</a>A tank gunnery competition established to foster excellence, camaraderie and competition among..."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Central_Africa_Time\">Central Africa Time</a> A time zone used in central and southern Africa.",
               "Text" : "Central Africa Time A time zone used in central and southern Africa.",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "FirstURL" : "https://duckduckgo.com/Central_Africa_Time"
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Certified_Accounting_Technician\">Certified Accounting Technician</a>The Certified Accounting Technician UK qualification is offered by the Association of Chartered...",
               "Text" : "Certified Accounting Technician The Certified Accounting Technician UK qualification is offered by the Association of Chartered...",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               },
               "FirstURL" : "https://duckduckgo.com/Certified_Accounting_Technician"
            },
            {
               "Text" : "Competition Appeal Tribunal The Competition Appeal Tribunal of the United Kingdom was created by Section 12 and Schedule 2 to...",
               "Icon" : {
                  "Height" : 16,
                  "Width" : 16,
                  "URL" : "https://duckduckgo.com/i/www.catribunal.org.uk.ico"
               },
               "FirstURL" : "https://duckduckgo.com/Competition_Appeal_Tribunal",
               "Result" : "<a href=\"https://duckduckgo.com/Competition_Appeal_Tribunal\">Competition Appeal Tribunal</a>The Competition Appeal Tribunal of the United Kingdom was created by Section 12 and Schedule 2 to..."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/Computer-assisted_translation\">Computer-assisted translation</a>A form of language translation in which a human translator uses computer hardware to support and...",
               "Text" : "Computer-assisted translation A form of language translation in which a human translator uses computer hardware to support and...",
               "Icon" : {
                  "URL" : "",
                  "Width" : "",
                  "Height" : ""
               },
               "FirstURL" : "https://duckduckgo.com/Computer-assisted_translation"
            },
            {
               "FirstURL" : "https://duckduckgo.com/United_States_Secret_Service",
               "Icon" : {
                  "URL" : "https://duckduckgo.com/i/56b3ec3b.png",
                  "Height" : "",
                  "Width" : ""
               },
               "Text" : "Counter Assault Team A federal law enforcement agency under the U.S. Department of Homeland Security, charged with...",
               "Result" : "<a href=\"https://duckduckgo.com/United_States_Secret_Service\">Counter Assault Team</a>A federal law enforcement agency under the U.S. Department of Homeland Security, charged with..."
            }
         ],
         "Name" : "CAT or C.A.T."
      },
      {
         "Topics" : [
            {
               "Result" : "<a href=\"https://duckduckgo.com/d/Cat_Island\">Cat Island Meanings</a>  Various places with that name.",
               "Text" : "Cat Island Meanings Various places with that name.",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : ""
               },
               "FirstURL" : "https://duckduckgo.com/d/Cat_Island"
            },
            {
               "FirstURL" : "https://duckduckgo.com/d/Cat_(comics)",
               "Text" : "Cat (comics) Meanings A list of various characters.",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : ""
               },
               "Result" : "<a href=\"https://duckduckgo.com/d/Cat_(comics)\">Cat (comics) Meanings</a>  A list of various characters."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/d/Committee_Against_Torture\">Committee Against Torture Meanings</a>  See related meanings for the phrase \'Committee Against Torture\'.",
               "Icon" : {
                  "URL" : "",
                  "Height" : "",
                  "Width" : ""
               },
               "Text" : "Committee Against Torture Meanings See related meanings for the phrase \'Committee Against Torture\'.",
               "FirstURL" : "https://duckduckgo.com/d/Committee_Against_Torture"
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/d/The_Cat\">The Cat Meanings</a>  See related meanings for the phrase \'The Cat\'.",
               "FirstURL" : "https://duckduckgo.com/d/The_Cat",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : ""
               },
               "Text" : "The Cat Meanings See related meanings for the phrase \'The Cat\'."
            },
            {
               "Text" : "Category Meanings See related meanings for the word \'Category\'.",
               "Icon" : {
                  "URL" : "",
                  "Height" : "",
                  "Width" : ""
               },
               "FirstURL" : "https://duckduckgo.com/d/Category",
               "Result" : "<a href=\"https://duckduckgo.com/d/Category\">Category Meanings</a>  See related meanings for the word \'Category\'."
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/d/Cats\">Cats Meanings</a>  See related meanings for the word \'Cats\'.",
               "FirstURL" : "https://duckduckgo.com/d/Cats",
               "Text" : "Cats Meanings See related meanings for the word \'Cats\'.",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : ""
               }
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/d/Kat\">Kat Meanings</a>  See related meanings for the word \'Kat\'.",
               "FirstURL" : "https://duckduckgo.com/d/Kat",
               "Text" : "Kat Meanings See related meanings for the word \'Kat\'.",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : ""
               }
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/d/Pussycat\">Pussycat Meanings</a>  See related meanings for the word \'Pussycat\'.",
               "FirstURL" : "https://duckduckgo.com/d/Pussycat",
               "Text" : "Pussycat Meanings See related meanings for the word \'Pussycat\'.",
               "Icon" : {
                  "Height" : "",
                  "Width" : "",
                  "URL" : ""
               }
            },
            {
               "Result" : "<a href=\"https://duckduckgo.com/d/Qat\">Qat Meanings</a>  See related meanings for the word \'Qat\'.",
               "Text" : "Qat Meanings See related meanings for the word \'Qat\'.",
               "Icon" : {
                  "Width" : "",
                  "Height" : "",
                  "URL" : ""
               },
               "FirstURL" : "https://duckduckgo.com/d/Qat"
            }
         ],
         "Name" : "See also"
      }
   ],
   "Results" : [],
   "AbstractSource" : "Wikipedia",
   "meta" : {
      "tab" : "About",
      "description" : "Wikipedia",
      "blockgroup" : null,
      "unsafe" : 0,
      "maintainer" : {
         "github" : "duckduckgo"
      },
      "src_url" : null,
      "example_query" : "nikola tesla",
      "name" : "Wikipedia",
      "repo" : "fathead",
      "src_id" : 1,
      "producer" : null,
      "topic" : [
         "productivity"
      ],
      "js_callback_name" : "wikipedia",
      "src_options" : {
         "directory" : "",
         "is_wikipedia" : 1,
         "skip_image_name" : 0,
         "is_mediawiki" : 1,
         "skip_abstract_paren" : 0,
         "skip_end" : "0",
         "skip_abstract" : 0,
         "skip_icon" : 0,
         "is_fanon" : 0,
         "source_skip" : "",
         "skip_qr" : "",
         "src_info" : "",
         "language" : "en",
         "min_abstract_length" : "20"
      },
      "attribution" : null,
      "perl_module" : "DDG::Fathead::Wikipedia",
      "dev_milestone" : "live",
      "status" : "live",
      "created_date" : null,
      "developer" : [
         {
            "name" : "DDG Team",
            "url" : "http://www.duckduckhack.com",
            "type" : "ddg"
         }
      ],
      "src_name" : "Wikipedia",
      "signal_from" : "wikipedia_fathead",
      "production_state" : "online",
      "dev_date" : null,
      "is_stackexchange" : null,
      "designer" : null,
      "id" : "wikipedia_fathead",
      "src_domain" : "en.wikipedia.org",
      "live_date" : null
   },
   "ImageIsLogo" : 0,
   "Heading" : "Cat",
   "Abstract" : "",
   "Image" : ""
}
';
        preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $list, $match);
        var_dump($match[0]);
    }
}
