@extends('job.layouts.layout')
@section('content')

<!-- Visual of the page -->
<div class="visual-block visual-theme-1 bg-dark-green pt-40 pt-md-65 pb-40 pb-md-65 pb-xl-85 text-white">
    <div class="container position-relative">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-7 col-xl-6 position-relative">
                <!-- visual textbox -->
                <div class="visual-textbox">
                    <h1>Find The Perfect Job For You</h1>
                    <p>Fill your job in hours, not weeks. Search for free.</p>
                    <!-- search form -->
                    <form class="form-search" action="#">
                        <div class="fields-holder bg-white text-black d-flex flex-wrap flex-md-nowrap">
                            <div class="form-group">
                                <i class="icon icon-search"></i>
                                <input class="form-control" type="search" placeholder="Search Job Title">
                            </div>
                            <div class="form-group">
                                <i class="icon icon-map-pin"></i>
                                <select class="select2" name="state" data-placeholder="Select Country">
                                    <option label="Placeholder"></option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthelemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="CS">Serbia and Montenegro</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.s.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-green btn-sm" type="submit"><span class="btn-text">Find Job</span></button>
                    </form>
                    <div class="popular-searches">
                        <strong class="subtitle">Popular Searches:</strong>
                        <ul>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                    <div class="bg-patterns">
                        <img src="images/bg-pattern.png" width="242" height="423" alt="Icons">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-xl-6 d-flex justify-content-center align-items-center">
                <!-- visual Image -->
                <div class="visual-image position-relative">
                    <img src="images/image-banner2.png" width="642" height="494" alt="Find The Perfect Job For You">
                    <div class="icons-black">
                        <img src="images/icon-pattern01.png" width="306" height="321" alt="Icons">
                    </div>
                    <div class="icon-circle">
                        <img src="images/icon-pattern02.png" width="95" height="95" alt="Icons">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contain main informative part of the site -->
<main class="main">
    <!-- Trending Categories Section -->
    <section class="section section-theme-1 section-trending-categories pt-35 pt-md-50 pt-lg-65 pb-35px pb-md-50 pb-lg-65">
        <div class="container">
            <!-- Section header -->
            <header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
                <div class="seprator"></div>
                <h2>Trending Categories</h2>
                <p>Beneath each of these categories, you can find its most popular</p>
            </header>
            <div class="trending-categories-slider">
                <div class="slick-slide">
                    <a href="#" class="trending-categories-box">
                        <div class="icon">
                            <img src="images/line-icon01.png" width="49" height="49" alt="UI/UX Design">
                        </div>
                        <div class="textbox">
                            <strong class="h6">UI/UX Design</strong>
                            <span class="subtext">12k+ Jobs</span>
                        </div>
                    </a>
                </div>
                <div class="slick-slide">
                    <a href="#" class="trending-categories-box">
                        <div class="icon">
                            <img src="images/line-icon02.png" width="56" height="56" alt="Marketing">
                        </div>
                        <div class="textbox">
                            <strong class="h6">Marketing</strong>
                            <span class="subtext">12k+ Jobs</span>
                        </div>
                    </a>
                </div>
                <div class="slick-slide">
                    <a href="#" class="trending-categories-box">
                        <div class="icon">
                            <img src="images/line-icon03.png" width="51" height="51" alt="Development">
                        </div>
                        <div class="textbox">
                            <strong class="h6">Development</strong>
                            <span class="subtext">12k+ Jobs</span>
                        </div>
                    </a>
                </div>
                <div class="slick-slide">
                    <a href="#" class="trending-categories-box">
                        <div class="icon">
                            <img src="images/line-icon04.png" width="52" height="52" alt="Health and Care">
                        </div>
                        <div class="textbox">
                            <strong class="h6">Health and Care</strong>
                            <span class="subtext">12k+ Jobs</span>
                        </div>
                    </a>
                </div>
                <div class="slick-slide">
                    <a href="#" class="trending-categories-box">
                        <div class="icon">
                            <img src="images/line-icon05.png" width="55" height="55" alt="Automotive">
                        </div>
                        <div class="textbox">
                            <strong class="h6">Automotive</strong>
                            <span class="subtext">12k+ Jobs</span>
                        </div>
                    </a>
                </div>
                <div class="slick-slide">
                    <a href="#" class="trending-categories-box">
                        <div class="icon">
                            <img src="images/line-icon03.png" width="51" height="51" alt="Development">
                        </div>
                        <div class="textbox">
                            <strong class="h6">Development</strong>
                            <span class="subtext">12k+ Jobs</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Jobs Section -->
    <section class="section section-theme-1 section-popular-jobs pt-35 pt-md-50 pt-lg-65 pb-35 pb-md-50 pb-lg-65">
        <div class="container">
            <!-- Section header -->
            <header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
                <div class="seprator"></div>
                <h2>Most Popular Jobs</h2>
                <p>Beneath each of these categories, you can find its most popular</p>
            </header>
            <div class="row">
                <div class="col-12 col-lg-6 mb-15 mb-md-25 mb-lg-35">
                    <article class="popular-jobs-box">
                        <div class="box-holder">
                            <div class="job-info">
                                <div class="img-holder">
                                    <img src="images/company-logo01.jpg" width="78" height="78" alt="Image Description">
                                </div>
                                <div class="textbox">
                                    <h3 class="h5">Product Marketing Manager</h3>
                                    <ul class="meta-list">
                                        <li><span class="text">By WebTechnology</span></li>
                                        <li><i class="icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></li>
                                    </ul>
                                    <ul class="tags-list">
                                        <li><span class="tag">Remote</span></li>
                                        <li><span class="tag">Full Time</span></li>
                                        <li><span class="tag">Part Time</span></li>
                                    </ul>
                                </div>
                            </div>
                            <footer class="jobs-foot">
                                <strong class="amount">$1000 - $1200<span>/month</span></strong>
                                <a href="#" class="btn btn-green btn-sm"><span class="btn-text">Apply Now</span></a>
                            </footer>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-6 mb-15 mb-md-25 mb-lg-35">
                    <article class="popular-jobs-box">
                        <div class="box-holder">
                            <div class="job-info">
                                <div class="img-holder">
                                    <img src="images/company-logo02.jpg" width="78" height="78" alt="Image Description">
                                </div>
                                <div class="textbox">
                                    <h3 class="h5">Junior Graphic Designer</h3>
                                    <ul class="meta-list">
                                        <li><span class="text">By Websikon</span></li>
                                        <li><i class="icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></li>
                                    </ul>
                                    <ul class="tags-list">
                                        <li><span class="tag">Remote</span></li>
                                        <li><span class="tag">Full Time</span></li>
                                        <li><span class="tag">Part Time</span></li>
                                    </ul>
                                </div>
                            </div>
                            <footer class="jobs-foot">
                                <strong class="amount">$1000 - $1200<span>/month</span></strong>
                                <a href="#" class="btn btn-green btn-sm"><span class="btn-text">Apply Now</span></a>
                            </footer>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-6 mb-15 mb-md-25 mb-lg-35">
                    <article class="popular-jobs-box">
                        <div class="box-holder">
                            <div class="job-info">
                                <div class="img-holder">
                                    <img src="images/company-logo05.jpg" width="78" height="78" alt="Image Description">
                                </div>
                                <div class="textbox">
                                    <h3 class="h5">Marketing Manager</h3>
                                    <ul class="meta-list">
                                        <li><span class="text">By Muxcorp</span></li>
                                        <li><i class="icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></li>
                                    </ul>
                                    <ul class="tags-list">
                                        <li><span class="tag">Remote</span></li>
                                        <li><span class="tag">Full Time</span></li>
                                        <li><span class="tag">Part Time</span></li>
                                    </ul>
                                </div>
                            </div>
                            <footer class="jobs-foot">
                                <strong class="amount">$1000 - $1200<span>/month</span></strong>
                                <a href="#" class="btn btn-green btn-sm"><span class="btn-text">Apply Now</span></a>
                            </footer>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-6 mb-15 mb-md-25 mb-lg-35">
                    <article class="popular-jobs-box">
                        <div class="box-holder">
                            <div class="job-info">
                                <div class="img-holder">
                                    <img src="images/company-logo04.jpg" width="78" height="78" alt="Image Description">
                                </div>
                                <div class="textbox">
                                    <h3 class="h5">Finance Manager</h3>
                                    <ul class="meta-list">
                                        <li><span class="text">By Rokwebs</span></li>
                                        <li><i class="icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></li>
                                    </ul>
                                    <ul class="tags-list">
                                        <li><span class="tag">Remote</span></li>
                                        <li><span class="tag">Full Time</span></li>
                                        <li><span class="tag">Part Time</span></li>
                                    </ul>
                                </div>
                            </div>
                            <footer class="jobs-foot">
                                <strong class="amount">$1000 - $1200<span>/month</span></strong>
                                <a href="#" class="btn btn-green btn-sm"><span class="btn-text">Apply Now</span></a>
                            </footer>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-6 mb-15 mb-md-25 mb-lg-35">
                    <article class="popular-jobs-box">
                        <div class="box-holder">
                            <div class="job-info">
                                <div class="img-holder">
                                    <img src="images/company-logo06.jpg" width="78" height="78" alt="Image Description">
                                </div>
                                <div class="textbox">
                                    <h3 class="h5">Restaurant Team</h3>
                                    <ul class="meta-list">
                                        <li><span class="text">By Develpersoft</span></li>
                                        <li><i class="icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></li>
                                    </ul>
                                    <ul class="tags-list">
                                        <li><span class="tag">Remote</span></li>
                                        <li><span class="tag">Full Time</span></li>
                                        <li><span class="tag">Part Time</span></li>
                                    </ul>
                                </div>
                            </div>
                            <footer class="jobs-foot">
                                <strong class="amount">$1000 - $1200<span>/month</span></strong>
                                <a href="#" class="btn btn-green btn-sm"><span class="btn-text">Apply Now</span></a>
                            </footer>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-6 mb-15 mb-md-25 mb-lg-35">
                    <article class="popular-jobs-box">
                        <div class="box-holder">
                            <div class="job-info">
                                <div class="img-holder">
                                    <img src="images/company-logo07.jpg" width="78" height="78" alt="Image Description">
                                </div>
                                <div class="textbox">
                                    <h3 class="h5">Software Engineer</h3>
                                    <ul class="meta-list">
                                        <li><span class="text">By Geniouslab</span></li>
                                        <li><i class="icon-map-pin"></i><span class="text">Pekanbaru, Indonesia</span></li>
                                    </ul>
                                    <ul class="tags-list">
                                        <li><span class="tag">Remote</span></li>
                                        <li><span class="tag">Full Time</span></li>
                                        <li><span class="tag">Part Time</span></li>
                                    </ul>
                                </div>
                            </div>
                            <footer class="jobs-foot">
                                <strong class="amount">$1000 - $1200<span>/month</span></strong>
                                <a href="#" class="btn btn-green btn-sm"><span class="btn-text">Apply Now</span></a>
                            </footer>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center pt-15 pt-md-25">
                    <a href="#" class="btn btn-green btn-sm"><span class="btn-text">View All Jobs</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Explores Section -->
    <section class="section section-theme-1 section-explores bg-light-gray pt-35 pt-md-50 pt-lg-65 pt-xl-125 pb-35 pb-md-50 pb-lg-65 pb-xl-125">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row align-items-center">
                <div class="col-12 col-lg-6 mb-15 mb-lg-0">
                    <div class="explores-image-box">
                        <div class="img-pattern"><img src="images/explore-pattern.png" width="723" height="461" alt="Image Description"></div>
                        <div class="image-holder">
                            <img src="images/img-explore.jpg" width="560" height="570" alt="Image Description">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="section-header">
                        <h2>Explore a faster, easier, and better job <span class="text-outlined">search</span></h2>
                        <p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.</p>
                        <ul class="check-list">
                            <li>Duis aute irure dolor in reprehenderit</li>
                            <li>Voluptate velit esse cillum dolore</li>
                            <li>Fugiat nulla pariatur. Excepteur sint occaecat</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row align-items-center pt-35 pt-md-60 pt-lg-100">
                <div class="col-12 col-lg-6 col-xl-5 mb-30 mb-lg-0">
                    <div class="section-header mb-0">
                        <h2>Find a Job You'll Love with The <span class="text-outlined">#1&nbsp;Job</span> Site</h2>
                        <p>Your next role could be with one of these leading companies.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <ul class="sites-list">
                        <li><a href="#"><img src="images/com-logo01.png" alt="Image Description"></a></li>
                        <li><a href="#"><img src="images/com-logo02.png" alt="Image Description"></a></li>
                        <li><a href="#"><img src="images/com-logo03.png" alt="Image Description"></a></li>
                        <li><a href="#"><img src="images/com-logo04.png" alt="Image Description"></a></li>
                        <li><a href="#"><img src="images/com-logo05.png" alt="Image Description"></a></li>
                        <li><a class="btn-more" href="#"><i class="icon-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- How Works Section -->
    <section class="section section-theme-1 section-how-works pt-45 pt-md-50 pt-lg-65 pt-xl-85 pt-xxl-110 pb-60 pb-md-80 pb-xl-85 pb-xxl-110 pb-xxxl-150">
        <div class="container">
            <!-- Section header -->
            <header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
                <div class="seprator"></div>
                <h2>How it’s work?</h2>
                <p>Beneath each of these categories, you can find its most popular</p>
            </header>
            <div class="row mb-35 mb-lg-60 mb-xl-90">
                <div class="col-12 col-md-4 text-center mb-30 mb-md-0">
                    <div class="how-work-box">
                        <div class="icon">
                            <img src="images/line-icon06.png" alt="Image Description">
                        </div>
                        <strong class="num">01</strong>
                        <strong class="h5">Create Account</strong>
                        <p>It’s very easy to open an account and start your journey.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-center mb-30 mb-md-0">
                    <div class="how-work-box">
                        <div class="icon">
                            <img src="images/line-icon07.png" alt="Image Description">
                        </div>
                        <strong class="num">02</strong>
                        <strong class="h5">Complete your profile</strong>
                        <p>Complete your profile with all the info to get attention of client.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-center mb-30 mb-md-0">
                    <div class="how-work-box">
                        <div class="icon">
                            <img src="images/line-icon08.png" alt="Image Description">
                        </div>
                        <strong class="num">03</strong>
                        <strong class="h5">Apply job or hire</strong>
                        <p>Apply &amp; get your preferable jobs with all the requirements and get it.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="matched-jobs-block">
                        <div class="section-header">
                            <h2>Get your Matched Jobs in a few <span class="text-outlined">minutes</span>.</h2>
                            <p>Find your dream job & earn from world leading brands. </p>
                            <a href="#" class="btn btn-green btn-sm"><span class="btn-text"><i class="icon-upload-cloud"></i> Upload Your CV</span></a>
                        </div>
                        <div class="image-holder">
                            <img src="images/image-circle.png" width="462" height="436" alt="Image Description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Blockquotes -->
    <section class="section section-theme-1 bg-light-gray section-quotes pt-35 pt-md-50 pt-lg-65 pt-xl-90 pt-xxl-120 pb-35px pb-md-50 pb-lg-65 pb-xl-90 pb-xxl-120">
        <div class="container">
            <!-- Section header -->
            <header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
                <div class="seprator"></div>
                <h2>What Our Customers Say About Us</h2>
                <p>Beneath each of these categories, you can find its most popular</p>
            </header>
            <div class="quotes-slider">
                <div class="slick-slide">
                    <div class="quotes-box">
                        <div class="author-box">
                            <div class="social-icon"><i class="icon-facebook"></i></div>
                            <div class="author-avatar">
                                <img src="images/img-client01.jpg" width="119" height="119" alt="Linda Romania">
                            </div>
                            <strong class="author-name h6">Linda Romania, <span>Lead Designer</span></strong>
                        </div>
                        <blockquote>
                            <q>Vestibulum orci felis, ullamc lie orper non conum non, ultrices a ac nunc. Mauris non ligscipit, uie vulputate mi accumsan, dapi olv bus fe lam sed sapien dc nuncm uiem non porta.</q>
                        </blockquote>
                    </div>
                </div>
                <div class="slick-slide">
                    <div class="quotes-box">
                        <div class="author-box">
                            <div class="social-icon"><i class="icon-facebook"></i></div>
                            <div class="author-avatar">
                                <img src="images/img-client03.jpg" width="119" height="119" alt="Romi Roki">
                            </div>
                            <strong class="author-name h6">Romi Roki, <span>Lead Designer</span></strong>
                        </div>
                        <blockquote>
                            <q>Vestibulum orci felis, ullamc lie orper non conum non, ultrices a ac nunc. Mauris non ligscipit, uie vulputate mi accumsan, dapi olv bus fe lam sed sapien dc nuncm uiem non porta.</q>
                        </blockquote>
                    </div>
                </div>
                <div class="slick-slide">
                    <div class="quotes-box">
                        <div class="author-box">
                            <div class="social-icon"><i class="icon-facebook"></i></div>
                            <div class="author-avatar">
                                <img src="images/img-client02.jpg" width="119" height="119" alt="Janson Ilmoni">
                            </div>
                            <strong class="author-name h6">Janson Ilmoni, <span>Lead Designer</span></strong>
                        </div>
                        <blockquote>
                            <q>Vestibulum orci felis, ullamc lie orper non conum non, ultrices a ac nunc. Mauris non ligscipit, uie vulputate mi accumsan, dapi olv bus fe lam sed sapien dc nuncm uiem non porta.</q>
                        </blockquote>
                    </div>
                </div>
                <div class="slick-slide">
                    <div class="quotes-box">
                        <div class="author-box">
                            <div class="social-icon"><i class="icon-facebook"></i></div>
                            <div class="author-avatar">
                                <img src="images/img-client03.jpg" width="119" height="119" alt="Linda Romania">
                            </div>
                            <strong class="author-name h6">Linda Romania, <span>Lead Designer</span></strong>
                        </div>
                        <blockquote>
                            <q>Vestibulum orci felis, ullamc lie orper non conum non, ultrices a ac nunc. Mauris non ligscipit, uie vulputate mi accumsan, dapi olv bus fe lam sed sapien dc nuncm uiem non porta.</q>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured News Block -->
    <section class="section section-theme-1 featured-news-block pt-35 pt-md-50 pt-lg-65 pt-xl-90 pt-xxl-120 pb-35px pb-md-50 pb-lg-65 pb-xl-90 pb-xxl-120">
        <div class="container">
            <div class="row justify-content-between mb-35 mb-lg-55">
                <div class="col-12 col-lg-8">
                    <!-- Section Header -->
                    <header class="section-header text-center text-lg-start mb-30 m-lg-0">
                        <h2>Get interesting insights, articles, and news</h2>
                        <p>Beneath each of these categories, you can find its most popular</p>
                    </header>
                </div>
                <div class="col-12 col-lg-4 text-center text-lg-end">
                    <a href="#" class="btn-all"><span class="btn-text">View All News</span><i class="icon-chevron-right"></i></a>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Article News -->
                    <article class="article-news">
                        <div class="image-holder">
                            <img src="images/image-news01.jpg" width="300" height="240" alt="Image Description">
                        </div>
                        <div class="textbox">
                            <strong class="subtitle">Developer, Code</strong>
                            <h5><a href="#">How to convince recruiters and get your dream job</a></h5>
                            <span class="author">By <strong>Thomas Smith</strong></span>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Article News -->
                    <article class="article-news">
                        <div class="image-holder">
                            <img src="images/image-news02.jpg" width="300" height="240" alt="Image Description">
                        </div>
                        <div class="textbox">
                            <strong class="subtitle">Developer, Code</strong>
                            <h5><a href="#">Collaboration: Best Practices, Challenges, and Tools</a></h5>
                            <span class="author">By <strong>Thomas Smith</strong></span>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Article News -->
                    <article class="article-news">
                        <div class="image-holder">
                            <img src="images/image-news03.jpg" width="300" height="240" alt="Image Description">
                        </div>
                        <div class="textbox">
                            <strong class="subtitle">Developer, Code</strong>
                            <h5><a href="#">How to Work From Home: Tips and Companies Hiring</a></h5>
                            <span class="author">By <strong>Thomas Smith</strong></span>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Article News -->
                    <article class="article-news">
                        <div class="image-holder">
                            <img src="images/image-news04.jpg" width="300" height="240" alt="Image Description">
                        </div>
                        <div class="textbox">
                            <strong class="subtitle">Developer, Code</strong>
                            <h5><a href="#">How to convince recruiters and get your dream job</a></h5>
                            <span class="author">By <strong>Thomas Smith</strong></span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Downloads Section -->
    <section class="section section-theme-1 section-downloads pt-35 pt-md-0 pb-50 pb-md-75 pb-lg-75 pb-xl-110 pb-xxl-150">
        <div class="container">
            <!-- Section header -->
            <header class="section-header text-center mb-30 mb-md-40 mb-lg-50">
                <h2>Download our mobile app</h2>
                <p>Search through millions of jobs and find the right fit.<br> Simply swipe right to apply.</p>
            </header>
            <div class="app-buttons">
                <a class="btn-app btn-play-store" href="#">
                    <div class="store-icon">
                        <img src="images/icon-play-store.png" width="28" height="30" alt="Google Play">
                    </div>
                    <div class="btn-text">
                        Download From <span>Google Play</span>
                    </div>
                </a>
                <a class="btn-app btn-app-store" href="#">
                    <div class="store-icon">
                        <img src="images/icon-app-store.png" width="32" height="38" alt="App Store">
                    </div>
                    <div class="btn-text">
                        Download From <span>App Store</span>
                    </div>
                </a>
            </div>
            <div class="icon ico01"><img src="images/ico-app01.png" alt="Image Description"></div>
            <div class="icon ico02"><img src="images/ico-app02.png" alt="Image Description"></div>
            <div class="icon ico03"><img src="images/ico-app03.png" alt="Image Description"></div>
            <div class="icon ico04"><img src="images/ico-app04.png" alt="Image Description"></div>
        </div>
    </section>
</main>

@endsection