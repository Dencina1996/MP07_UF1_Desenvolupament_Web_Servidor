CODI BASE: <br><br>

<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d 
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d";
?>

<br><br>
# 1. ✓. <br>
# 2. La variable $d es de tipus Object. <br>
# 3. El punt "." concatena. <br>
# 4. Retorna la data d'avui. <br>
# 5. No retornarà res perque no s'especifica el format de sortida de la data. <br>
# 6. La variable $d és de la classe DateTime.

<br><br>

CODI EX. 6: <br><br>

<?php
$d = new DateTime();
$classe_de_d = get_class( $d );
$tipus_de_d = gettype( $d );
echo "La variable \$d 
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d. La variable \$d es de classe: $classe_de_d";
?>

