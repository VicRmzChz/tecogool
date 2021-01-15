@extends('pages.board')
<link href="{{ asset('../css/quinelaStyle.css') }}" rel="stylesheet" />
@section('content')


<div class="wrapper">

  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h1 id="title" class="text-center">Web Dev Wannabe</h1>
        <p id="description" class="text-center">freecodecamp survery form test</p>
        <div class="form-wrapper">
          <!-- Form -->
          <form id="survey-form">
            <!-- Input fields -->
            <div class="form-group">
              <label id="name-label" for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name.." name="name" required>
            </div>
            <div class="form-group">
              <label id="email-label" for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your Email.." name="email"
                required>
            </div>
            <div class="form-group">
              <label id="number-label" for="number">Age</label>
              <input type="number" class="form-control" id="number" placeholder="Age" name="age" min="1" max="99">
            </div>

            <!-- Dropdown -->
            <div class="form-group">
              <label id="dropdown" for="dropdown">Programming language you like</label>
              <select class="form-control" id="dropdown">
                <option disable="" selected="">Select language</option>
                <option>JavaScript</option>
                <option>Python</option>
                <option>C#</option>
              </select>
            </div>

            <!-- Radio buttons -->
            <div class="form-group">
              <p>Rank</p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rank" id="rank1" value="novice" checked>
                <label class="form-check-label" for="rank1">
                  novice/beginner
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rank" id="rank2" value="intermediate">
                <label class="form-check-label" for="rank2">
                  intermediate
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rank" id="rank3" value="senior">
                <label class="form-check-label" for="rank3">
                  senior
                </label>
              </div>
            </div>

            <!-- Checkbox -->
            <div class="form-group">
              <p>What would you like:</p>
              <div class="form-check">
                <input class="form-check-input" name="prefer" type="checkbox" value="front-end" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Front-end
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="prefer" type="checkbox" value="back-end" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                  Back-end
                </label>
              </div>
            </div>

            <!-- Textareal -->
            <div class="form-group">
              <label for="comments">Comments</label>
              <textarea id="comments" class="form-control" placeholder="Enter your comment here..." rows="3"></textarea>
            </div>

            <!-- Button -->
            <button id="submit" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
          </form>
          <!-- Form end -->
        </div>
      </div>
    </div>

    @endsection