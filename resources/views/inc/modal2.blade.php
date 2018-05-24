<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content form-horizontal"  method="POST" action="{{ route('login') }}">
    
        {{csrf_field()}}

      <div class="container">
        <h1 style="font-size: 2.0rem">Login</h1>
        <p>Please fill in your email and password to login.</p>
        <hr>
    
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email"><b>Email</b></label>

            <div>
                <input class="form-control" value="{{ old('email')}}" type="email" placeholder="Enter Email" name="email" id="email" required autofocus>

                @if ($errors->has('email')) 
                    <span class="help-block">
                        <strong> {{ $errors->first('email')}} </strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password"><b>Password</b></label>

            <div>
                <input class="form-control" id="password" type="password" placeholder="Enter Password" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong> {{ $errors->first('password')}} </strong>                            
                    </span>
                @endif
            </div>
        </div>

        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="submit" style="background-color:#0a7406;" class="signupbtn">Log In</button>
        </div>
      </div>
    </form>
 </div>