      <section id="contact" class="section container scrollspy">
        <div class="row">
          <div class="col s12">
            <h2 class="dark-green">Contact us</h2>
            <div class="col s6 offset-s2 m2 offset-m1 underline"></div>
          </div>
        </div>
        <div class="row center">
          <form class="col s12 l10 offset-l1" action="#contact" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="John Doe" id="name" name="name" type="text" class="validate">
                <label for="name">Your name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">business</i>
                <input placeholder="My company" id="company" name="company" type="text" class="validate">
                <label for="company">Your company</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input placeholder="john.doe@mail.com" id="email" name="email" type="email" class="validate">
                <label for="email">Your email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">subject</i>
                <input placeholder="Subject of your message" id="subject" name="subject" type="text" class="validate">
                <label for="subject">How can we help ?</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <textarea placeholder="Tell us more..." id="message" type="text" name="message" class="materialize-textarea"></textarea>
                <label for="message">Your message</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 l4 offset-l4 center-align">
                <button class="btn waves-effect waves-light pulse" type="submit" name="submit">Send message
                  <i class="material-icons right">send</i>
                </button>
              </div>
              <div class="feedback col s10 offset-s1 center-align">
                <?php echo $feedback; ?>
              </div>
            </div>
          </form>
        </div>
      </section><!--SECTION CONTACT-->