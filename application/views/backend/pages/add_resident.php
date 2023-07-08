<!-- Main Content -->
<div id="content">
  <div class="container">
   <h1 class="h3 mb-4">Resident</h1>
    <form method="POST">
        <div class="form-row">
      <div class="form-group col-md-2">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" class="form-control" required/>
        <span class="text-danger"><?=form_error('firstname')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="middlename">Middle Name:</label>
        <input type="text" id="middlename" name="middlename" class="form-control" required/>
        <span class="text-danger"><?=form_error('middlename')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="lastname">Last Name:</label>
        <input type="text" id="last_name" name="lastname" class="form-control" required/>
        <span class="text-danger"><?=form_error('lastname')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="nameex">Name Extension:</label>
        <input type="text" id="nameex" name="nameex" class="form-control" />
        <span class="text-danger"><?=form_error('nameex')?></span>
      </div>
</div>
<div class="form-row">
      <div class="form-group col-md-4">
        <label for="birth_date">Birth Date:</label>
        <input type="date" id="birth_date" name="birth_date" class="form-control" required/>
        <span class="text-danger"><?=form_error('birth_date')?></span>
      </div>
      <div class="form-group col-md-4">
        <label for="birth_date">Birth Place:</label>
        <input type="text" id="birthplace" name="birthplace" class="form-control" required/>
        <span class="text-danger"><?=form_error('birthplace')?></span>
      </div>
</div>
      <div class="form-row">
      <div class="form-group col-md-2">
        <label for="purok">Purok:</label>
        <select id="purok" name="purok" class="form-control" required>
          <option value="Purok 1">Purok 1</option>
          <option value="Purok 2">Purok 2</option>
          <option value="Purok 3">Purok 3</option>
          <option value="Purok 4">Purok 4</option>
          <option value="Purok 5">Purok 5</option>
          <option value="Purok 6">Purok 6</option>
          <option value="Purok 7">Purok 7</option>
</select>
<span class="text-danger"><?=form_error('purok')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="barangay">Barangay:</label>
        <select id="barangay" name="barangay" class="form-control" required>
          <option value="Agsoso">Agsoso</option>
          <option value="Badbad Occidental">Badbad Occidental</option>
          <option value="Badbad Oriental">Badbad Oriental</option>
          <option value="Bagacay Katipunan">Bagacay Katipunan</option>
          <option value="Bagacay Saong">Bagacay Saong</option>
          <option value="Bahi">Bahi</option>
          <option value="Basac">Basac</option>
          <option value="Basdacu">Basdacu</option>
          <option value="Basdio">Basdio</option>
          <option value="Biasong">Biasong</option>
          <option value="Bongco">Bongco</option>
          <option value="Bugho">Bugho</option>
          <option value="Cabacongan">Cabacongan</option>
          <option value="Cabadug">Cabadug</option>
          <option value="Cabug">Cabug</option>
          <option value="Calayugan Norte">Calayugan Norte</option>
          <option value="Canmaag">Canmaag</option>
          <option value="Cambaquiz">Cambaquiz</option>
          <option value="Campatud">Campatud</option>
          <option value="Candaigan">Candaigan</option>
          <option value="Canhangdon Occidental">Canhangdon Occidental</option>
          <option value="Canhangdon Oriental">Canhangdon Oriental</option>
          <option value="Canigaan">Canigaan</option>
          <option value="Canmanoc">Canmanoc</option>
          <option value="Cansuagwit">Cansuagwit</option>
          <option value="Cansubayon">Cansubayon</option>
          <option value="Catagbacan Handig">Catagbacan Handig</option>
          <option value="Catagbacan Norte">Catagbacan Norte</option>
          <option value="Catagbacan Sur">Catagbacan Sur</option>
          <option value="Cantam-is Bago">Cantam-is Bago</option>
          <option value="Cantaongon">Cantaongon</option>
          <option value="Cantumocad">Cantumocad</option>
          <option value="Cantam-is Baslay">Cantam-is Baslay</option>
          <option value="Cogon Norte (Pob.)">Cogon Norte (Pob.)</option>
          <option value="Cogon Sur">Cogon Sur</option>
          <option value="Cuasi">Cuasi</option>
          <option value="Genomoan">Genomoan</option>
          <option value="Lintuan">Lintuan</option>
          <option value="Looc">Looc</option>
          <option value="Mocpoc Norte">Mocpoc Norte</option>
          <option value="Mocpoc Sur">Mocpoc Sur</option>
          <option value="Nagtuang">Nagtuang</option>
          <option value="Napo (Pob.)">Napo (Pob.)</option>
          <option value="Nueva Vida">Nueva Vida</option>
          <option value="Panangquilon">Panangquilon</option>
          <option value="Pantudlan">Pantudlan</option>
          <option value="Pig-ot">Pig-ot</option>
          <option value="Moto Norte (Pob.)">Moto Norte (Pob.)</option>
          <option value="Moto Sur (Pob.)">Moto Sur (Pob.)</option>
          <option value="Pondol">Pondol</option>
          <option value="Quinobcoban">Quinobcoban</option>
          <option value="Sondol">Sondol</option>
          <option value="Song-on">Song-on</option>
          <option value="Talisay">Talisay</option>
          <option value="Tan-awan">Tan-awan</option>
          <option value="Tangnan">Tangnan</option>
          <option value="Taytay">Taytay</option>
          <option value="Ticugan">Ticugan</option>
          <option value="Tiwi">Tiwi</option>
          <option value="Tontonan">Tontonan</option>
          <option value="Tubodacu">Tubodacu</option>
          <option value="Tubodio">Tubodio</option>
          <option value="Tubuan">Tubuan</option>
          <option value="Ubayon">Ubayon</option>
          <option value="Ubojan">Ubojan</option>
        </select>
        <span class="text-danger"><?=form_error('barangay')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="municipality">Municipality:</label>
        <select id="municipality" name="municipality" class="form-control" required>
          <option value="Alburquerque">Alburquerque</option>
          <option value="Alicia">Alicia</option>
          <option value="Anda">Anda</option>
          <option value="Antequera">Antequera</option>
          <option value="Baclayon">Baclayon</option>
          <option value="Balilihan">Balilihan</option>
          <option value="Batuan">Batuan</option>
          <option value="Bien Unido">Bien Unido</option>
          <option value="Bilar">Bilar</option>
          <option value="Buenavista">Buenavista</option>
          <option value="Calape">Calape</option>
          <option value="Candijay">Candijay</option>
          <option value="Carmen">Carmen</option>
          <option value="Catigbian">Catigbian</option>
          <option value="Clarin">Clarin</option>
          <option value="Corella">Corella</option>
          <option value="Cortes">Cortes</option>
          <option value="Dagohoy">Dagohoy</option>
          <option value="Danao">Danao</option>
          <option value="Dauis">Dauis</option>
          <option value="Dimiao">Dimiao</option>
          <option value="Duero">Duero</option>
          <option value="Garcia-Hernandez">Garcia-Hernandez</option>
          <option value="Guindulman">Guindulman</option>
          <option value="Inabanga">Inabanga</option>
          <option value="Jagna">Jagna</option>
          <option value="Jetafe">Jetafe</option>
          <option value="Lila">Lila</option>
          <option value="Loay">Loay</option>
          <option value="Loboc">Loboc</option>
          <option value="Loon">Loon</option>
          <option value="Mabini">Mabini</option>
          <option value="Maribojoc">Maribojoc</option>
          <option value="Panglao">Panglao</option>
          <option value="Pilar">Pilar</option>
          <option value="President Garcia">President Garcia</option>
          <option value="Sagbayan">Sagbayan</option>
          <option value="San Isidro">San Isidro</option>
          <option value="San Miguel">San Miguel</option>
          <option value="Sevilla">Sevilla</option>
          <option value="Sierra Bullones">Sierra Bullones</option>
          <option value="Sikatuna">Sikatuna</option>
          <option value="Tagbilaran City">Tagbilaran City</option>
          <option value="Talibon">Talibon</option>
          <option value="Trinidad">Trinidad</option>
          <option value="Tubigon">Tubigon</option>
          <option value="Ubay">Ubay</option>
          <option value="Valencia">Valencia</option>
        </select>
        <span class="text-danger"><?=form_error('municipality')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="province">Province:</label>
        <input type="text" id="province" name="province" class="form-control" required/>
        <span class="text-danger"><?=form_error('province')?></span>
      </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-2">
        <label for="sex">Sex:</label>
        <select id="sex" name="sex" class="form-control" required>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
        <span class="text-danger"><?=form_error('sex')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="civil_status">Civil Status:</label>
        <select id="civil_status" name="civil_status" class="form-control" required>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Separated">Separated</option>
          <option value="Divorced">Divorced</option>
          <option value="Widowed">Widowed</option>
        </select>
        <span class="text-danger"><?=form_error('civil_status')?></span>
      </div>
      <div class="form-group col-md-1">
        <label for="height">Height:</label>
        <input type="text" id="height" name="height" class="form-control" required/>
        <span class="text-danger"><?=form_error('height')?></span>
      </div>
      <div class="form-group col-md-1">
        <label for="weight">Weight:</label>
        <input type="text" id="weight" name="weight" class="form-control" required/>
        <span class="text-danger"><?=form_error('weight')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="btype">Blood Type:</label>
        <select id="btype" name="btype" class="form-control" required>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
</select>
        <span class="text-danger"><?=form_error('btype')?></span>
      </div>
</div>
<div class="form-row">
      <div class="form-group col-md-2">
        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality" class="form-control" required/>
        <span class="text-danger"><?=form_error('nationality')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="religion">Religion:</label>
        <input type="text" id="religion" name="religion" class="form-control" required/>
        <span class="text-danger"><?=form_error('religion')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="contact">Contact #:</label>
        <input type="text" id="contact" name="contact" class="form-control" required/>
        <span class="text-danger"><?=form_error('contact')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required/>
        <span class="text-danger"><?=form_error('email')?></span>
      </div>
</div>
<div class="form-row">
<div class="form-group col-md-2">
        <label for="educ">Educational Attainment:</label>
        <select id="educ" name="educ" class="form-control" required>
          <option value="No schooling completed">No schooling completed</option>
          <option value="Elementary Graduate">Elementary Graduate</option>
          <option value="Elementary Undergraduate">Elementary Undergraduate</option>
          <option value="Highschool Graduate">Highschool Graduate</option>
          <option value="Highschool Undergraduate">Highschool Undergraduate</option>
          <option value="College Graduate">College Graduate</option>
          <option value="College Undergraduate">College Undergraduate</option>
          <option value="Vocational">Vocational</option>
          <option value="Bachelor's Degree">Bachelor's Degree</option>
          <option value="Master Degree">Master Degree</option>
          <option value="Doctorate Degree">Doctorate Degree</option>
</select>
        <span class="text-danger"><?=form_error('educ')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="occupation">Occupation:</label>
        <input type="occupation" id="occupation" name="occupation" class="form-control" required/>
        <span class="text-danger"><?=form_error('occupation')?></span>
      </div>
      <div class="form-group col-md-2">
        <label for="monthly">Monthly Income:</label>
        <input type="monthly" id="monthly" name="monthly" class="form-control" required/>
        <span class="text-danger"><?=form_error('monthly')?></span>
      </div>
</div>
<h2 class="h5 mb-3">Family Background</h2>
<form method="POST">
        <div class="form-row">
      <div class="form-group col-md-2">
        <label for="fullname">Spouse Full Name:</label>
        <input type="text" id="fullname" name="fullname" class="form-control"/>
        <span class="text-danger"><?=form_error('fullname')?></span>
      </div>
</div>

        <button type="submit" class="btn btn-primary">Add Resident</button>
      </div>
    </form>
  </div>
</div>