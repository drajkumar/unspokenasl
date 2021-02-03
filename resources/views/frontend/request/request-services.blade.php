@extends('frontend.master') 

@section('title','Request')

@push('css')
<style>
  .form-control:focus {
    border-color: #116F65;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(6, 105, 89, 0.541);
  }

  .form-group label {
    font-weight: bold;
    margin-bottom: 10px;
  }

  .small {
    margin-bottom: 20px;
  }

  .form-group.required label:after {
    content: "*";
    margin-left: 5px;
    color: red;
  }
</style>
@endpush


@section('mainContent')



<!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark"
      style="background-image: url({{asset('')}}frontend/images/breadcrumbs-image-1.jpg);">
      <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
          <div class="breadcrumbs-custom-main">
            <h1 class="breadcrumbs-custom-title">Request</h1>
          </div>
          <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Request</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- We're excited to serve you! -->
    <section class="section section-lg text-center pb-0">
      <div class="container">
        <h3 class="wow-outer"><span class="wow slideInDown"> We're excited to serve you!! </span></h3>
        <p class="wow-outer mt-3"><span class="wow slideInDown" data-wow-delay=".05s">For us to live up to the <a
              style="color: #005e54;text-decoration:underline;" href="the-unspoken-promise.html">Unspoken Promise</a>
            and perform exceptional service, each request is assigned to one of our interpreters with specializations
            that coordinate with your consumer's need. </span></p>
      </div>
    </section>
    <section class="section section-lg ">
      <div class="container">
        <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
          <div class="col-md-10 col-lg-6 col-xl-5">
            <h4 class="wow-outer"><span class="wow slideInDown">Getting Started in 3 EASY Steps!</span></h4>
            <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">
                <ol style="list-style-type:inherit">
                  <li> 1. <span style="color: #333333;"><strong>CONNECT</strong>: Send us your request below or</span>
                    <a style="color: #005e54;text-decoration:underline;" href="contact-us.html">inquiry</a>.</li>
                  <li> 2. <span style="color: #333333;"><strong>AGREEMENT</strong>: We will send you a simple electronic
                      service agreement to establish a profile with us.</span></li>
                  <li> 3. <span style="color: #333333;"><strong>REQUEST</strong>: As a client with Unspoken Language
                      Services, you can now access our interpreters easily by requesting services anytime via
                      email:</span> <a style="color: #005e54;text-decoration:underline;"
                      href="mailto:services@unspokensigns.com">services@unspokensigns.com</a> <span
                      style="color: #333333;">or through your <a style="color: #005e54;text-decoration:underline;"
                        href="https://clienthub.getjobber.com/client_hubs/51f9fd26-4bd5-4ac9-bebe-5fea857c7e17/login/new">online
                        portal.</a></span></li>
                </ol>
              </span></p>
            <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Organizing a large conference
                requires a great deal of preparation, but the hiring of a quality sign language interpreter is
                frequently overlooked.</span></p>
            <br>
            <h4 class="wow-outer"><span class="wow slideInDown">A FEW THINGS TO NOTE:</span></h4>
            <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">
                <ol class="note-list">
                  <li style="text-align: left;">
                    <blockquote>
                      <p><span style="font-weight: 400f; color: #333333;">1. → Requests are typically fulfilled within
                          24 hours</span></p>
                    </blockquote>
                  </li>
                  <li style="text-align: left;">
                    <blockquote>
                      <p><span style="font-weight: 400f; color: #333333;">2. → Once we've found the right interpreter,
                          you will receive confirmation of services inclusive of your interpreter's name.</span></p>
                    </blockquote>
                  </li>
                  <li style="text-align: left;">
                    <blockquote>
                      <p><span style="color: #333333;"> 3. → If your request needs to be fulfilled in less than 24
                          hours<a style="color: #005e54; text-decoration: underline;" href="contact-us.html"> Contact
                            Us</a>.</span></p>
                    </blockquote>
                  </li>
                  <li style="text-align: left;">
                    <blockquote>
                      <p><span style="font-weight: 400f; color: #333333;">4. → Additional questions? Please email us at
                          <a style="color: #005e54; text-decoration: underline;"
                            href="mailto:services@unspokensigns.com">services@unspokensigns.com</a></span></p>
                    </blockquote>
                  </li>
                </ol>

              </span></p>

          </div>
          <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight"
              src="https://secureservercdn.net/72.167.25.126/2v8.0a8.myftpupload.com/wp-content/uploads/bb-plugin/cache/qtq50-Fzn24H-circle.jpeg"
              alt="" width="570" height="368" />
          </div>
        </div>
      </div>
    </section>
    <!-- Request Form Here  -->
    <div class="section">
      <div class="container">
        <h4 class="mb-2" style="color:#116F65;font-weight:bold">Request Unspoken Services</h4>
        <form>
          <div class="form-row">
            <div class="form-group required col-md-6">
              <label for="inputEmail4">Requesting Company's Name</label>
              <input type="text" class="form-control " id="inputEmail4">
            </div>


          </div>

          <div class="form-row">
            <div class="form-group required col-md-6">
              <label for="inputEmail4">Requesting Company's Email</label>
              <input type="text" class="form-control " id="inputEmail4">
              <small class="form-text text-muted">
                The email address you enter here is where all communications will be sent.
              </small>
            </div>
            <div class="form-group required col-md-6">
              <label for="inputEmail4">Confirm Email Address</label>
              <input type="text" class="form-control " id="inputEmail4">
            </div>

          </div>

          <div class="form-row">
            <div class="form-group required col-md-6">
              <label for="inputPhone">Requesting Company's Phone</label>
              <input type="text" class="form-control " id="inputPhone" placeholder="(111) 111-1111">
            </div>
            <div class="form-group required col-md-6">
              <label for="inputPhone">Contact Person</label>
              <input type="text" class="form-control " id="inputPhone">
              <small class="form-text text-muted">
                Who should we speak to for additional information about this and future requests?
              </small>
            </div>

          </div>
          <div class="form-group required">
            <label for="inputDate">Date of Request</label>
            <input type="text" class="form-control" id="inputDate">
            <small class="form-text text-muted">
              If this is a recurring request that will happen on the same day/time weekly, monthly, etc., please list
              the dates for this request below in the "Additional Information".
            </small>
          </div>

          <div class="form-group required">
            <label for="inputAddress2">Type of Interpreting Request</label>
            <small class="form-text text-muted">
              Setting of the interpretation
            </small>
            <select id="inputInterpreting" class="form-control">
              <option selected value="Medical (In-patient, outpatient, dental, physical therapy, etc.)">Medical
                (In-patient,
                outpatient, dental, physical therapy, etc.)</option>
              <option value="Legal">Legal</option>
              <option value="Post-Secondary (College, Universities, etc.)">Post-Secondary (College, Universities, etc.)
              </option>
              <option value="Educational K-12 (IEP Meeting, parent conferences, etc.)">Educational K-12 (IEP Meeting,
                parent conferences, etc.)</option>
              <option value="Employment (interview, staff meeting, job training, etc.)">Employment (interview, staff
                meeting, job training, etc.)</option>
              <option value="Platform (Lectures, large ceremonies, etc.)">Platform (Lectures, large ceremonies, etc.)
              </option>
              <option value="Life Events (Weddings, Funerals, Parties)">Life Events (Weddings, Funerals, Parties)
              </option>
              <option value="Other">Other
              </option>
            </select>
          </div>

          <div class="form-row">
            <div class="form-group required col-md-6">
              <label for="inputEmail4">Service Notes</label>
              <input type="text" class="form-control " id="inputEmail4">
              <small class="form-text text-muted">
                (Ex: AA Meeting, Follow-up Medical appointment, etc.)
              </small>
            </div>

          </div>



          <div class="form-group required">
            <label for="inputLocation">Location of Services</label>
            <input type="text" class="form-control" id="inputLocation">
          </div>


          <div class="form-row">
            <div class="form-group  col-md-6">
              <label for="inputEmail4">Street Address</label>
              <input type="text" class="form-control " id="inputEmail4">
            </div>
            <div class="form-group  col-md-6">
              <label for="inputEmail4">Adress Line 2</label>
              <input type="text" class="form-control " id="inputEmail4">
            </div>

          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State/Province/Region</label>
              <select id="inputState" class="form-control-lg ">

                <option value="" selected="selected">Select a State</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip/Postal Code</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>


          <div class="form-row">
            <div class="form-group required col-md-6">
              <label for="selectQuantity">Quantity of Deaf Participants</label>
              <select id="selectQuantity" class="form-control">

                <option value="1" selected="selected">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="Over 5+">Over 5+</option>
              </select>
              <small class="form-text text-muted">
                If number of Deaf participants exceeds 5, please contact us for your specific interpreting needs.Please
                enter a number greater than or equal to <b>1</b>.
              </small>
            </div>
            <div class="form-group  col-md-6">
              <label for="inputEmail4">Name(s) of Deaf or Hard of Hearing Participants</label>

              <input type="text" class="form-control " id="inputEmail4">
              <small class="form-text text-muted">
                Person(s) needing the interpreter
              </small>
            </div>

          </div>

          <div class="form-row">
            <div class="form-group required col-md-6">
              <label for="inputEmail4">Gender Preference</label>

              <select id="inputState" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="No Preference">No Preference</option>
              </select>
              <small class="form-text text-muted">
                (Ex: Women of OBGYN appointments prefer female interpreters.)
              </small>

            </div>
            <div class="form-group required col-md-6">
              <label for="inputEmail4">Communication Mode</label>

              <select id="inputState" class="form-control">
                <option value="American Sign Language (ASL)">American Sign Language (ASL)</option>
                <option value="Transliteration (more English syntax)">Transliteration (more English syntax)</option>
                <option value="Rochester Method">Rochester Method</option>
                <option value="Oral Transliteration">Oral Transliteration</option>
                <option value="Tactile (Deaf/Blind Interpreting)">Tactile (Deaf/Blind Interpreting)</option>
                <option value="Other">Other</option>
              </select>
              <small class="form-text text-muted">
                Sign Language's various modes of expression (if you're unsure, select ASL and we'll handle it from
                there!)
              </small>

            </div>

          </div>


          <h4 style="color:#116F65;font-weight: bold; border-bottom: 1px solid #ccc;margin:10px 0px ;padding:10px 0">
            Additional
            Information</h4>

          <div class="form-group required">
            <label for="inputDate">Speak to Us</label>

            <small class="form-text text-muted">
              Any additional information about this request you think our interpreters may find useful (description of
              the request)?
            </small>
            <textarea class="form-control" rows="5" cols="50"></textarea>
          </div>

          <button type="submit" class="btn btn-primary mb-3" style="background-color:#116F65">Submit</button>
        </form>
      </div>
    </div>







@endsection




@push('scripts')

@endpush