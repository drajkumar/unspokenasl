@extends('frontend.master') 

@section('title','Application')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
    integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
    crossorigin="anonymous" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
    integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA=="
    crossorigin="anonymous" />
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

  .form-group.required>label::after {
    content: "*";
    margin-left: 5px;
    color: red;
  }

  .upload-drop-zone {
    color: #ccc;
    border-style: dashed;
    border-color: #ccc;
    line-height: 200px;
    text-align: center;
    font-weight: 500;
    margin-top: 10px
  }

  .custom-file-upload input[type="file"] {
    display: none;
  }

  .custom-file-upload {
    border: 1px solid #ccc;
    display: inline;
    padding: 6px 12px;
    cursor: pointer;
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
            <h1 class="breadcrumbs-custom-title">Application</h1>
          </div>
          <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/join-us') }}">Join Our Team</a></li>
            <li class="active">Application</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Interpreter Promise -->
    <section class="section container">
      <h3 class="mb-2" style="color:#116F65;font-weight:bold;margin:10px 0 0 0;padding: 10px 0;">Become an
        Unspoken Interpreter
      </h3>
    </section>

    <section class="section  text-center pb-0">
      <div class="container">
        <h3 class="wow-outer"><span class="wow slideInDown">Thank you for your interest in joining our <br>
            Independent Contractor interpreting team!</span></h3>
      </div>
    </section>

    <section class="section section-lg ">
      <div class="container">
        <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
          <div class="col-md-10 col-lg-6 col-xl-5">
            <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">{!! $pagemodules->description !!}</span></p>

          </div>
          <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight"
              src="{{asset('')}}images/pagemodule/{{$pagemodules->image}}"
              alt="" width="570" height="368" />
          </div>
        </div>
      </div>
    </section>

    <!-- Request Form Here  -->
    <div class="section">
      <div class="container ">


        <h3>Freelance Application</h3>
        <h5 class="mb-2"
          style="color:#116F65;font-weight:bold;border-bottom: 1px solid #ccc;margin:10px 0;padding: 10px 0;">Background
          Information
        </h5>

        <div class="form-row mt-3">
          <div class="form-group required col-md-6">
            <label for="name">First Name</label>
            <input type="text" class="form-control " id="name">
          </div>
          <div class="form-group required col-md-6">
            <label for="inputEmail4">Last Name</label>
            <input type="text" class="form-control " id="inputEmail4">
          </div>

        </div>

        <div class="form-row mt-3">
          <div class="form-group required col-md-6">
            <label for="name">Email</label>
            <input type="email" class="form-control " id="email">
          </div>
          <div class="form-group required col-md-6">
            <label for="inputEmail4">Confirm Email</label>
            <input type="email" class="form-control " id="inputEmail4">
          </div>

        </div>

        <div class="form-row">
          <div class="form-group required col-md-6">
            <label for="inputPhone">Phone</label>
            <input type="text" class="form-control " id="inputPhone" placeholder="(111) 111-1111">
          </div>
          <div class="form-group required col-md-6">
            <label for="inputEdu">Highest Level of Education</label>
            <select id="inputEdu" class="form-control">
              <option value="High School">High School</option>
              <option value="Associates">Associates</option>
              <option value="Bachelors">Bachelors</option>
              <option value="Masters">Masters</option>
              <option value="PhD">PhD</option>
            </select>
          </div>

        </div>


        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="selectCertificate">Certifications</label>
            <select id="selectCertificate" multiple class="form-control" name="selectCertificate[]">
              <option value="RID Certified/NIC">RID Certified/NIC</option>
              <option value="RID-Associate (Pre-certified)">RID-Associate (Pre-certified)</option>
              <option value="NAD">NAD</option>
              <option value="EIPA/ESSE">EIPA/ESSE</option>
              <option value="CCHI/NHCI (Medical)">CCHI/NHCI (Medical)</option>
              <option value="CDI">CDI</option>
              <option value="CI/CT">CI/CT</option>
              <option value="State Certification (Indicate which state in notes)">State Certification (Indicate which
                state in notes)</option>
            </select>
            <small class="form-text text-muted">
              Select one or more of the following certifications earned
            </small>
          </div>
          <div class="form-group required col-md-6">
            <label for="selectCertificate">Years of Interpreting Experience</label>
            <select id="selectCertificate" class="form-control">
              <option value="1-3 years">1-3 years</option>
              <option value="3-6 years">3-6 years</option>
              <option value="6-10 years">6-10 years</option>
              <option value="10-15 years">10-15 years</option>
              <option value="15-20 years">15-20 years</option>
              <option value="20+ years">20+ years</option>
            </select>

          </div>
        </div>


        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="selectComfortable">In which interpreting situations do you feel most competent & comfortable?</label>
            <select id="selectComfortable" multiple class="form-control" name="selectComfortable[]">
              <option value="Medical">Medical</option>
              <option value="Mental Health">Mental Health</option>
              <option value="Platform">Platform</option>
              <option value="Religious">Religious</option>
              <option value="Educational (K-12 or Post Secondary)">Educational (K-12 or Post Secondary)</option>
              <option value="Legal">Legal</option>
              <option value="Videotaped">Videotaped</option>
			  <option value="Other">Other</option>
            </select>

          </div>
          <div class="form-group col-md-6">
            <label for="selectBestTime">Best time(s) of day to contact you (including weekends)?</label>
            <select id="selectBestTime" class="form-control">
              <option value="Mornings (8am-11am)">Mornings (8am-11am)</option>
              <option value="Afternoons (Noon-4pm)">Afternoons (Noon-4pm)</option>
              <option value="Evenings (After 5pm)">Evenings (After 5pm)</option>
            </select>

          </div>
        </div>



        <div class="form-row">
          <div class="form-group  col-md-6">
            <label for="inputEmail4">Address</label>
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



        <h5 style="color:#116F65;font-weight: bold; border-bottom: 1px solid #ccc;margin:10px 0px ;padding:10px 0">
          Additional
          Information</h5>

        <div class="form-group required">
          <label for="">Speak to Us</label>

          <small class="form-text text-muted">
            Briefly share why you chose Unspoken to partner. A few sentences should do the job!
          </small>
          <textarea class="form-control" rows="5" cols="50"></textarea>
        </div>


        <div class="form-group required">
          <label for="inputDate">Document Verification</label>

          <small class="form-text text-muted">
            Please upload your resume, a copy of your certification(s)/ RID card, and any liability insurance.
          </small>
          <div class="upload-drop-zone" id="drop-zone">
            Just drag and drop files here
            or
            <label class="custom-file-upload">
              <input type="file" name="document[]" />
              <i class="fa fa-cloud-upload"></i> Select Files
            </label>
          </div>
        </div>


        <div class="form-group required">
          <label for="inputDate">Copy of Driver's License</label>

          <small class="form-text text-muted">
            Some of our clients request proof of interpreters credentials, along with a picture ID.
          </small>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" style="font-weight: normal;" for="customFile">Choose file</label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mb-3" style="background-color:#116F65">Submit</button>
        </form>
      </div>
    </div>







@endsection




@push('scripts')

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/jquery-input-mask-phone-number@1.0.15/dist/jquery-input-mask-phone-number.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
      integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
      crossorigin="anonymous"></script>
  <script>
    $(function () {
      $('#inputDate').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD/YYYY hh:mm A'
        }
      });

      $('#inputPhone').usPhoneFormat({
        format: '(xxx) xxx-xxxx',
      });

      $('#selectCertificate').select2({
        placeholder: "Select Certifications",
        multiple: true
      });
      $('#selectComfortable').select2({
        placeholder: "Select Interpreting Situation",
        multiple: true
      });
      $('#inputState').select2({
        theme: "bootstrap"
      });
    });
  </script>
@endpush