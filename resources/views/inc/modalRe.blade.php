

<div id="id03" class="modal">
   

    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>    
    <form  method="POST" action="{{ route('reseller.store')}}" >
        {{csrf_field()}}
            {{-- <h1>Should you have any questions, please do not hesitate to contact us :</h1> --}}
            
        <div class="container form_input">
            <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>
    
    
            <div class="leftcontact">
                      <div class="form-group">
                        <p>Name <span>*</span></p>
                        <span class="icon-case"><i class="fa fa-info"></i></span>
                            <input class="form_input" type="maxlength" name="name" id="name" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                    <div class="validation"></div>
           </div> 
    
                <div class="form-group">
                <p>Age (years in 2018) <span>*</span></p>	
                <span class="icon-case"><i class="fa fa-star"></i></span>
                    <input style="width: 20%;" class="form_input" type="maxlength" name="age" id="age" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' est obligatoire."/>
                    <div class="validation"></div>
                </div>
    
                <div class="form-group">
                <p>Nationality <span>*</span></p>
                <span class="icon-case"><i class="fa fa-globe"></i></span>
                    <input class="form_input" type="maxlength" name="nationality" id="nationality" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                    <div class="validation"></div>
                </div>
    
                <div class="form-group">
                <p>Contact details <span>*</span></p>
                <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                    <input class="form_input" type="maxlength" name="contact" id="contact" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
                    <div class="validation"></div>
                </div>
    
                <div class="form-group">
                <p>Email <span>*</span></p>
                <span class="icon-case"><i class="fa fa-envelope"></i></span>
                    <input class="form_input" type="maxlength" name="email" id="email" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
                    <div class="validation"></div>
                </div>	
    
                <div class="form-group">
                    <p>Address <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                        <input class="form_input" type="maxlength" name="address" id="address" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
                        <div class="validation"></div>
                    </div>	
                
                
        </div>
    
        <div class="rightcontact">	
    
                
                <div class="form-group">
                <p>Company's name <span>*</span></p>	
                <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                    <input class="form_input" type="maxlength" name="company_name" id="company_name" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
                    <div class="validation"></div>
                </div>	
    
                <div class="form-group">
                <p>Company's contact <span>*</span></p>	
                <span class="icon-case"><i class="fa fa-phone"></i></span>
                    <input class="form_input" type="maxlength" name="company_contact" id="company_contact" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                    <div class="validation"></div>
                </div>
                
                <div class="form-group">
                <p>Company's address <span>*</span></p>
                <span class="icon-case"><i class="fa fa-address-book"></i></span>
                    <input name="company_address" id="company_address" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné.">
                    <div class="validation"></div>
                </div>	

                <div class="form-group">
                <p>Company's experience (years) <span>*</span></p>
                <span class="icon-case"><i class="fa fa-at"></i></span>
                    <input style="width:20%;" name="company_experience" id="company_experience" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné.">
                    <div class="validation"></div>
                </div>	

                <div class="form-group">
                <p>Reason to join us <span>*</span></p>
                <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                    <textarea style="height: 100px" name="message" id="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                    <div class="validation"></div>
                </div>	

                <div class="form-group">
                <p>Affiliated brand <span>*</span></p>
                <span class="icon-case"><i class="fa fa-asterisk"></i></span>
                    <input  name="brand1" id="brand1" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."><br>
                <span class="icon-case"><i class="fa fa-asterisk"></i></span>
                    <input  name="brand2" id="brand2" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."><br>
                <span class="icon-case"><i class="fa fa-asterisk"></i></span>
                    <input  name="brand3" id="brand3" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné.">
                    
                    <div class="validation"></div>
                </div>	

                {{-- <div class="form-group" >
                <p>When you can join us? <span>*</span></p>
                    <input style="width:80px;" class="checkmark" type="radio" name="why_join" value="immediately"> Immediately<br>
                    <input style="width:80px;" class="checkmark" type="radio" name="why_join" value="two_weeks"> 2 Weeks from now<br>
                    <input style="width:80px;" class="checkmark" type="radio" name="why_join" value="month"> A month from now<br>
                    <input style="width:80px;" class="checkmark" type="radio" name="why_join" value="other"> other: <input name="other" id="other" data-rule:"required" style="padding-left:2px; width:40px;"><br>                    
                    <div class="validation"></div>
                </div> --}}
                
                <div class="clearfix">
                    <button style="width: 30%;" type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
                    <button style="width: 30%;" type="submit" class="signupbtn">Send</button>
                  </div>
        </div>

        
        </div>
        
    
       
    {{-- <button type="submit" onclick="document.getElementById('id03').style.display='none'" style="border-radius: 100px;" action="ratecard" class="bouton-contact2">Cancel</button>
        
    <button type="submit" style="border-radius: 100px;" class="bouton-contact">Send</button> --}}
    
    </form>	
    </div>