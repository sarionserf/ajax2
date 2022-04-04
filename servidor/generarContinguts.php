<?php
// Frases de contingut de les que se selecciona aleatòriamente una de ellas
$frases = array("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
                "Integer augue. Maecenas vel arcu.",
                "Nunc ipsum enim, pretium vel, blandit quis, rutrum sit amet, mauris.",
                "Proin at lectus mattis elit facilisis aliquam.",
                "Sed accumsan, neque in luctus egestas, ipsum enim hendrerit massa, at venenatis felis purus sed velit.",
                "Mauris sit amet magna ut leo ullamcorper semper.",
                "Vivamus venenatis consequat massa.",
                "Praesent erat justo, varius eu, porta at, sollicitudin in, nibh.",
                "Aenean ligula ante, vehicula sit amet, vestibulum eu, mattis non, mauris.",
                "Ut suscipit fermentum eros. Nullam ut mauris vel eros placerat cursus.",
                "Praesent non lectus. Nam condimentum nisi nec felis.",
                "Sed tincidunt ullamcorper pede.",
                "Curabitur facilisis, quam sed egestas tincidunt, justo nisl tempor odio, non auctor metus sapien sed risus.",
                "Fusce risus lectus, consequat at, molestie sit amet, auctor tristique, massa.",
                "Mauris vitae nisi. Aliquam tempus.",
                "Etiam eu neque sit amet nibh tempus lacinia.",
                "Nunc rutrum lorem eu erat. Proin ac felis. Fusce commodo leo.",
                "Aenean porta, sapien in eleifend euismod, mauris augue hendrerit orci, et rhoncus lacus nisi elementum elit.",
                "Morbi feugiat elit vitae mi hendrerit, ut interdum felis posuere.",
                "Aenean tempus faucibus dui.",
                "Donec eros urna, ultrices id fermentum non, bibendum vitae nisl.",
                "Maecenas tellus leo, hendrerit sit amet interdum nec, imperdiet ac est.",
                "Morbi bibendum suscipit lacus vitae varius.",
                "Sed vitae eros felis.",
                "Nunc ultrices tortor quis metus ultrices rutrum.",
                "Suspendisse a scelerisque felis.",
                "Sed mollis hendrerit tincidunt.",
                "Fusce scelerisque tincidunt leo, nec fermentum mi pulvinar fermentum.",
                "Nullam ultrices rhoncus diam, in elementum mi tincidunt et.",
                "Integer sit amet ligula sodales, molestie mi vel, dignissim tortor.",
                "Mauris interdum augue nisi, nec luctus purus dapibus vitae.",
                "Praesent ornare consequat mattis.");

// Generar un número aleatori entre 0 y el número total de frases disponibles
srand(  intval((double)microtime()*1000000, 10));
$numeroAleatori = rand(0, count($frases)-1);

// La resposta d'aquest script consisteix en una frase seleccionada aleatòriamente
echo $frases[$numeroAleatori];
?>
