

<div id="id03a" class="modal">
   

    <span onclick="document.getElementById('id03a').style.display='none'" class="close" title="Close Modal">&times;</span>    
    <form  method="POST" action="{{ route('subscriber.store')}}" >
        {{-- {{csrf_field()}} --}}
            {{-- <h1>Should you have any questions, please do not hesitate to contact us :</h1> --}}
            
        <div class="container form_input">
            <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>
    
    
            <div class="leftcontact">
                      <div class="form-group">
                        <p>Name of Company <span>*</span></p>
                        <span class="icon-case"><i class="fa fa-info"></i></span>
                            <input class="form_input" type="maxlength" name="company_name" id="company_name" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                    <div class="validation"></div>
           </div> 
    
                <div class="form-group">
                <p>Business's Specialization <span>*</span></p>	
                <span class="icon-case"><i class="fa fa-star"></i></span>
                    <input class="form_input" type="maxlength" name="company_special" id="company_special" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' est obligatoire."/>
                    <div class="validation"></div>
                </div>
    
                <div class="form-group">
                <p>Country <span>*</span></p>
                <span class="icon-case"><i class="fa fa-globe"></i></span>
                    <input class="form_input" type="maxlength" name="country" id="country" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                    <div class="validation"></div>
                </div>
    
                <div class="form-group">
                <p>Company Address <span>*</span></p>
                <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                    <input class="form_input" type="maxlength" name="address" id="address" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
                    <div class="validation"></div>
                </div>
    
                <div class="form-group">
                <p>Postcode <span>*</span></p>
                <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                    <input class="form_input" type="maxlength" name="postcode" id="postcode" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
                    <div class="validation"></div>
                </div>	
    
                
                
        </div>
    
        <div class="rightcontact">	
    
                
                <div class="form-group">
                <p>Company's E-mail <span>*</span></p>	
                <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                    <input class="form_input" type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
                    <div class="validation"></div>
                </div>	
    
                <div class="form-group">
                <p>Contact number <span>*</span></p>	
                <span class="icon-case"><i class="fa fa-phone"></i></span>
                    <input class="form_input" type="maxlength" name="contact" id="contact" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                    <div class="validation"></div>
                </div>
                
                <div class="form-group">
                <p>Message <span>*</span></p>
                <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                    <textarea name="message" id="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                    <div class="validation"></div>
                </div>	
        </div>

        
        </div>
        
    
        <div class="clearfix">
                <button type="button" onclick="document.getElementById('id03a').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Send</button>
              </div>
    {{-- <button type="submit" onclick="document.getElementById('id03').style.display='none'" style="border-radius: 100px;" action="ratecard" class="bouton-contact2">Cancel</button>
        
    <button type="submit" style="border-radius: 100px;" class="bouton-contact">Send</button> --}}
    
    </form>	
    </div>