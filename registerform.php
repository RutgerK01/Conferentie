<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="./images/conferentie.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Conferentie</title>

    <?php include('./include.php');
       $een = false;
       $twee = false;

       $wrong = false;
       $mail = false;
       $ww = false;
       $ACPT = false;

       if(isset($_GET["action"])){
        if($_GET["action"] == "speaker"){
          $een = true;
          $action = 'speaker';
        }

        if($_GET["action"] == "speakerACPT"){
          $een = true;
          $action = 'speaker';
          $ACPT = '<center><h1 id="wrong">You did not accept the terms and Conditions and Privacy Statement.</h1></center>';
        }

        if($_GET["action"] == "speakerMail"){
          $een = true;
          $action = 'speaker';
          $mail = '<center><h1 id="wrong">Emails did not match.</h1></center>';
        }

        if($_GET["action"] == "speakerMailE"){
          $een = true;
          $action = 'speaker';
          $mail = '<center><h1 id="wrong">One or more of the email field where left empty.</h1></center>';
        }

        if($_GET["action"] == "speakerWW"){
          $een = true;
          $action = 'speaker';
          $ww = '<center><h1 id="wrong">Passwords did not match.</h1></center>';
        }

        if($_GET["action"] == "speakerWWE"){
          $een = true;
          $action = 'speaker';
          $ww = '<center><h1 id="wrong">Emails did not match.</h1></center>';
        }

        if($_GET["action"] == "speakerWrong"){
          $een = true;
          $wrong = '<center><h1 id="wrong">Email already exists.</h1></center>';
          $action = 'speaker';
        }

        if($_GET["action"] == "user"){
          $twee = true;
          $action = 'user';
        }

        if($_GET["action"] == "userACPT"){
          $twee = true;
          $action = 'user';
          $ACPT = '<center><h1 id="wrong">You did not accept the terms and Conditions and Privacy Statement.</h1></center>';
        }

        if($_GET["action"] == "userMail"){
          $twee = true;
          $action = 'user';
          $mail = '<center><h1 id="wrong">Emails did not match.</h1></center>';
        }

        if($_GET["action"] == "userMailE"){
          $twee = true;
          $action = 'user';
          $mail = '<center><h1 id="wrong">One or more of the email field where left empty.</h1></center>';
        }

        if($_GET["action"] == "userWW"){
          $twee = true;
          $action = 'user';
          $ww = '<center><h1 id="wrong">Passwords did not match.</h1></center>';
        }

        if($_GET["action"] == "userWWE"){
          $twee = true;
          $action = 'user';
          $ww = '<center><h1 id="wrong">One or more of the password field where left empty.</h1></center>';
        }

        if($_GET["action"] == "userWrong"){
          $twee = true;
          $wrong = '<center><h1 id="wrong">Email already exists.</h1></center>';
          $action = 'user';
        }
      }

        $user = '';

        if($een){
          $user='<form action="./register.php?action=' . $action . '" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Repeat email</label>
              <input name="Remail" type="email" class="form-control" id="inputPassword4" placeholder="Repeat email">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputAddress">Firstname</label>
              <input name="Fname" type="text" class="form-control" id="inputAddress" placeholder="Firstname">
            </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Insertion</label>
            <input name="In" type="text" class="form-control" id="inputAddress" placeholder="Insertion">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Lastname</label>
            <input name="Lname" type="text" class="form-control" id="inputAddress" placeholder="Lastname">
          </div>  
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Password</label>
              <input name="ww" type="password" class="form-control" id="inputEmail4" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Repeat password</label>
              <input name="Rww" type="password" class="form-control" id="inputPassword4" placeholder="Repeat Password">
            </div>
          </div>
          <h3>Day of birth:</h3>
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="select">Month</label>
              <select id="select" class="form-control" name="month">
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>
            <div class="form-group col-md-2">
            <label for="select">Day</label>
            <select id="select" class="form-control" name="day">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
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
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="select">Year</label>
            <select id="select" class="form-control" name="year">
            <option value="1960">1960</option>
            <option value="1961">1961</option>
            <option value="1962">1962</option>
            <option value="1963">1963</option>
            <option value="1964">1964</option>
            <option value="1965">1965</option>
            <option value="1966">1966</option>
            <option value="1967">1967</option>
            <option value="1968">1968</option>
            <option value="1969">1969</option>
            <option value="1970">1970</option>
            <option value="1971">1971</option>
            <option value="1972">1972</option>
            <option value="1973">1973</option>
            <option value="1974">1974</option>
            <option value="1975">1975</option>
            <option value="1976">1976</option>
            <option value="1977">1977</option>
            <option value="1978">1978</option>
            <option value="1979">1979</option>
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000" selected>2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2018">2019</option>
          </select>
            </div>
            <div class="form-group col-md-2">
              <label for="phone">Land code</label>
              <select class="form-control" name="Lcode">
                <option value="+93">+93</option>
                <option value="+355">+355</option>
                <option value="+213">+213</option>
                <option value="+376">+376</option>
                <option value="+244">+244</option>
                <option value="+672">+672</option>
                <option value="+54">+54</option>
                <option value="+374">+374</option>
                <option value="+297">+297</option>
                <option value="+61">+61</option>
                <option value="+43">+43</option>
                <option value="+994">+994</option>
                <option value="+973">+973</option>
                <option value="+880">+880</option>
                <option value="+375">+375</option>
                <option value="+32">+32</option>
                <option value="+501">+501</option>
                <option value="+229">+229</option>
                <option value="+975">+975</option>
                <option value="+591">+591</option>
                <option value="+387">+387</option>
                <option value="+267">+267</option>
                <option value="+55">+55</option>
                <option value="+246">+246</option>
                <option value="+673">+673</option>
                <option value="+359">+359</option>
                <option value="+226">+226</option>
                <option value="+257">+257</option>
                <option value="+855">+855</option>
                <option value="+237">+237</option>
                <option value="+1">+1</option>
                <option value="+238">+238</option>
                <option value="+236">+236</option>
                <option value="+235">+235</option>
                <option value="+56">+56</option>
                <option value="+86">+86</option>
                <option value="+61">+61</option>
                <option value="+57">+57</option>
                <option value="+269">+269</option>
                <option value="+682">+682</option>
                <option value="+506">+506</option>
                <option value="+385">+385</option>
                <option value="+53">+53</option>
                <option value="+599">+599</option>
                <option value="+357">+357</option>
                <option value="+420">+420</option>
                <option value="+243">+243</option>
                <option value="+45">+45</option>
                <option value="+243">+243</option>
                <option value="+45">+45</option>
                <option value="+253">+253</option>
                <option value="+670">+670</option>
                <option value="+593">+593</option>
                <option value="+20">+20</option>
                <option value="+503">+503</option>
                <option value="+240">+240</option>
                <option value="+291">+291</option>
                <option value="+372">+372</option>
                <option value="+251">+251</option>
                <option value="+500">+500</option>
                <option value="+298">+298</option>
                <option value="+679">+679</option>
                <option value="+358">+358</option>
                <option value="+33">+33</option>
                <option value="+689">+689</option>
                <option value="+241">+241</option>
                <option value="+220">+220</option>
                <option value="+995">+995</option>
                <option value="+49">+49</option>
                <option value="+233">+233</option>
                <option value="+350">+350</option>
                <option value="+30">+30</option>
                <option value="+299">+299</option>
                <option value="+502">+502</option>
                <option value="+44">+44</option>
                <option value="+224">+224</option>
                <option value="+245">+245</option>
                <option value="+592">+592</option>
                <option value="+509">+509</option>
                <option value="+504">+504</option>
                <option value="+852">+852</option>
                <option value="+36">+36</option>
                <option value="+354">+354</option>
                <option value="+91">+91</option>
                <option value="+62">+62</option>
                <option value="+98">+98</option>
                <option value="+964">+964</option>
                <option value="+353">+353</option>
                <option value="+972">+972</option>
                <option value="+39">+39</option>
                <option value="+225">+225</option>
                <option value="+1">+1</option>
                <option value="+81">+81</option>
                <option value="+962">+962</option>
                <option value="+7">+7</option>
                <option value="+254">+254</option>
                <option value="+686">+686</option>
                <option value="+383">+383</option>
                <option value="+965">+965</option>
                <option value="+996">+996</option>
                <option value="+856">+856</option>
                <option value="+371">+371</option>
                <option value="+961">+961</option>
                <option value="+266">+266</option>
                <option value="+231">+231</option>
                <option value="+218">+218</option>
                <option value="+423">+423</option>
                <option value="+370">+370</option>
                <option value="+352">+352</option>
                <option value="+853">+853</option>
                <option value="+389">+389</option>
                <option value="+261">+261</option>
                <option value="+265">+265</option>
                <option value="+60">+60</option>
                <option value="+960">+960</option>
                <option value="+223">+223</option>
                <option value="+356">+356</option>
                <option value="+692">+692</option>
                <option value="+222">+222</option>
                <option value="+230">+230</option>
                <option value="+262">+262</option>
                <option value="+52">+52</option>
                <option value="+691">+691</option>
                <option value="+373">+373</option>
                <option value="+377">+377</option>
                <option value="+976">+976</option>
                <option value="+382">+382</option>
                <option value="+212">+212</option>
                <option value="+258">+258</option>
                <option value="+95">+95</option>
                <option value="+264">+264</option>
                <option value="+674">+674</option>
                <option value="+977">+977</option>
                <option selected value="+31">+31</option>
                <option value="+599">+599</option>
                <option value="+687">+687</option>
                <option value="+64">+64</option>
                <option value="+505">+505</option>
                <option value="+227">+227</option>
                <option value="+234">+234</option>
                <option value="+683">+683</option>
                <option value="+850">+850</option>
                <option value="+47">+47</option>
                <option value="+968">+968</option>
                <option value="+92">+92</option>
                <option value="+680">+680</option>
                <option value="+970">+970</option>
                <option value="+507">+507</option>
                <option value="+675">+675</option>
                <option value="+595">+595</option>
                <option value="+51">+51</option>
                <option value="+63">+63</option>
                <option value="+64">+64</option>
                <option value="+48">+48</option>
                <option value="+351">+351</option>
                <option value="+974">+974</option>
                <option value="+242">+242</option>
                <option value="+262">+262</option>
                <option value="+40">+40</option>
                <option value="+7">+7</option>
                <option value="+250">+250</option>
                <option value="+590">+590</option>
                <option value="+290">+290</option>
                <option value="+590">+590</option>
                <option value="+508">+508</option>
                <option value="+685">+685</option>
                <option value="+378">+378</option>
                <option value="+378">+378</option>
                <option value="+239">+239</option>
                <option value="+966">+966</option>
                <option value="+221">+221</option>
                <option value="+381">+381</option>
                <option value="+248">+248</option>
                <option value="+232">+232</option>
                <option value="+65">+65</option>
                <option value="+421">+421</option>
                <option value="+386">+386</option>
                <option value="+677">+677</option>
                <option value="+252">+252</option>
                <option value="+27">+27</option>
                <option value="+82">+82</option>
                <option value="+211">+211</option>
                <option value="+34">+34</option>
                <option value="+94">+94</option>
                <option value="+249">+249</option>
                <option value="+597">+597</option>
                <option value="+47">+47</option>
                <option value="+268">+268</option>
                <option value="+46">+46</option>
                <option value="+41">+41</option>
                <option value="+963">+963</option>
                <option value="+886">+886</option>
                <option value="+992">+992</option>
                <option value="+255">+255</option>
                <option value="+66">+66</option>
                <option value="+228">+228</option>
                <option value="+690">+690</option>
                <option value="+676">+676</option>
                <option value="+216">+216</option>
                <option value="+90">+90</option>
                <option value="+993">+993</option>
                <option value="+688">+688</option>
                <option value="+256">+256</option>
                <option value="+380">+380</option>
                <option value="+971">+971</option>
                <option value="+44">+44</option>
                <option value="+598">+598</option>
                <option value="+998">+998</option>
                <option value="+678">+678</option>
                <option value="+379">+379</option>
                <option value="+58">+58</option>
                <option value="+84">+84</option>
                <option value="+681">+681</option>
                <option value="+212">+212</option>
                <option value="+967">+967</option>
                <option value="+260">+260</option>
                <option value="+263">+263</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="phone">Phonenumber</label>
              <input name="phone" type="text" class="form-control" id="phone" placeholder="Phonenumber">
            </div>
          </div>
          <h3>Topic of your conference:</h3>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4">Topic</label>
              <input name="Topic" type="text" class="form-control" id="inputEmail4" placeholder="Topic">
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Resume</label>
              <input name="Resume" type="text" class="form-control" id="inputPassword4" placeholder="Give a short resume about your topic">
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">Day</label>
          <select class="form-control" name="days">
            <option value="FriH">Friday whole day</option>
            <option value="FriE">Friday between 3pm and 6pm</option>
            <option value="FriA">Friday between 6pm and 11pm</option>
            <option value="SatH">Saturday whole day</option>
            <option value="SatM">Saturday between 10am and 1am</option>
            <option value="SatE">Saturday between 1pm and 6pm</option>
            <option value="SatA">Saturday between 6pm and 11pm</option>
            <option value="SunH">Sunday whole day</option>
            <option value="SunE">Sunday between 12pm and 6pm</option>
            <option value="All" selected>Any day is possible</option>
          </select>
          </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input value="ja" name="accpt" class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Accept <a id="aform" href="?">Terms and Conditions</a> and <a id="aform" href="?">Privacy Statement</a> <button type="submit" class="btn btn-dark">Submit</button>
              </label>
            </div>
          </div>
        </form>';
        }
        if($twee){
          $user='<form action="./register.php?action=' . $action . '" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Repeat email</label>
              <input name="Remail" type="email" class="form-control" id="inputPassword4" placeholder="Repeat email">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputAddress">Firstname</label>
              <input name="Fname" type="text" class="form-control" id="inputAddress" placeholder="Firstname">
            </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Insertion</label>
            <input name="In" type="text" class="form-control" id="inputAddress" placeholder="Insertion">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Lastname</label>
            <input name="Lname" type="text" class="form-control" id="inputAddress" placeholder="Lastname">
          </div>  
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Password</label>
              <input name="ww" type="password" class="form-control" id="inputEmail4" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Repeat password</label>
              <input name="Rww" type="password" class="form-control" id="inputPassword4" placeholder="Repeat Password">
            </div>
          </div>
          <h3>Day of birth:</h3>
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="select">Month</label>
              <select id="select" class="form-control" name="month">
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>
            <div class="form-group col-md-2">
            <label for="select">Day</label>
            <select id="select" class="form-control" name="day">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
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
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="select">Year</label>
            <select id="select" class="form-control" name="year">
            <option value="1960">1960</option>
            <option value="1961">1961</option>
            <option value="1962">1962</option>
            <option value="1963">1963</option>
            <option value="1964">1964</option>
            <option value="1965">1965</option>
            <option value="1966">1966</option>
            <option value="1967">1967</option>
            <option value="1968">1968</option>
            <option value="1969">1969</option>
            <option value="1970">1970</option>
            <option value="1971">1971</option>
            <option value="1972">1972</option>
            <option value="1973">1973</option>
            <option value="1974">1974</option>
            <option value="1975">1975</option>
            <option value="1976">1976</option>
            <option value="1977">1977</option>
            <option value="1978">1978</option>
            <option value="1979">1979</option>
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000" selected>2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2018">2019</option>
          </select>
            </div>
            <div class="form-group col-md-2">
              <label for="phone">Land code</label>
              <select class="form-control" name="Lcode">
                <option value="+93">+93</option>
                <option value="+355">+355</option>
                <option value="+213">+213</option>
                <option value="+376">+376</option>
                <option value="+244">+244</option>
                <option value="+672">+672</option>
                <option value="+54">+54</option>
                <option value="+374">+374</option>
                <option value="+297">+297</option>
                <option value="+61">+61</option>
                <option value="+43">+43</option>
                <option value="+994">+994</option>
                <option value="+973">+973</option>
                <option value="+880">+880</option>
                <option value="+375">+375</option>
                <option value="+32">+32</option>
                <option value="+501">+501</option>
                <option value="+229">+229</option>
                <option value="+975">+975</option>
                <option value="+591">+591</option>
                <option value="+387">+387</option>
                <option value="+267">+267</option>
                <option value="+55">+55</option>
                <option value="+246">+246</option>
                <option value="+673">+673</option>
                <option value="+359">+359</option>
                <option value="+226">+226</option>
                <option value="+257">+257</option>
                <option value="+855">+855</option>
                <option value="+237">+237</option>
                <option value="+1">+1</option>
                <option value="+238">+238</option>
                <option value="+236">+236</option>
                <option value="+235">+235</option>
                <option value="+56">+56</option>
                <option value="+86">+86</option>
                <option value="+61">+61</option>
                <option value="+57">+57</option>
                <option value="+269">+269</option>
                <option value="+682">+682</option>
                <option value="+506">+506</option>
                <option value="+385">+385</option>
                <option value="+53">+53</option>
                <option value="+599">+599</option>
                <option value="+357">+357</option>
                <option value="+420">+420</option>
                <option value="+243">+243</option>
                <option value="+45">+45</option>
                <option value="+243">+243</option>
                <option value="+45">+45</option>
                <option value="+253">+253</option>
                <option value="+670">+670</option>
                <option value="+593">+593</option>
                <option value="+20">+20</option>
                <option value="+503">+503</option>
                <option value="+240">+240</option>
                <option value="+291">+291</option>
                <option value="+372">+372</option>
                <option value="+251">+251</option>
                <option value="+500">+500</option>
                <option value="+298">+298</option>
                <option value="+679">+679</option>
                <option value="+358">+358</option>
                <option value="+33">+33</option>
                <option value="+689">+689</option>
                <option value="+241">+241</option>
                <option value="+220">+220</option>
                <option value="+995">+995</option>
                <option value="+49">+49</option>
                <option value="+233">+233</option>
                <option value="+350">+350</option>
                <option value="+30">+30</option>
                <option value="+299">+299</option>
                <option value="+502">+502</option>
                <option value="+44">+44</option>
                <option value="+224">+224</option>
                <option value="+245">+245</option>
                <option value="+592">+592</option>
                <option value="+509">+509</option>
                <option value="+504">+504</option>
                <option value="+852">+852</option>
                <option value="+36">+36</option>
                <option value="+354">+354</option>
                <option value="+91">+91</option>
                <option value="+62">+62</option>
                <option value="+98">+98</option>
                <option value="+964">+964</option>
                <option value="+353">+353</option>
                <option value="+972">+972</option>
                <option value="+39">+39</option>
                <option value="+225">+225</option>
                <option value="+1">+1</option>
                <option value="+81">+81</option>
                <option value="+962">+962</option>
                <option value="+7">+7</option>
                <option value="+254">+254</option>
                <option value="+686">+686</option>
                <option value="+383">+383</option>
                <option value="+965">+965</option>
                <option value="+996">+996</option>
                <option value="+856">+856</option>
                <option value="+371">+371</option>
                <option value="+961">+961</option>
                <option value="+266">+266</option>
                <option value="+231">+231</option>
                <option value="+218">+218</option>
                <option value="+423">+423</option>
                <option value="+370">+370</option>
                <option value="+352">+352</option>
                <option value="+853">+853</option>
                <option value="+389">+389</option>
                <option value="+261">+261</option>
                <option value="+265">+265</option>
                <option value="+60">+60</option>
                <option value="+960">+960</option>
                <option value="+223">+223</option>
                <option value="+356">+356</option>
                <option value="+692">+692</option>
                <option value="+222">+222</option>
                <option value="+230">+230</option>
                <option value="+262">+262</option>
                <option value="+52">+52</option>
                <option value="+691">+691</option>
                <option value="+373">+373</option>
                <option value="+377">+377</option>
                <option value="+976">+976</option>
                <option value="+382">+382</option>
                <option value="+212">+212</option>
                <option value="+258">+258</option>
                <option value="+95">+95</option>
                <option value="+264">+264</option>
                <option value="+674">+674</option>
                <option value="+977">+977</option>
                <option selected value="+31">+31</option>
                <option value="+599">+599</option>
                <option value="+687">+687</option>
                <option value="+64">+64</option>
                <option value="+505">+505</option>
                <option value="+227">+227</option>
                <option value="+234">+234</option>
                <option value="+683">+683</option>
                <option value="+850">+850</option>
                <option value="+47">+47</option>
                <option value="+968">+968</option>
                <option value="+92">+92</option>
                <option value="+680">+680</option>
                <option value="+970">+970</option>
                <option value="+507">+507</option>
                <option value="+675">+675</option>
                <option value="+595">+595</option>
                <option value="+51">+51</option>
                <option value="+63">+63</option>
                <option value="+64">+64</option>
                <option value="+48">+48</option>
                <option value="+351">+351</option>
                <option value="+974">+974</option>
                <option value="+242">+242</option>
                <option value="+262">+262</option>
                <option value="+40">+40</option>
                <option value="+7">+7</option>
                <option value="+250">+250</option>
                <option value="+590">+590</option>
                <option value="+290">+290</option>
                <option value="+590">+590</option>
                <option value="+508">+508</option>
                <option value="+685">+685</option>
                <option value="+378">+378</option>
                <option value="+378">+378</option>
                <option value="+239">+239</option>
                <option value="+966">+966</option>
                <option value="+221">+221</option>
                <option value="+381">+381</option>
                <option value="+248">+248</option>
                <option value="+232">+232</option>
                <option value="+65">+65</option>
                <option value="+421">+421</option>
                <option value="+386">+386</option>
                <option value="+677">+677</option>
                <option value="+252">+252</option>
                <option value="+27">+27</option>
                <option value="+82">+82</option>
                <option value="+211">+211</option>
                <option value="+34">+34</option>
                <option value="+94">+94</option>
                <option value="+249">+249</option>
                <option value="+597">+597</option>
                <option value="+47">+47</option>
                <option value="+268">+268</option>
                <option value="+46">+46</option>
                <option value="+41">+41</option>
                <option value="+963">+963</option>
                <option value="+886">+886</option>
                <option value="+992">+992</option>
                <option value="+255">+255</option>
                <option value="+66">+66</option>
                <option value="+228">+228</option>
                <option value="+690">+690</option>
                <option value="+676">+676</option>
                <option value="+216">+216</option>
                <option value="+90">+90</option>
                <option value="+993">+993</option>
                <option value="+688">+688</option>
                <option value="+256">+256</option>
                <option value="+380">+380</option>
                <option value="+971">+971</option>
                <option value="+44">+44</option>
                <option value="+598">+598</option>
                <option value="+998">+998</option>
                <option value="+678">+678</option>
                <option value="+379">+379</option>
                <option value="+58">+58</option>
                <option value="+84">+84</option>
                <option value="+681">+681</option>
                <option value="+212">+212</option>
                <option value="+967">+967</option>
                <option value="+260">+260</option>
                <option value="+263">+263</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="phone">Phonenumber</label>
              <input name="phone" type="text" class="form-control" id="phone" placeholder="Phonenumber">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input value="ja" name="accpt" class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Accept <a id="aform" href="?">Terms and Conditions</a> and <a id="aform" href="?">Privacy Statement</a>
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-dark">Submit</button><button class="btn btn-dark" type="button" id="as" onclick="otherPage()">Register as speaker</button>
        </form>';
        }
    ?>
  </head>
  <body>
    <center><h1 id="pageN">Register as <?php if($een){echo'Speaker';}else{echo'User';}?></h1></center>

    <?php echo($mail . $ww . $wrong . $ACPT) ?>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <?php echo($user)?>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>