<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion PRIA - Jual Fashion Pria | Zalora Indonesia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="http://localhost/Tubes2_zalora//css/Body_register.css">
    <link rel="stylesheet" href="http://localhost/Tubes2_zalora//css/Alpha_header.css">
    <link rel="stylesheet" href="http://localhost/Tubes2_zalora//css/Alpha_footer.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="nav_atas">
            <div class="centernav">
                <a href="<?php echo base_url('') ?>">
                    <h2>Z A L O R A</h2>
                </a>
                <span class="Gander">
                    <ul class="navlinkGender">
                        <li><a id="White" href="<?php echo site_url('women') ?>">WANITA</a></li>
                        <li class="geser"><a id="White" href="<?php echo base_url('') ?>">PRIA</a></li>
                    </ul>
                </span>
                <div class="input-field-search">
                    <input id="search" type="search" placeholder="Search" autocomplete="off">
                    <div class="btn-search">
                        <a  href="#" id="btn_search" >
                            <i class="material-icons search-icon">search</i></a>
                    </div>
                </div>
                <span class="Menu_login">
                        <div class="navlinkLogin">
                                <div class="dropdown_akun">
                                    <a href="<?php echo site_url('akun') ?>"><img  class="icon-akun" src="http://localhost/Tubes2_zalora/assets/images/Screenshot from 2019-04-16 10-24-32.png" alt="tidak terlalu terjal"></a>
                                    <div class="dropdown-content">
                                            
                                                <a href="#">AKUN SAYA</a>
                                                <a href="#">WALLET</a>
                                                <a href="#">WISHLIST</a>
                                                <a href="#">LIHAT STATUS PEMESANAN</a>
                                                <a href="#">KONFIRMASI TRANSFER</a>
                                                <a href="#">PENUKARAN & PEMBELIAN</a>
                                                <a href="#">BANTUAN</a>
                                                <a href="#">KELUAR</a>
                                            
                                    </div>
                                </div>
                                <a href="<?php echo site_url('wishlist') ?>"><img class="icon-Love"src="http://localhost/Tubes2_zalora/assets/images/Screenshot from 2019-04-16 10-27-09.png" alt="Love"></a>
                                <a href="<?php echo site_url('keranjang') ?>"><img src="http://localhost/Tubes2_zalora/assets/images/Screenshot from 2019-04-16 10-27-08.png" alt="Keranjang"></a>
                            </div>
                </span>
            </div>
        </div>
    </div>
    <div class="bodypage">
        <div class="Body_header">



        </div>
    <div class="centerbodylogin">
        <div class="loginHeader">
            <div class="">
                <a href="<?php echo site_url('login')?>">Pelanggan LAMA</a>                
            </div>
            <div class="">
                <a href="<?php echo site_url('register')?>">Pelanggan BARU</a>                
            </div>
        </div>
        <div class="login_body">
            <h1 class="b-LoginContainer__header mbn txtCenter mtxl">Masuk ke akun Anda</h1>
            <div >
                <div class="fbCreatePageLabel">
                    Anda memiliki akun Faceboook?        </div>
                <div class="fbLoginButton">
                    <a class="btn btn--facebook" href='/customer/socialconnect/login?sconn=facebook'>
                        Lanjutkan dengan Facebook            </a>
            </div>
            <div class="fbLoginNotes">
              Kami tidak akan posting atas nama Anda atau membagikan informasi apapun tanpa persetujuan Anda.        </div>
            </div>
            <div class="b-LoginContainer__fbOrLine align-center mtl text-lower">
            <span>Atau</span>
            </div>
            <div class="box">
                <form action="">
                    <div class="">
                        <label for="">Alamat Email</label>
                        <input type="text" name="alamatemaillogin" class="" />

                    </div>
                    <div class="">
                        <label for="">Password</label>
                        <input type="Password" name="passwordlogin" class=""/>
                    </div>
                    <div class="b-register__form ptl pbxl">
                    <label class="mts required" value="test" for="RegistrationForm_email">Alamat Email <span class="required">*</span></label>                                        <div class="inputfield">
                        <input class="mts js-emailInputText ui-inputText" name="RegistrationForm[email]" id="RegistrationForm_email" type="text" maxlength="40" />                        <span class="inputfieldvalidation emailValidation"></span>
                        <div class="error__client error__client--email hide">
                            Masukkan alamat email yang valid (e.g. someone@example.com).                        </div>
                        <div>
                            <div class="js-emailSuggestion emailSuggestion hide">
    Apakah yang Anda maksud     <p class="js-emailSuggestion-accept suggestedDomain"></p>?
</div>
                        </div>
                    </div>
                    <div class="fssm"></div>
                                        <div class="mtl ui-formRow box">
                        <label class="lfloat required" for="RegistrationForm_password">Password <span class="required">*</span></label>                        <div class="inputfield" id="js-password-input">
                            <input type="checkbox" class="js-show-password-checkbox hide" name="js-show-password-checkbox"/>
                            <label for="js-show-password-checkbox" id="js-show-password-label" class = "toggle-show-password">
                                Tampilkan                            </label>
                            <label for="js-show-password-checkbox" id="js-hide-password-label" class = "toggle-show-password hide">
                                Sembunyikan                            </label>
                            <input class="ui-inputPassword" name="RegistrationForm[password]" id="RegistrationForm_password" type="password" maxlength="70" />                            <span class="inputfieldvalidation passwordValidation"></span>
                                                        <div class="error__client error__client--password hide">
                                Kata sandi Anda harus setidaknya 6 karakter.                            </div>
                        </div>
                        <input class="hide ui-inputPassword" name="RegistrationForm[password2]" id="RegistrationForm_password2" type="password" />
                    </div>
                    <div class="mtl ui-formRow box">
                        <div class="inputfield input__container--gender">
                            <div class="register__genderLabel ui-formRow box">
                                <div class="lfloat">
                                <label class="lfloat" for="RegistrationForm_gender">Jenis Kelamin</label>                                </div>
<!--                                //SHOP-14948 simulate * for required gender field on client side-->
                                <div class="mls lfloat strong">*</div>
                                <div class="lfloat">
                                <label class="lfloat mls register__labelDescription" for="RegistrationForm_gender_description">- 	untuk personalisasi akun</label>                                </div>
                            </div>

                            <input id="ytRegistrationForm_gender" type="hidden" value="" name="RegistrationForm[gender]" /><span id="RegistrationForm_gender"><label class="radioLabel radiobutton__container">Wanita<input class="input-text" id="RegistrationForm_gender_0" value="female" type="radio" name="RegistrationForm[gender]" /><span class='radiomark'></span></label><label class="radioLabel radiobutton__container">Pria<input class="input-text" id="RegistrationForm_gender_1" value="male" type="radio" name="RegistrationForm[gender]" /><span class='radiomark'></span></label></span>                            <span class="inputgendervalidation"></span>
                        </div>
                        <div class="error__client error__client--gender hide">
                            Pilih jenis kelamin                        </div>
                                            </div>
                   <div class="ui-formRow box mtl">
                        <div class="box">
                            <label class="lfloat" for="RegistrationForm_first_name">Nama Depan</label>                            <label class="lfloat mls register__labelDescription" for="RegistrationForm_first_name_description"></label>                            <div class="inputfield">
                                <input class="js-registrationForm__firstname ui-inputText" name="RegistrationForm[first_name]" id="RegistrationForm_first_name" type="text" maxlength="35" />                                <span class="inputfieldvalidation"></span>
                            </div>
                                                    </div>
                    </div>
                    <div class="ui-formRow box mtl">
                        <div class="container">
                            <label class="lfloat" for="RegistrationForm_birthday">Tanggal Lahir</label>                            <label class="lfloat mls register__labelDescription" for="RegistrationForm_birthday_description">- dapatkan kejutan hari ulang tahun!</label>                            <div class="inputfield input__container--birthday">
                                <div class="form-group lfloat register__day register__select">
                                    <select class="register__day--select" name="RegistrationForm[day]" id="RegistrationForm_day">
<option value=""></option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>                                    <label class="register__dateLabel" for="RegistrationForm_day">Tanggal</label>                                    <div class="error__client error__client--day error__client--datePart hide">
                                        Pilih hari                                    </div>
                                </div>
                                <div class="form-group lfloat register__month register__select">
                                    <select class="register__month--select" name="RegistrationForm[month]" id="RegistrationForm_month">
<option value=""></option>
<option value="01">Januari</option>
<option value="02">Februari</option>
<option value="03">Maret</option>
<option value="04">April</option>
<option value="05">Mei</option>
<option value="06">Juni</option>
<option value="07">Juli</option>
<option value="08">Agustus</option>
<option value="09">September</option>
<option value="10">Oktober</option>
<option value="11">November</option>
<option value="12">Desember</option>
</select>                                    <label class="register__dateLabel" for="RegistrationForm_month">Bulan</label>                                    <div class="error__client error__client--month error__client--datePart hide">
                                        Pilih bulan                                    </div>
                                </div>
                                <div class="form-group lfloat register__year register__select">
                                    <select class="register__year--select" name="RegistrationForm[year]" id="RegistrationForm_year">
<option value="" selected="selected"></option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
</select>                                    <label class="register__dateLabel" for="RegistrationForm_year">Tahun</label>                                    <div class="error__client error__client--year error__client--datePart hide">
                                        Pilih tahun                                    </div>
                                </div>
                                <span class="inputfieldvalidation"></span>
                            </div>
                        </div>
                        <!--errors-->
<!--                        <div class="error__client error__client--day hide">-->
<!--                            --><!--                        </div>-->
<!--                        <div class="error__client error__client--month hide">-->
<!--                            --><!--                        </div>-->
<!--                        <div class="error__client error__client--year hide">-->
<!--                            --><!--                        </div>-->
                        <div class="error__client error__client--birthday hide">
                            Pastikan tanggal lahir Anda sudah benar dan coba lagi.                        </div>
                                                                                                                                                                                    </div>

                                        <div class="ui-formRow mtl">
                                                    <div class="checkbox b-register__keepme checkbox__container">
                                <input checked="checked" type="checkbox" value="1" name="stayLogged" id="stayLogged" />                                <label class="ui-inlineBlock staylogged checkmark" for="stayLogged"></label>                                <label class="ui-inlineBlock staylogged" for="stayLogged">Saya ingin tetap login</label>                            </div>
                                            </div>

                    <div class="ui-formRow b-register__newsletterTxt fss">
                        <div class=".b-register__newsletterCheckbox">
                                                            <div class="collection newsletter unit checkbox__container">
                                    <input id="ytRegistrationForm_is_newsletter_subscribed" type="hidden" value="0" name="RegistrationForm[is_newsletter_subscribed]" /><input class="ui-inlineBlock lfloat" checked="checked" name="RegistrationForm[is_newsletter_subscribed]" id="RegistrationForm_is_newsletter_subscribed" value="1" type="checkbox" />                                    <label class="ui-inlineBlock register_subscription" for="RegistrationForm_is_newsletter_subscribed">Kirimkan penawaran eksklusif ZALORA & info fashion terbaru</label>                                                                        <label class="ui-inlineBlock register_subscription checkmark" for="RegistrationForm_is_newsletter_subscribed"></label>                                </div>
                                                    </div>
                    </div>
                    
                    
                    <div class="">
                        <button class=""> MASUK</button>
                    </div>
                </form>
            </div>
        </div>
        
                    
        
        
        
              
        
    </div>
    <div class="footer">
        <div class="Brand-Pencarian">
            <div class="Brand">
                <div class="brand-name" id="Abu-Abu">BRAND PALING TOP</div>
                <div class="brand-body">
                    <div class="brand-top">
                        <ul style="margin-right : 82px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Abercrombie & Fitch</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">adidas</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Aira Muslim Butik</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">ALBA</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">ALDO</a></li>
                        </ul>
                        <ul style="margin-right : 60px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Alexandre Christie</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Anello</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Batik Putra Bengawan</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">bhatara batik</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Billabong</a></li>
                        </ul>
                        <ul style="margin-right : 85px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Call It Spring</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">CARVIL</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Casio</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Contempo</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Converse</a></li>
                        </ul>
                    </div>
                    <div class="brand-bottom">
                        <ul style="margin-right : 102px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Cotton On</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">CR7</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Cressida</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Daniel Wellington</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">DC</a></li>
                        </ul>
                        <ul style="margin-right : 80px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Dr. Martens</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">EN-JI by Palomino</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">ESPRIT</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Eyescream</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Fjallraven Kanken</a></li>
                        </ul>
                        <ul style="margin-right : 82px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Gobelini</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">GREENLIGHT</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Herschel</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Hollister</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">HUER</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="Pencarian">
                <div class="brand-name" id="Abu-Abu">PENCARIAN POPULER</div>
                <div class="brand-body">
                    <div class="brand-top">
                        <ul style="margin-right : 90px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Aksesoris</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Baju Muslim</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Kacamata Wanita</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Pakaian Olahraga</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Fashion Terbaru</a></li>
                        </ul>
                        <ul style="margin-right : 82px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Sandal</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Batik</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Sepatu Boot Wanita</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Sepatu </a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Tas</a></li>
                        </ul>
                        <ul style="margin-right : 82px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Harga Diskon</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Designer</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Baju</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Kacamata Pria</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Kaos</a></li>
                        </ul>
                    </div>
                    <div class="brand-bottom">
                        <ul style="margin-right : 121px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Celana Kulot</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Jas</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Tunik Muslim </a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Jaket Pria</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Kemeja Pria</a></li>
                        </ul>
                        <ul style="margin-right : 108px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Dompet Wanita</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Kebaya</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Lingerie</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Blazer</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Sepatu Boots</a></li>
                        </ul>
                        <ul style="margin-right : 35px">
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Sepatu Sneakers Wanita</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Sandal Gunung</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Baju Tidur</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Celana Chino</a></li>
                            <li class="geser-kebawah"><a id="Abu-Abu" href="#">Jam Tangan Wanita</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="Icon-Partner">
            <div class="company">
                <p>A COMPANY BY</p>
                <svg class=""></svg>
            </div>


            <div class="Lokasi-Cabang">
                <p>Lokasi Kami</p>
                <div class="Isi-Lokasi">
                    <div class="">
                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                    </div>

                    <div class="">
                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                    </div>
                </div>

            </div>
            <div class="Icon-Pembayaran">
                <div class="">PEMBAYARAN </div>
                <div class="">
                    <div class="">
                        <svg class=""></svg>
                        <svg class=""></svg>
                        <svg class=""></svg>
                        <svg class=""></svg>
                        <svg class=""></svg>
                    </div>
                    <div class="">
                        <svg class=""></svg>
                        <svg class=""></svg>
                        <svg class=""></svg>
                        <svg class=""></svg>
                    </div>
                </div>
            </div>
            <div class="Icon-Pengiriman">
                <div class="">JASA PENGIRIMAN</div>
                <div class="">
                    <div class="">
                        <svg class=""></svg>
                        <svg class=""></svg>
                        <svg class=""></svg>
                        <svg class=""></svg>
                    </div>
                    <div class="">
                        <svg class=""></svg>
                        <svg class=""></svg>
                        <svg class=""></svg>
                        <svg class=""></svg>
                    </div>
                </div>
            </div>
            <div class="Partner">
                <div class="">PARTNER KAMI</div>
                <div class="">
                    <div class="">
                        <svg class=""></svg>
                        <svg class=""></svg>
                        <svg class=""></svg>
                    </div>
                    <div class="">
                        <svg class=""></svg>
                        <svg class=""></svg>
                    </div>
                </div>
            </div>
            <div class="Icon-keamanan">
                <div class="">SISTEM KEAMANAN</div>
                <div class="">
                    <div class="">
                        <img src="" alt="">
                        <div class="">
                            <ul class="">
                                <li>PCI Security Standard</li>
                                <li>Cardholder Protection</li>
                                <li>Encrypted Network</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="Footer_background_black">
            <div class="Footer-end">
                <div id="Abu-Abu" class="Zalora_end">
                    <h1 id="White">Z A L O R A</h1>
                    Sebagai Pusat Fashion Online di Asia, kami
                    menciptakan kemungkinan-kemungkinan gaya tanpa
                    batas dengan cara memperluas jangkauan produk,
                    mulai dari produk internasional hingga produk lokal
                    dambaan. Kami menjadikan Anda sebagai pusatnya.
                    <p style="font-weight: bold;">Bersama ZALORA, You Own Now.</p>
                    <div class="Temukan-Kami">
                        <h6 id="White">TEMUKAN KAMI</h6>
                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>

                        <a title="" href="#">
                            <svg class=""></svg>
                        </a>
                    </div>

                </div>
                <div class="Layanan_end">
                    <h6 id="White">LAYANAN</h6>
                    <ul>
                        <li><a id="Abu-Abu" href="#">Bantuan</a></li>
                        <li><a id="Abu-Abu" href="#">Cara Pengembalian</a></li>
                        <li><a id="Abu-Abu" href="#">Product Index</a></li>
                        <li><a id="Abu-Abu" href="#">Promo Parnet Kami</a></li>
                        <li><a id="Abu-Abu" href="#">Konfermasi Transfer</a></li>
                        <li><a id="Abu-Abu" href="#">Hubungi Kami</a></li>
                        <li><a id="Abu-Abu" href="#">Cara Berjualan</a></li>
                        <li><a id="Abu-Abu" href="#">Pengembalian Ongkir</a></li>
                        <li><a id="Abu-Abu" href="#">Status Order</a></li>
                    </ul>
                </div>
                <div class="Tentang-Kami">
                    <h6 id="White">TENTANG KAMI</h6>
                    <ul>
                        <li><a id="Abu-Abu" href="#">About Us</a></li>
                        <li><a id="Abu-Abu" href="#">Promosikan Brand Anda</a></li>
                        <li><a id="Abu-Abu" href="#">Pers/Media</a></li>
                        <li><a id="Abu-Abu" href="#">Karir</a></li>
                        <li><a id="Abu-Abu" href="#">Persyaratan & Kententuan</a></li>
                        <li><a id="Abu-Abu" href="#">Kebijakan Privasi</a></li>
                        <li><a id="Abu-Abu" href="#">Affiliate Marketing</a></li>
                        <li><a id="Abu-Abu" href="#">THREAD by ZALORA</a></li>
                    </ul>
                </div>
                <div class="Anda-Baru-Di-Zalora">
                    <h6 id="White">ANDA BARU DI ZALORA ?</h6>
                    <p id="Abu-Abu">Dapatkan <span style="color:yellow"> 75.000 VOUCHER </span>(ditambah dengan berita
                        fashion dan peluncuran brand terbaru) hanya
                        dengan berlangganan newsletter kami.</p>
                    <div class="Input-Email">
                        <p id="Abu-Abu">Alamat Email Kamu </p>
                        <input type="text" class="Input_email_footer" placeholder="Someone@example.com">
                        <div class="Btn_Footer_Wanita_Pria">
                            <input type="button" class="Btn_Wanita_Footer" value="WANITA">
                            <input type="button" class="Btn_Pria_Footer" value="PRIA">
                        </div>
                    </div>
                    <div class="Download_app">
                        <h6 id="White" style="font-weight: bold;">DOWNLOAD APP KAMI SEKARANG</h6>
                        <div class="Img_footer_mobile_app">
                            <a href="#"><img src="" alt=""></a>
                            <a href="#"><img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>














    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>