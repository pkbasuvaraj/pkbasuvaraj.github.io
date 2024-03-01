<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage | Praveen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            margin: 0;
        }
        #menu {
            width: 280px;
            background-color: #034987;
            color: #fff;
            padding: 20px;
            height: 100vh;
            font-size: 18px;
        }
        #content {
            flex: 1;
            padding: 20px;
            background-color: #fff;
        }
        #content h1 {
            color: #333;
        }
        #content p {
            color: #666;
        }
        address {
            display: block !important;
            color: #000 !important;
            /* Add any other styles you need */
        }
        .download-link {
            color: #fff;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            background-color: #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .download-link:hover {
            background-color: #0056b3;
            text-decoration: none;
        }
        a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
.science-logos {
    display: flex; /* Use flexbox for a straight line */
    align-items: center; /* Align items vertically in the center */
}

.logo {
    width: 30px;
    height: 30px;
    margin-right: 10px; /* Add margin to separate the logos */
}
        .footer {
            background-color: #034987;
            color: #fff;
            padding: 20px;
            text-align: center;
            bottom: 0;
            width: 225px; /* Same width as the menu for consistency */
        }
table {
    border-collapse: collapse;
    width: 100%;
}

table, th, td {
    border: 0px solid black;
    padding: 5px; /* Adjust the padding to reduce cell height and spacing */
}

th, td {
    text-align: left;
}

table tr {
    line-height: 1.2;
    height: 20px; /* Adjust the height to reduce cell height */
}

/* Style for the Research Experience table */
#research-experience-table {
    width: 55%;
    margin-top: 20px;
}

/* Style for the Education table */
#education-table {
    width: 55%;
    margin-top: 20px;
}
/* Style for the Education table */
#grants-table {
    width: 80%;
    margin-top: 20px;
}
/* Style for the Committee Memberships table */
#committee-table {
    width: 35%;
    margin-top: 20px;
}

/* Style for the Honors and Awards table */
#honors-awards-table {
    width: 55%;
    margin-top: 20px;
}
    </style>
</head>
<body>
    <div id="menu" div align="left">
        <img src="images/profile_picture.jpg" alt="Your Image" style="max-width: 100%; height: auto; margin-bottom: 20px;">
        <ul>
            <li><a href="javascript:void(0)" onclick="loadHome()">Home</a></li>
            <li><a href="javascript:void(0)" onclick="loadCV()">Curriculum Vitae</a></li>
            <li><a href="javascript:void(0)" onclick="loadResearch()">Research</a></li>
            <li><a href="javascript:void(0)" onclick="loadPublications()">Publications</a></li>
            <li><a href="javascript:void(0)" onclick="loadConferences()">Conferences</a></li>
            <li><a href="javascript:void(0)" onclick="loadPhotos()">Photos</a></li>
        </ul>

        <br>
 
    <div id="science-ids">
    <div class="science-logos">
    <a class='external' href="https://orcid.org/0000-0002-1779-0331" target="_blank"><img src="logos/orcid-logo.png" alt="ORCID" class="logo"></a>
    <a class='external' href="https://www.researcherid.com/rid/N-7838-2018" target="_blank"><img src="logos/researcherid-logo.png" alt="ResearchGate" class="logo"></a>
    <a class='external' href="https://www.scopus.com/authid/detail.uri?authorId=57212026711" target="_blank"><img src="logos/scopus-logo.png" alt="Scopus" class="logo"></a>
    <a class='external' href="https://github.com/pkbasuvaraj" target="_blank"><img src="logos/github-logo.png" alt="GitHub" class="logo"></a>
    <a class='external' href="https://scholar.google.co.in/citations?user=ZY4HKMoAAAAJ&hl=en" target="_blank"><img src="logos/google-scholar-logo.jpg" alt="Google Scholar" class="logo"></a>
    <a class='external' href="https://www.semanticscholar.org/author/1388401732" target="_blank"><img src="logos/semantic-scholar-logo.png" alt="Semantic Scholar" class="logo"></a>
    </div>
    </div>
    
    <br><br>
    <div id="last-updated">
    </div>
        
        <footer class="footer" style="height: 10px;">
        <p>&copy; <?php echo date('Y'); ?>  Praveen Basuvaraj. All rights reserved.</p>
        </footer>
        
        </div>

        <div id="content">
        <div id="homepage" div align="left">
        <h2>Praveen Kumar Basuvaraj</h2>
        <h3>Doctoral Student</h3>
        <h4>Space Physics Group</h4>
        <h4>Department of Surface and Plasma Science</h4>
        <h4>Faculty of Mathematics and Physics</h4>
        <h4>Charles University</h4>
        <h4>V Holešovičkách 2, Prague 18000 Czech Republic</h4>       
        <img src="images/png-email.png" width="300" height="30" alt="png-email">
        </br>
        </div>

<div id="cv" style="display: none;">
    <h1>Curriculum Vitae</h1>
 <h3 style="color: blue;">Research Experience</h3>
<table id="research-experience-table">
    <tr>
        <td>11/2021 – present</td>
        <td>Researcher</td>
        <td>Charles University, Prague, Czech Republic</td>
    </tr>
    <tr>
        <td>04/2017 – 03/2021</td>
        <td>Research Fellow</td>
        <td>Bangalore University, Bengaluru, India</td>
    </tr>
</table>

<h3 style="color: blue;">Education</h3>
<table id="education-table">
    <tr>
        <td>10/2021 – present</td>
        <td>Ph.D. in Space Physics</td>
        <td>Charles University, Prague, Czech Republic</td>
    </tr>
    <tr>
        <td>09/2014 – 07/2016</td>
        <td>M.Sc. in Physics</td>
        <td>Bangalore University, Bengaluru, India</td>
    </tr>
    <tr>
        <td>07/2011 – 07/2014</td>
        <td>B.Sc. in Physics, Mathematics and Computer Science<br><i>(triple-major)</i></td>
        <td>Bangalore University, Bengaluru, India</td>
    </tr>
</table>

<h3 style="color: blue;">Grant Projects</h3>
<table id="grants-table">
    <tr>
        <td>01/2023 – 12/2025</td>
        <td>Understanding Martian ionospheric depletions using MAVEN and Mars Express spacecraft observations<br>
        <i>(GAUK 256323, Principal Researcher)</i></td>
        <td>Grant Agency of Charles University, Prague, Czech Republic</td>
    </tr>
    <tr>
        <td>11/2016 – 03/2021</td>
        <td>Observation and Modelling studies of the Atmospheric Composition of Mars<br>
        <i>(SPL:01.01.33/16, Research Fellow)</i></td>
        <td>Indian Space Research Organisation, Bengaluru, India</td>
    </tr>
</table>

<h3 style="color: blue;">Committee Memberships and Service</h3>
<table id="committee-table">
    <tr>
        <td>2023 – present</td>
        <td>American Geophysical Union (AGU)</td>
        <td>Student Member</td>
    </tr>
    <tr>
        <td>2022 – present</td>
        <td>European Geosciences Union (EGU)</td>
        <td>Student Member</td>
    </tr>
    <tr>
        <td>2018 – present</td>
        <td>Committee on Space Research (COSPAR)</td>
        <td>Associate</td>
    </tr>
</table>

<h3 style="color: blue;">Honors & Awards</h3>
<table id="honors-awards-table">
    <tr>
        <td>04/2017 – 03/2021</td>
        <td>Research Fellowship</td>
        <td>Indian Space Research Organisation, Bengaluru, India</td>
    </tr>
    <tr>
        <td>01/2017</td>
        <td>Gold Medalist (M.Sc.)</td>
        <td>Bangalore University, Bengaluru, India</td>
    </tr>
    <tr>
        <td>01/2017</td>
        <td>Top-5 University Rank Holder (M.Sc.)</td>
        <td>Bangalore University, Bengaluru, India</td>
    </tr>
    <tr>
        <td>06/2016 - present</td>
        <td>Lectureship in Physical Sciences</td>
        <td>Council of Scientific and Industrial Research, New Delhi, India</td>
    </tr>
</table>

</div>

<div id="research" style="display: none;">
    <h2>Research</h2>
    <?php
    // samio files
    $fileSharingDirectory = 'projects/samio/';
    $zipFileName = 'sample_file.zip';
    $downloadLink = $fileSharingDirectory . $zipFileName;
    echo "<a class='download-link' href='$downloadLink' download>Download >> Samio Files</a>";
    echo "<br>";

    // temporary Files
    $fileSharingDirectory = 'projects/temp/';
    $zipFileName = 'sample_file.zip';
    $downloadLink = $fileSharingDirectory . $zipFileName;
    echo "<a class='download-link' href='$downloadLink' download>Download >> Temporary Files</a>";
    ?>
</div>


        <div id="publications" style="display: none;">
            <h2 style="color: blue;">Publications</h2>
            <h3>2022</h3>
            <ol>
            <li value="04"><b>Basuvaraj, P.</b>, Nemec, F., Nemecek, Z., and Safrankova, J., Ionospheric Plasma Depletions at Mars Observed by the MAVEN Spacecraft, <i>Journal of Geophysical Research: Planets</i>, 127, 2020, doi: 10.1029/2022JE007302.</li>
            </ol>
            <h3>2020</h3>
            <ol>
            <li value="03">Nagaraja, K., <b>Basuvaraj, P. K.</b>, Chakravarty, S. C., and Praveen Kumar, K., Study of Exospheric Neutral Composition of Mars observed from Indian Mars Orbiter Mission, <i>New Astronomy</i>, 77, 2020, doi:10.1016/j.newast.2019.101349.
            </ol> 

            <h3>2019</h3>
            <ol>
            <li value="02">Nagaraja, K., Chakravarty, S. C., and <b>Basuvaraj, P. K.</b>, Investigation of HZE particle fluxes as a space radiation hazard for future Mars missions, <i>Heliyon</i>, 5, 2019, doi:10.1016/j.heliyon.2019.e02972.
            </ol> 

            <h3>2018</h3>
            <ol>
            <li value="01">Nagaraja, K., <b>Basuvaraj, P. K.</b>, and Chakravarty, S. C., X-ray flares and coronal mass ejections (CMEs) during very quiet solar activity conditions of 2009, <i>Indian Journal of Pure and Applied Physics</i>, 56, 621-623, 2018.
            </ol> 

            <br>

    <h2 style="color: blue;">Reports, Proceedings and Other Publications</h2>        
    <h3>2023</h3>
    <ol>
    <li value="07">Park, B., Pitňa, A., Safrankova, J., Nemecek, Z., and <b>Basuvaraj, P.</b>, Multi-spacecraft Investigation of ICME-driven Interplanetary Solar Wind Turbulence in the Inner Heliosphere, <i>WDS'23 Proceedings of Contributed Papers - Physics</i>, eds. J. Safrankova and J. Pavlu, Prague, Matfyzpress, pp. 28-94 , 2023, ISBN 978-80-7378-503-1.
    <li value="06"><b>Basuvaraj, P.</b>, Nemec, F., Regoli, L., Fowler, C. M., Nemecek, Z., and Safrankova, J., Electric and Magnetic Field Variations Associated with Martian Plasma Depletion Events, <i>WDS'23 Proceedings of Contributed Papers - Physics</i>, eds. J. Safrankova and J. Pavlu, Prague, Matfyzpress, pp. 43-49, 2023, ISBN 978-80-7378-503-1.
    </ol> 
    <h3>2022</h3>
    <ol>
    <li value="05"><b>Basuvaraj, P.</b>, Nemec, F., Nemecek, Z., and Safrankova, J., Observing the Martian Ionospheric Plasma Depletion Events by the MAVEN and Mars Express Spacecraft, <i>WDS'22 Proceedings of Contributed Papers - Physics</i>, eds. J. Safrankova and J. Pavlu, Prague, Matfyzpress, pp. 38-47, 2022, ISBN 978-80-7378-477-5.
    </ol> 
    <h3>2021</h3>
    <ol>
    <li value="04">Nagaraja, K., <b>Basuvaraj, P. K.</b>, Chakravarty, S. C., and Praveen Kumar, K., Solar wind-driven day-to-day effects on the Martian thermosphere/exosphere Composition, arXiv:2103.01930, 2021.
    </ol> 
    <h3>2020</h3>
    <ol>
    <li value="03">Nagaraja, K., <b>Basuvaraj, P. K.</b>, Chakravarty, S. C., and Praveen Kumar, K., Effect of Incoming Solar Particle Radiations on The Exosphere of Mars, arXiv:2008.10029, 2020.
    </ol> 
    <h3>2019</h3>
    <ol>
    <li value="02"><b>Basuvaraj, P. K.</b> and Haider, S. A., Analysis of Mars’ Upper Atmosphere using MAVEN NGIMS Observations for MY-33 and MY-34, Project Report, Planetary Data Modeling Center, Physicsl Research Laboratory, 2019.
    </ol> 
    <h3>2017</h3>
    <ol>
    <li value="01">Nagaraja, K., <b>Basuvaraj, P. K.</b>, and Chakravarty, S. C., Space Weather and Ionospheric variability over low latitudes, Asian Journal of Physics, 26 (5-7), 2017.
    </ol> 
    </div>

   <div id="conferences" style="display: none;">
   <h2 style="color: blue;">Conferences and Workshops</h2>
   <h3>2024</h3>
    <ol>
    <li value="30">Regoli, L., C. Fowler, <b>P. Basuvaraj</b>, S. Xu, H. Madanian, M. Gkioulidou, F. Nemec, Ionospheric Depletions at Mars as Observed by MAVEN, 45th COSPAR Scientific Assembly, Busan, South Korea, July 13-21, 2024.
    <li value="29"><b>Basuvaraj, P.</b>, F. Nemec, C. Fowler, L. Regoli, Z. Nemecek, J. Safrankova, Study of Martian Ionospheric Plasma Depletion Events using MAVEN and Mars Express Spacecraft, EGU General Assembly, Vienna, Austria, April 14-19, 2024.
    </ol>
   <h3>2023</h3>
    <ol>
    <li value="28">Regoli, L., C. M. Fowler, <b>P. Basuvaraj</b>, M. Gkioulidou, F. Nemec, Ionospheric Depletions at Mars as Observed by MAVEN, AGU Fall Meeting, San Francisco, USA, December 11-15, 2023.
    <li value="27"><b>Basuvaraj, P.</b>, F. Nemec, C. M. Fowler, L. Regoli, Z. Nemecek, J. Safrankova, On the Formation Mechanism of Dayside Plasma Depletion Events in the Martian Ionosphere, AGU Fall Meeting, San Francisco, USA, December 11-15, 2023.
    <li value="26"><b>Basuvaraj, P.</b>, F. Nemec, C. M. Fowler, L. Regoli, Z. Nemecek, J. Safrankova, Electric and Magnetic Field Variations Associated with Martian Ionospheric Plasma Depletion Events, MUAN/MAVEN PSG Joint Science Meeting, NASA Goddard Institute for Space Studies (GISS), New York City, USA, September 11-14, 2023. (Virtual)
    <li value="25"><b>Basuvaraj, P.</b>, F. Nemec, L. Regoli, C. Fowler, Z. Nemecek, J. Safrankova, Ionospheric Plasma Depletions Events at Mars, Iberian Space Science Summer School, Coimbra, Portugal, June 26-30, 2023.
    <li value="24"><b>Basuvaraj, P.</b>, F. Nemec, L. Regoli, C. Fowler, Z. Nemecek, J. Safrankova, Ionospheric Plasma Depletions at Mars: MAVEN Observations and In-Situ Plasma and Wave Properties, EGU General Assembly, Vienna, Austria, April 23-28, 2023.
    </ol>
    <h3>2022</h3>
    <ol>
    <li value="23">Regoli, L., C. M. Fowler, M. Gkioulidou, <b>P. K. Basuvaraj</b>, F. Nemec, Ionospheric Depletions at Mars Detected by MAVEN, AGU Fall Meeting, Chicago, USA, December 12-16, 2022.
    <li value="22"><b>Basuvaraj, P. K.</b>, F. Nemec, Z. Nemecek, J. Safrankova, Plasma Depletion Events in the Ionosphere of Mars, 44th COSPAR Scientific Assembly, Athens, Greece, July 16-24, 2022.
    <li value="21"><b>Basuvaraj, P. K.</b>, F. Nemec, Z. Nemecek, J. Safrankova, Ionospheric Plasma Depletions at Mars as Observed by MAVEN, EGU General Assembly, Vienna, Austria, May 23-27, 2022.
    </ol>
    <h3>2021</h3>
    <ol>
    <li value="20"><b>Basuvaraj, P. K.</b>, Kuttanpillai, P. K., Chakravarty, S. C., Nagaraja, K., Solar Control on Martian Exosphere: In-situ Observations from MAVEN and MOM, 43rd COSPAR Scientific Assembly, Sydney, Australia, January 28 - February 04, 2021.
    </ol>
    <h3>2020</h3>
    <ol>
    <li value="19">Chandrayaan-2 Data Analysis Workshop, 4th Lunar Science Meet on Chandrayaan-2, Bengaluru, India, January 6-7, 2020.
    </ol>
    <h3>2019</h3>
    <ol>
    <li value="18"><b>Basuvaraj, P. K.</b>, Kuttanpillai, P. K., Chakravarty, S. C., Nagaraja, K., Response of Martian exospheric composition to solar active events, 20th National Space Science Symposium (NSSS), Pune, India, January 29-31, 2019.
    <li value="17"><b>Basuvaraj, P. K.</b>, Kuttanpillai, P. K., Chakravarty, S. C., Nagaraja, K., Variation of atmospheric composition of exosphere of Mars, 20th National Space Science Symposium (NSSS), Pune, India, January 29-31, 2019.
    <li value="16">Nagaraja, K., <b>Basuvaraj, P. K.</b>, Chakravarty, S. C., Appa Rao, B. V., Jagadheesha, D., Ghosh, A. K., Girija, J., Variation of tropopause height from GPS-RS over Bengaluru, 20th National Space Science Symposium (NSSS), Pune, India, January 29-31, 2019.
    </ol>
    <h3>2018</h3>
    <ol>
    <li value="15"><b>Basuvaraj, P. K.</b>, Chakravarty, S. C., Nagaraja, Study of Martian exosphere and its interaction with solar activity during December 2014 using MOM observations, VPS - AGU Fall Meeting, Washington DC, USA, December 10-14, 2018. (Virtual)
    <li value="14"><b>Basuvaraj, P. K.</b>, Chakravarty, S. C., Nagaraja, K., A study of atmospheric composition of Mars from Indian Mars Orbiter Mission, 4th Andhra Pradesh Science Congress, Cuddapah, India, November 9-11, 2018.
    <li value="13">Srinivas Yadav N., Sumith, S., <b>Basuvaraj, P. K.</b>, Jagadheesha, D., Appa Rao B. V., Nagaraja, K., Atmospheric boundary layer observations using mini boundary layer mast, 4th Andhra Pradesh Science Congress, Cuddapah, India, November 9-11, 2018.
    <li value="12">Sumith, S., Srinivas Yadav N., <b>Basuvaraj, P. K.</b>, Nagaraja, K., Kameshwary, C. A., Rainfall over Kerala during August 2018, 4th Andhra Pradesh Science Congress, Cuddapah, India, November 9-11, 2018.
    <li value="11">Nagaraja, K., Srinivas Yadav N., Sumith, S., <b>Basuvaraj, P. K.</b>, Chakravarty, S. C., Jagadheesha, D., Effect of incoming short wave and outgoing long wave radiation on air temperature, Tropical Meteorology, Varanasi, India, October 24-27, 2018.
    <li value="10">Nagaraja, K., Sumith, S., Srinivas Yadav N., <b>Basuvaraj, P. K.</b>, Manikiam, B., Appa Rao, B. V., Jagadheesha, D., Retrieval of hourly values of air temperature from daily minima and maxima, Tropical Meteorology, Varanasi, India, October 24-27, 2018.
    <li value="09"><b>Basuvaraj, P. K.</b>, Chakravarty, S. C., Kuttanpillai, P. K., Nagaraja, K., Influence of Solar Radiation on the atmosphere of Earth and Mars - Comparative Study, Tropical Meteorology, Varanasi, India, October 24-27, 2018.
    <li value="08"><b>Basuvaraj, P. K.</b>, Chakravarty, S. C., Nagaraja, K., Influence of Solar Radiation on Earth’s atmosphere and Change in Weather, 13th DGSI International Conference, Bengaluru, India, September 20-22, 2018.
    <li value="07">Nagaraja, K., <b>Basuvaraj, P. K.</b>, Chakravarty, S. C., Appa Rao, B. V., Girija, J., Ghosh, A. K., Jagadheesha, D., Study of tropopause height from upper air observations using GPS-Radiosondes over Bengaluru, India, 42nd COSPAR Scientific Assembly, California, USA, July 14-22, 2018.
    <li value="06">Kuttanpillai, P. K., Nagaraja, K., <b>Basuvaraj, P. K.</b>,  Chakravarty, S. C., Effect of solar energetic electromagnetic and particle radiations on the upper atmosphere of Mars and its implications on robotic missions, 42nd COSPAR Scientific Assembly, California, USA, July 14-22, 2018.
    <li value="05"><b>Basuvaraj, P. K.</b>, Chakravarty, S. C., Nagaraja, K., Kuttanpillai, P. K., Study of thermosphere/exosphere of Mars using MOM observations and validation with models, 42nd COSPAR Scientific Assembly, California, USA, July 14-22, 2018.
    <li value="04">Nagaraja, K., <b>Basuvaraj, P. K.</b>, Kuttanpillai, P. K., Chakravarty, S. C., Exospheric Neutral Composition Data Set Of Mars From Indian Mars Orbiter Mission (MOM), 42nd COSPAR Scientific Assembly, California, USA, July 14-22, 2018.
    </ol>    
    <h3>2017</h3>
    <ol>
    <li value="03">Nagaraja, K., <b>Basuvaraj, P. K.</b>, Chakravarty, S. C., X-ray flares and Coronal Mass Ejection (CMEs) during very quiet solar activity conditions of 2009, National Conference on Radiation Physics (NCRP), Bengaluru, India, November 23-24, 2017.
    <li value="02">Nagaraja, K., <b>Basuvaraj, P. K.</b>, Chakravarty, S. C., Girija, J., Ghosh, A. K., Jagadheesha, D., Appa Rao, B. V., Upper air observations over Bengaluru from GPS Radiosonde ascents, International Tropical Meteorological Symposium (INTROMET), Ahmedabad, India, November 7-11, 2017.
    <li value="01">Nagaraja, K., <b>Basuvaraj, P. K.</b>, Chakravarty, S. C., Appa Rao, B. V., Effect of Solar activity on Atmospheric temperature over India, Understanding, Predicting and Projecting Climate Change over Asian Region (UPCAR), Tirupathi, India, June 25-26, 2017.
    </ol>

   </div>

    <div id="photos" style="display: none;">
    <h2>Photos</h2>
    <p>Will be updated soon!.</p>
    <h3>Countries and Cities</h3>
    <ol>
    <li value="13"> USA <i>(San Francisco)</i>
    <li value="12"> Portugal <i>(Porto, Coimbra)</i>
    <li value="11"> Switzerland <i>(Zurich)</i>
    <li value="10"> Slovakia <i>(Bratislava)</i>
    <li value="09"> Hungary <i>(Budapest)</i>
    <li value="08"> Germany <i>(Frankfurt)</i>
    <li value="07"> Greece <i>(Athens)</i>
    <li value="06"> Austria <i>(Vienna)</i> 
    <li value="05"> Vatican City
    <li value="04"> Italy <i>(Rome, Venice, Bari)</i>
    <li value="03"> Czechia <i>(Prague, Brno, Kutna Hora)</i>
    <li value="02"> Qatar <i>(Doha)</i>
    <li value="01"> India <i>(see-below)</i>
    </ol>
    <h3>Indian States, Union Territories and Cities</h3>
    <ol>
    <li value="10"> Delhi <i>(New Delhi)</i>
    <li value="09"> Haryana <i>(Gurugram)</i>
    <li value="08"> Uttar Pradesh <i>(Noida)</i>
    <li value="07"> Gujarat <i>(Ahmedabad, Gandhinagar)</i>
    <li value="06"> Maharastra <i>(Mumbai, Pune)</i>
    <li value="05"> Telangana <i>(Hyderabad)</i>
    <li value="04"> Andhra Pradesh <i>(Gadanki, Tirupati, Sriharikota, Kadapa)</i>
    <li value="03"> Kerala <i>(Thiruvanthapuram, Kozhikode, Wayanad)</i>
    <li value="02"> Karnataka <i>(Bengaluru, Gauribidanur, Mysuru, Tumkur)</i>
    <li value="01"> Tamil Nadu <i>(The Nilgiris, Coimbatore, Salem, Chennai, Tiruchirappalli)</i>
    </ol>
    </div>

    </div>

<script>
function downloadPaper(paperId) {
// Add logic to check the user's IP address
// For example, if the user's IP address matches the specified pattern (195.113.25.XX), provide the download link
// Otherwise, display a message or do nothing
// Example IP check (replace with your actual logic)
const userIpAddress = '195.113.25.97'; // Get the user's IP address
const allowedIpRange = /^195\.113\.25\.\d{1,3}$/; // Replace with your allowed IP range pattern
if (allowedIpRange.test(userIpAddress)) {
// User is within the allowed network, provide the download link
window.location.href = `/projects/Samio/${paperId}.zip`; // Replace with the actual path to your files
} else {
// User is outside the allowed network, display a message or do nothing
alert('Access restricted.');
}
}

function loadHome() {
    document.getElementById('homepage').style.display = 'block';
    document.getElementById('cv').style.display = 'none';
    document.getElementById('research').style.display = 'none';
    document.getElementById('publications').style.display = 'none';
    document.getElementById('conferences').style.display = 'none';
    document.getElementById('photos').style.display = 'none';
}

function loadCV() {
    document.getElementById('homepage').style.display = 'none';
    document.getElementById('cv').style.display = 'block';
    document.getElementById('research').style.display = 'none';
    document.getElementById('publications').style.display = 'none';
    document.getElementById('conferences').style.display = 'none';
    document.getElementById('photos').style.display = 'none';
}

function loadResearch() {
    document.getElementById('homepage').style.display = 'none';
    document.getElementById('cv').style.display = 'none';
    document.getElementById('research').style.display = 'block';
    document.getElementById('publications').style.display = 'none';
    document.getElementById('conferences').style.display = 'none';
    document.getElementById('photos').style.display = 'none';
}

function loadPublications() {
    document.getElementById('homepage').style.display = 'none';
    document.getElementById('cv').style.display = 'none';
    document.getElementById('research').style.display = 'none';
    document.getElementById('publications').style.display = 'block';
    document.getElementById('conferences').style.display = 'none';
    document.getElementById('photos').style.display = 'none';
}

function loadConferences() {
    document.getElementById('homepage').style.display = 'none';
    document.getElementById('cv').style.display = 'none';
    document.getElementById('research').style.display = 'none';
    document.getElementById('publications').style.display = 'none';
    document.getElementById('conferences').style.display = 'block';
    document.getElementById('photos').style.display = 'none';
}

function loadPhotos() {
    document.getElementById('homepage').style.display = 'none';
    document.getElementById('cv').style.display = 'none';
    document.getElementById('research').style.display = 'none';
    document.getElementById('publications').style.display = 'none';
    document.getElementById('conferences').style.display = 'none';
    document.getElementById('photos').style.display = 'none';
}

// Get the current date and time.
const currentDate = new Date();
const lastUpdatedElement = document.getElementById('last-updated');
const year = currentDate.getUTCFullYear();
const month = currentDate.toLocaleString('default', { month: 'short' }); // Get the short month name (e.g., Jan, Feb).
const day = currentDate.getUTCDate();
const formattedDate = `${year}-${month}-${day} UT`;
lastUpdatedElement.innerHTML = `<i>(Last Updated: ${formattedDate})</i>`;

</script>



</body>
</html>
