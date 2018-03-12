<html>
<head>
  <link rel="stylesheet" href="home.css">
  <script>
    function contentHome(){
      document.getElementById("content").innerHTML = "<p>Discover the peaceful living of Bali’s greeneries at <b>The Pramana Hotel & Resort</b>. Situated in spacious landscape between tropical fruit and rare trees, this best villa in Ubud will indulge you during your holiday. Get a high quality lazy day with reading your favorite book under the cooling shade next to the pool or having a laid back under the sun with water flow from the river as your back sound. <br><br>Exclusive holiday back in style! Surrounded with the green lush, <b>The Pramana Hotel & Resort</b> combines a lifestyle, luxury and Balinese authentic living style to offer. Strategically located Kumbuh Village, Ubud-Bali, this Ubud accommodation only 15 minutes drives from the artistic Ubud Center and 90 minutes from Ngurah Rai International Airport. <br><br>Featured with 30 appointed rooms and villas in Balinese style, <b>The Pramana Hotel & Resort</b> offers more than just a luxury accommodation. Each classy yet elegant room and villa are equipped with ethnic touch that invites you to relax after your tiring day. Stay Up to date since this best villa has the business center and enjoy the green view while sipping an ice-cold drinks or you can have a dining experience in the cozy restaurant. <b>The Pramana Hotel & Resort</b> with its luxury accommodation will be a perfect place to stay at Ubud, Bali.</p>";
    }

    function contentFacility(){
      document.getElementById("content").innerHTML = "<p> <b>Yoga Center</b><br><br>Positioned on the upper floor incorporate with Radha Spa, it’s a circled floor and coned style grass roof. This place is a holy land with high level vibration, is the best place for yoga and meditation to recharge mind and spirit. Enjoy Morning Free Yoga session by a Balinese Yoga Instructor in a spacious yoga room overlooking to lush rice field and palm trees.<br><br>Throughout the ancient art of classical yoga, you will learn technique to still your mind, strengthen your body and expand your consciousness using posture, breath work, meditation and relaxation. All guests may join the Balinese activities such us : Balinese Dance Lesson, the coconut leave craft and offering making together with our staff on afternoon time after lunch.<br><br><b>The Kumbuh Restaurant</b><br><br>KUMBUH is taken from the Banjar next to the resort. The Restaurant is in second floor building incorporate with The Lobby at the first floor.<br><br>It has 24 seats and an unequalled vantage point to watch the brilliant color of the setting sun. The menu offers you a combination of wonderful Balinese specialties and more familiar Western dishes.<br><br> <b>The Pool</b><br><br>An extensive shaped swimming pool is perched in front of the restaurant and lobby area with awesome view over the garden and surrounding nature. Soak in 15 meters long pool having an ice cold beer and our special drink of the day. Unwind or reading books on a daybed while enjoying the serenity. <br><br>This stunning infinity pool lined with BatuChandi stone, appears to float in its setting. It’s a unique swimmer feeling for swimming around the area.<br><br><b>Radha Spa</b><br><br>Radha Spa is the for mankind in the life, where “life be confidence” relax to refresh the body and conscience throughout their trip. This is the spa designed to facilitate the fundamental needs for the trip more memorable, where guests will find warm touch, genuine and comfortableatmosphere.<br><br> Whether sharing your spa experiences with friends or loved one sand yourparents. Radha Spa provide services and helps guests to find their glow and radiant. Find your glow, brighten your mood and enjoy the moment!!<br><br><b>Business Centre</b><br><br>A tastefully appointed business center incorporate with the lobby area. The Business Centre is provide a social setting for guests to take pleasure for reading, meeting and using our computer with the internet access. There are some books collection by Pramana which can borrow along the stay by contacting our reception.<br><br><b>Lounge</b><br><br>A tastefully appointed Open Lounge environment is incorporated within the Restaurant, which is elevated slightly higher that the ground level for an added dimension of space and purpose. The Lounge will provide a social setting for guests to take pleasure in afternoon tea along with a selection of light refreshments.<br><br><b>General Facilities</b><br><br><br>Details:<br><br><ul><li>Air conditioned King size or twin bed with mosquito net</li><li>Spacious bathroom with marbel sunkenbath and shower</li><li>Private terrace or balcony with dining table</li><li>Nice view to garden and pool from terrace and Bed room</li></ul><br><p>Amenities: </p><ul><li>Daily fruit basket</li><li>Tea & coffee making facilities</li><li>Electronic Safe Deposit Box</li><li>Refrigerator</li><li>Complimentary bottlked mineral water</li><li>LED cable TV and DVD player</li><li>Luxury Bathroom Amenities</li><li>Hot & cold shower and bath</li><li>Free wireless internet</li><li>IDD telephone</li><li>Bathrobes & Slippers</li></ul></p>";
    }

    function contentBook()
    {
      document.getElementById("content").innerHTML="<form action='success.php' name'book' onsubmit='return validateForm()' method='post'><table><tr><th colspan='2'>BOOK ROOM</th></tr><tr><td>Name</td><td><input type='text' name ='name' class='box'></td></tr><tr><td>Email</td><td><input type='email' name ='email' class='box'></td></tr><tr><td>Phone</td><td><input type='text' name ='phone' class='box'></td></tr><tr><td>Stay in Date</td><td><input type='date' name ='date' class='box'></td></tr><tr><td>Length of Stay</td><td><input type='number' name ='name' class='box'></td></tr><tr><td>Room Type</td><td><select name='room' class='select'><option value=''>--Select One--</option><option value='Deluxe Room'>Deluxe Room - $274</option><option value='Deluxe Villa'>Deluxe Pool Villa - $438</option><option value='1'>1 Bedroom Pool Villa - $525</option><option value='2'>2 Bedroom Pool Villa - $635</option></select></td></tr><tr><td>Additional Charge</td><td><input type='checkbox' name ='extrabed' value='bed'>Extra Bed - $80<br><input type='checkbox' name ='shuttle' value='shuttle'>Airport Shuttle - $40<br><input type='checkbox' name ='tour' value='tour'>Ubud Tour 1D - $100</td></tr><tr><th colspan='2'><input type='submit' value='SUBMIT' class='btn'></tr></table></form>";
    }
    let today = new Date();
  </script>
</head>
<body>
    <div id="heading">
      <img src="logo2.png">
    </div>
    <div class="menu">
      <div class="btnhome">
        <button class="btn" onclick="contentHome()">HOME</button>
      </div>
      <div class="btnfacility">
        <button class="btn" onclick="contentFacility()">FACILITY</button>
      </div>
      <div class="btnbookroom">
        <button class="btn" onclick="location.href ='form.php';">BOOK ROOM</button>
      </div>
      <hr>
    </div>
    <div id="content">
      <form action="success.php" name ="book" onsubmit='return validateForm()' method='post'>
        <table>
          <tr>
            <th colspan='2'>BOOK ROOM</th>
          </tr>
          <tr>
            <td>Name</td>
            <td><input type='text' name ='name' class='box'></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type='email' name ='email' class='box'></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><input type='text' name ='phone' class='box'></td>
          </tr>
          <tr>
            <td>Stay in Date</td>
            <td><input type='date' name ='date' class='box'></td>
          </tr>
          <tr>
            <td>Length of Stay</td>
            <td><input type='number' name ='days' class='box'></td>
          </tr>
          <tr>
            <td>Room Type</td>
            <td>
              <select name='room' class='select'>
                <option value=''>--Select One--</option>
                <option value='Deluxe Room'>Deluxe Room - $274</option>
                <option value='Deluxe Villa'>Deluxe Pool Villa - $438</option>
                <option value='1'>1 Bedroom Pool Villa - $525</option>
                <option value='2'>2 Bedroom Pool Villa - $635</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Additional Charge</td>
            <td>
              <input type='checkbox' name ='bed' value='1'>Extra Bed - $80<br>
              <input type='checkbox' name ='shuttle' value='1'>Airport Shuttle - $40<br>
              <input type='checkbox' name ='tour' value='1'>Ubud Tour 1D - $100</td>
            </tr>
            <tr>
              <th colspan='2'><input type='submit' value='SUBMIT' class='btn'>
            </tr>
          </table>
        </form>
    </div>
    <div class="footer">
      &copy;2017 Pramana Experience - All Rights Reserved
    </div>
    <script>
    function validateForm()
    {
      let name = document.forms["book"]["name"].value;
      let email = document.forms["book"]["email"].value;
      let phone = document.forms["book"]["phone"].value;
      let date = document.forms["book"]["date"].value;
      let days = document.forms["book"]["days"].value;
      let room = document.forms["book"]["room"].value;
      let bed = document.forms["book"]["bed"].value;
      let shuttle = document.forms["book"]["shuttle"].value;
      let tour = document.forms["book"]["tour"].value;
      console.log(today.getTime());
      console.log(name);
      if(name=="")
      {
        alert("Name must be filled");
        return false;
      }
      else if (email=="")
      {
        alert("Email must be filled");
        return false;
      }
      else if (phone=="")
      {
        alert("Phone Number must be filled");
        return false;
      }
      else if (isNaN(phone))
      {
        alert("Phone Number must be numeric");
        return false;
      }
      else if (room=="")
      {
        alert("Room must be selected");
        return false;
      }
      else if (days=="")
      {
        alert("Length of stay must be filled");
        return false;
      }
      else if (days===0)
      {
        alert("Length of stay must be more than 0");
        return false;
      }
      else if (new Date(date).getTime() <= today.getTime())
      {
        alert("Date must be later than today");
        return false;
      }
      else {
        return true;
      }
    }
    </script>
</body>
</html>
