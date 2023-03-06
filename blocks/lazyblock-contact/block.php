<section id="contact" class="contact">
    <div class="container">
        <h2 class="section-title"><span>kontakt</span></h2>
            <div class="contact__box">
                <div class="contact__info">
                    <h3 class="contact__info-title">chcesz o coś zapytać?</h3>
                    <p class="contact__info-text">napisz do nas!</p>
                    <p class="contact__info-text">skorzystaj z poniższych opcji lub wyślij zapytanie za pomocą formularza kontaktowego.</p>
                    <a href="mailto:rezerwacje.opole@gmail.com" class="contact__info-link">
                    <i class='bx bx-envelope'></i>
                        rezerwacje.opole@gmail.com
                    </a>
                    <a href="tel:+48 505 005 001" class="contact__info-link">
                    <i class='bx bx-phone' ></i>
                        +48 505 005 001
                    </a>
                </div>
                <form method="POST" action="https://script.google.com/macros/s/AKfycbzEQs4iFKtNWGkb-Zkx2Nh8cUJKeFdItbc0VnupsAy8o3_xnHJM0KRpdcIKhFJvvReD/exec" target="_blank" class="contact__form gform" data-email="rezerwacje.opole@gmail.com" >
                    <div class="contact__form-row">
                        <div class="contact__form-field">
                            <label for="Name" class="contact__label">Imię</label>
                            <input type="text" id="Name" Name="Name" class="contact__input" required>
                        </div>
                        <div class="contact__form-field">
                            <label for="Email" class="contact__label">E-mail</label>
                            <input type="Email" name="Email" id="Email" class="contact__input" required>
                        </div>
                    </div>
                    <div class="contact__form-row">
                        <div class="contact__form-field">
                            <label for="Mobile" class="contact__label">Telefon</label>
                            <input type="tel" name="Mobile" id="Mobile" class="contact__input" required>
                        </div>
                        <div class="contact__form-field">
                            <label for="Subject" class="contact__label">Temat</label>
                            <input type="Subject" name="Subject" id="Subject" class="contact__input" required>
                        </div>
                    </div>
                   <div class="contact__form-field contact__form-field-textarea">
                        <label for="Message" name="Message" id="Message" class="contact__label">Wiadomość</label>
                        <textarea name="Message" id="Message" cols="30" rows="10" class="contact__textarea" required></textarea>
                        <button type="submit" id="submitBtn" class="contact__btn" onClick="popupMail()">wyślij</button>
                   </div>
                </form>
            </div>
    </div>
</section>