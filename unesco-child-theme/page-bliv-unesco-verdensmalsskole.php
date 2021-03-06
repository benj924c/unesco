<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

 <section id="skole_first_section">
        <h1>Bliv UNESCO verdensmålsskole</h1>
        <div class="section_wrapper">
          <div class="col1">
            <p>
              Ansøgningen om at blive en af Verdensmålsskolerne består af 2
              dele: besvarelse af nedenstående spørgsmål samt efter et gensidigt
              prøveår udfyldelse af det formelle ansøgningsskema til UNESCO.
            </p>
          </div>
          <div class="col2">
            <img src="https://vinterfjell.dk/kea/09_cms/unesco/wp-content/uploads/2022/04/element5-digital-352043-scaled.jpg" alt="bilde1" />
          </div>
        </div>
      </section>

      <section id="skole_second_section">
        <div class="section_wrapper">
          <h2>Ansøgning om deltagelse i ASP-netværk i Danmark:</h2>
          <p>
            -Giv en kort introduktion til skolen og jeres lokalområde. <br />
            <br />
            -Forklar, hvorfor jeres skole ønsker at blive en Verdensmålsskole.
            <br />
            <br />
            -Hvordan ser I sammenhængen mellem ASP og skolens værdier,
            målsætning, øvrige udviklingsaktiviteter og internationalt arbejde?
            <br />
            <br />
            -Hvilke konkrete mål og idéer har I til de kommende års arbejde som
            Verdensmålsskole? <br />
            <br />
            -Hvordan forestiller I jer at organisere arbejdet med ASP på skolen?
            Hvilke fag, lærere, elever/klasser tænkes aktivt at indgå i
            projektarbejdet?
          </p>
        </div>
      </section>

      <section id="skole_third_section">
        <div class="section_wrapper">
          <h3>
            Udvælgelsen af skoler til deltagelse i ASP-netværket i Danmark vil
            tage udgangspunkt i følgende kriterier:
          </h3>
          <p>
            -Deltagelse i og opbakning til ASP-arbejdet fra skolens ledelse,
            pædagogisk råd, elever og forældre. <br />
            <br />

            -ASP indgår i skolens værdigrundlag, målsætning og
            faglig-pædagogiske udviklingsaktiviteter. <br />
            <br />
            -Omfang og karakter af de konkrete idéer og planer til fremtidige
            ASP aktiviteter. <br />
            <br />
            -Idéer til synliggørelse af ASP og UNESCO lokalt og nationalt samt
            mulige bidrag til netværkets fælles arbejde. <br />
            <br />
            Den færdige ansøgning underskrives af skolens leder og sendes til
            national koordinator Poul Erik Christoffersen på PEC@ungdomsbyen.dk
            Når ansøgningen er imødekommet af ASP-netværkets styregruppe,
            aftales et møde mellem skolen og den nationale koordinator for
            netværket med henblik på gensidig orientering og fælles forståelse.
          </p>
        </div>
      </section>

      <section id="formular">
        <div class="section_wrapper">
          <div class="col1">
            <form>
              <h2>Bliv UNESCO Verdensmålsskole</h2>
              <p>Udfyld formularen herunder, og start ansøgningen</p>
              <!--  <form> -->
              <label></label>
              <input
                type="text"
                id="fname"
                name="navn"
                placeholder="NAVN PÅ SKOLE"
              />
              <label></label>
              <input type="text" id="name" name="adresse" placeholder="EMAIL" />

              <label for="lname"></label>
              <input
                type="email"
                id="lname"
                name="email"
                placeholder="BESKED"
              />
            </form>
          </div>
        </div>
      </section>
      <div class="knapp2">
        <button class="button">Send</button>
      </div>

<?php
get_footer();