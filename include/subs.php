<script type="text/javascript">
function download(d) {
        if (d == 'Select document') return;
        window.location = 'http://educacionprohibida.com/datos/pelicula/completa/subtitulos/subtitulos.php?v=' + d;
}
</script>
<select name="download" onChange="download(this.value)">
  <option><?php echo _('Elige un idioma');?></option>
  <option disabled>──────────</option>
  <option title="Portugués" value="pt_BR"><?php echo _('Portugés');?> / Português</option>
  <option title="Español" value="es_ES"><?php echo _('Español');?> / Español</option>
  <option title="Inglés" value="en_EN"><?php echo _('Inglés');?> / English</option>
  <option title="Catalán" value="ca_CA"><?php echo _('Catalán');?> / Catalá</option>
  <option title="Francés" value="fr_FR"><?php echo _('Francés');?> / Français</option>
  <option title="Italiano" value="it_IT">Italiano</option>
  <option title="Alemán" value="de_DE"><?php echo _('Alemán');?> / Deutsch</option>
  <option title="Alemán" value="hy_HY"><?php echo _('Armenio');?> / հայերեն</option>
  <option title="Serbio" value="sr_SR"><?php echo _('Serbio');?> / српски</option>
  <option title="Húngaro" value="hu_HU"><?php echo _('Hungaro');?> / magyar</option>
  <option title="Rumano" value="ro_RO"><?php echo _('Rumano');?> / român</option>
  <option title="Hebreo" value="he_HE"><?php echo _('Hebreo');?> / עברית</option>
  <option title="Búlgaro" value="bg_BG"><?php echo _('Búlgaro');?> / български</option>
</select>
