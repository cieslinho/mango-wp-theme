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
                <form action="" class="contact__form">
                    <div class="contact__form-row">
                        <div class="contact__form-field">
                            <label for="name" class="contact__label">Imię</label>
                            <input type="text" id="name" name="name" class="contact__input" required>
                        </div>
                        <div class="contact__form-field">
                            <label for="email" class="contact__label">E-mail</label>
                            <input type="email" name="email" id="email" class="contact__input" required>
                        </div>
                    </div>
                    <div class="contact__form-row">
                        <div class="contact__form-field">
                            <label for="mobile" class="contact__label">Telefon</label>
                            <input type="tel" name="mobile" id="mobile" class="contact__input" required>
                        </div>
                        <div class="contact__form-field">
                            <label for="subject" class="contact__label">Temat</label>
                            <input type="subject" name="subject" id="subject" class="contact__input" required>
                        </div>
                    </div>
                   <div class="contact__form-field contact__form-field-textarea">
                        <label for="msg" name="msg" id="msg" class="contact__label">Wiadomość</label>
                        <textarea name="msg" id="msg" cols="30" rows="10" class="contact__textarea" required></textarea>
                        <button type="submit" class="contact__btn">wyślij</button>
                   </div>
                </form>
            </div>
    </div>
</section>