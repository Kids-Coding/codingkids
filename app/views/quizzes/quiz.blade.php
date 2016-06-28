

<div class="container quizcontain">

    <div class="row">

        <!-- instructions -->
        <div class="col-sm-5 col-sm-offset-1"> 
            <p>
                "Click" on the space next to the answer(s).<br>
                When you have completed all the questions "click" submit.
            </p>
        </div> <!-- end col -->

    </div> <!-- end row -->

    <div class="row">

        <!-- image -->
        <div class="kid col-sm-1 col-sm-offset-1">
                <img src="/img/quiz-kid.png">
        </div> <!-- end col -->

        <!-- quiz form -->
        <div class="col-sm-3 col-sm-offset-1">
          <form>            
            <div class="form-group">
          
              <label>1. What does HTML stand for?</label>
              <div class="radio">
                <label>
                  <input type="radio" name="q1" id="q1a1" value="1">
                  Hypertext Markup Language
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="q1" id="q1a2" value="option2">
                  Supertext Magic Language
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="q1" id="q1a3" value="option3">
                  Herotext Mayo Language
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="q1" id="q1a4" value="option3">
                  Hairytext Markdown Language
                </label>
              </div>
            </div>

            <br>
            <div class="form-group">

              <label>2. What version of the HTML Standard do we use in our lesson?</label>
              <div class="radio">
                <label>
                  <input type="radio" name="q2" id="q2a1" value="option1">
                  Version 2
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="q2" id="q2a2" value="option2">
                  Version 4
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="q2" id="q2a3" value="1">
                  Version 5
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="q2" id="q2a4" value="option3">
                  Version 6
                </label>
              </div>

            </div>

            <br>
            <div class="form-group">

              <label>3. What does HTML stand for?</label>
              <div class="radio">
                <label>
                  <input type="radio" name="q3" id="q3a1" value="1">
                  Hypertext Markup Language
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="q3" id="q3a2" value="option2">
                  Supertext Magic Language
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="q3" id="q3a3" value="option3">
                  Herotext Mayo Language
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="q3" id="q3a4" value="option3">
                  Hairytext Markdown Language
                </label>
              </div>

            </div>

            <br><br>

            <!-- submit -->

          </form>
            <button id="submitBtn"> submit </button>
 
        </div> <!-- end col -->

    </div> <!-- end row -->
    
</div> <!--end container -->


<script>

//   $('input').on('click', function(){

//       if($("input:checked").val() == 1){
//         $( "input:checked" ).parent().css('color', 'green');
//       }

//   }) 
$('#submitBtn').on('click', function(){
  $('#quiz').toggle();
  $.ajax({
    url: "/completeLesson/" + {{ $lesson->id }},
  })
  .done(function( msg ) {
    location.reload();
  });
});
 </script>
                    