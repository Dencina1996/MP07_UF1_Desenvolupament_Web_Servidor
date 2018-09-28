CODI BASE: <br><br>

<?php
$i = 12;
$tipus_de_i = gettype( $i );
echo "La variable \$i 
      conté el valor $i 
      i és del tipus $tipus_de_i";
?>

<br><br>
# 1. ✓. <br>
# 2. Fa referència al valor de la variable. <br>
# 3. La barra invertida "\$i" es posa davant per a que no agafi el valor de la variable, sino que segueixi amb el text. <br>
# 4. La variable $i es de tipus enter (INTEGER). <br>
# 5. La funció GETTYPE agafa el tipus de la variable declarada. <br>
# 6. ✓. <br>
# 7. ✓. <br><br>

CODI EXERCICIS 6 I 7: <br><br>

<?php
$i = 12;
$f = 4.45;
$b = True;
$s = "Hola";

$tipus_de_i = gettype( $i );
$tipus_de_f = gettype( $f );
$tipus_de_b = gettype( $b );
$tipus_de_s = gettype( $s );

echo "La variable \$i 
      conté el valor $i 
      i és del tipus $tipus_de_i.
      <br>
      La variable \$f 
      conté el valor $f 
      i és del tipus $tipus_de_f.
      <br>
      La variable \$b
      conté el valor $b
      i és del tipus $tipus_de_b.
      <br>
      La variable \$s
      conté el valor $s
      i és del tipus $tipus_de_s."

?>