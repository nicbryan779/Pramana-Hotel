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
    let today = new Date();
  </script>
</head>
<body>
  <?php

        $conn = mysqli_connect('localhost','root','');

        mysqli_select_db($conn,"pramanadb");

        if (!$conn)
         {
          die("Connection failed: " . mysqli_connect_error());
        }
        else
        {
          $name = $_POST["name"];
          $email = $_POST["email"];
          $phone = $_POST["phone"];
          $date = $_POST["date"];
          $days = $_POST["days"];
          $room = $_POST["room"];
          $bed = $_POST["bed"];
          $shuttle = $_POST["shuttle"];
          $tour = $_POST["tour"];

          mysqli_query($conn,"INSERT INTO `bookingtbl` (`id`, `name`, `email`, `phone`, `date`, `days`, `room`, `bed`, `shuttle`, `tour`) VALUES (NULL,'$name','$email','$phone','$date','$days','$room','$bed','$shuttle','$tour')");
        }
    ?>
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
      <div class='success'><b>BOOK ROOM<br><br><br>Your Booking Has Been Successfully Saved<b></div>
    </div>
    <div class="footer">
      &copy;2017 Pramana Experience - All Rights Reserved
    </div>
</body>
</html>
