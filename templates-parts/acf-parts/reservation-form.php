<?php
$on = get_field('wyswietl_sekcje_form');
$title = get_field('opis_form');
$form = get_field('form');
?>
<?php if($on) { ?>
<section id="rez-form">
    <div class="container-fluid">
        <div class="row">
            <?php if($title) { ?>
            <div class="col col-1 text-center">
                <h2><?php echo $title; ?></h2>
            </div>
            <?php } ?>
            <div class="col col-1">
                <?php echo do_shortcode( '[contact-form-7 id="44" title="Rezerwacja"]' ); ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- <div class="row rezerwacja">
<div class="form-group">
    <label> <span class="red">Imię i nazwisko</span>
    [text* your-name class:form-control placeholder "jan kowalski"] </label>
</div>
<div class="form-group">
    <label> <span class="red">Adres email</span>
    [email* your-email class:form-control placeholder "twojadresmeial@email.com"] </label>
</div>
<div class="form-group">
    <label> <span class="red">Wybierz model</span>
   [select* bike class:form-control ] </label>
</div>

<div class="form-group">
    <label> <span class="red">Od</span>
  [date* date-od min:2022-08-23 class:form-control placeholder] </label>
</div>
<div class="form-group">
    <label> <span class="red">Do</span>
    [date* date-do min:2022-08-23 class:form-control placeholder]</label>
</div>
</div> -->