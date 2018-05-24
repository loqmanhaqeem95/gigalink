<div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content form-horizontal"  method="POST" action="{{ route('register') }}">
        
            {{csrf_field()}}

          <div class="container">
            <h1 style="font-size: 2.0rem">Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
             
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name"><b>Name</b></label>

                <div>
                    <input class="form-control" value="{{ old('name')}}" type="text" placeholder="Enter Name" name="name" id="name" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong> {{ $errors->first('name')}} </strong>
                        </span>
                    @endif
                </div>
            </div>
        
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email"><b>Email</b></label>

                <div>
                    <input class="form-control" value="{{ old('email')}}" type="email" placeholder="Enter Email" name="email" id="email" required>

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

            <div class="form-group">
                <label for="password_confirmation"><b>Confirm Password</b></label>

                <div>
                    <input class="form-control" type="password" placeholder="Confirm Password" id="password-confirm" name="password_confirmation" required>
                </div>
            </div>

            <div>
                <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
            </div>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <button type="submit" class="signupbtn">Sign Up</button>
            </div>
          </div>
        </form>
     </div>