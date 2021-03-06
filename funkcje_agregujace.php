<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Filip Jabłoński</h1>
<nav>
    <br>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-FilipJablonski">Github</a>
    <br>
    <br>
    <div class="nav">
         <a href="index.php">Strona Główna</a>  
         <a href="pracownicy.php">Pracownicy</a>
         <a href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>   
         <a href="funkcje_agregujace.php">Funkcje Agregujace</a>  
         <a href="data_czas.php">Data i Czas</a>
         <a href="nieobecnosci.php">Nieobecności Pracowników</a>
         <a href="strona.php">Strona</a>
         <a href="daneDoBazy.php">Dane Do Bazy</a>
    </div>
    <br>
</nav>
    
<?php

require_once("connect.php");
echo("<h2>Funkcje Agregujace</h2>");
    
    $sql ="select Sum(zarobki) from pracownicy"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    $sql ="select Sum(zarobki) from pracownicy where imie like '%a'"; 
echo("<h3>Zadanie 2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Zarobkow Kobiet</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    $sql ="select Sum(zarobki) from pracownicy where imie not like '%a' and (dzial=2 or dzial=3)"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
       echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Zarobkow Mezczyzn z Dzialow 2 i 3</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
       
    $sql ="select Avg(zarobki) from pracownicy where imie not like '%a'"; 
echo("<h3>Zadanie 4</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Zarobkow Mezczyzn</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
     
    $sql ="select Avg(zarobki) from pracownicy where dzial=4"; 
echo("<h3>Zadanie 5</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Zarobkow z Dzialu 4</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    $sql ="select Avg(zarobki) from pracownicy where imie not like '%a' and (dzial=1 or dzial=2)"; 
echo("<h3>Zadanie 6</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Zarobkow Mezczyzn z Dzialu 1 i 2</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    $sql ="select Count(imie) from pracownicy"; 
echo("<h3>Zadanie 7</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Ilosc Pracownikow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Count(imie)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    $sql ="select Count(imie) from pracownicy where imie like '%a' and (dzial=1 or dzial=3)"; 
echo("<h3>Zadanie 8</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Ilosc Kobiet z Dzialu 1 i 3</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Count(imie)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
    
echo("<h2>Group by</h2>");
    
    $sql ="select nazwa_dzial, Sum(zarobki) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
       echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql ="select nazwa_dzial, Count(imie) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial"; 
echo("<h3>Zadanie 2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
       echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Ilosc Pracownikow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Count(imie)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
              
    $sql ="select nazwa_dzial, Avg(zarobki) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Srednia Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
              
    $sql ="select if(imie like '%a', 'kobiety', 'mezczyzni') as 'plec', Sum(zarobki) from pracownicy,organizacja where dzial=id_org group by plec"; 
echo("<h3>Zadanie 4</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Plec</th><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['plec']."</td><td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                   
    $sql ="select if(imie like '%a', 'kobiety', 'mezczyzni') as 'plec', Avg(zarobki) from pracownicy,organizacja where dzial=id_org group by plec"; 
echo("<h3>Zadanie 5</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Plec</th><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['plec']."</td><td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
echo("<h2>Klauzula HAVING</h2>");
    
    $sql ="select nazwa_dzial, Sum(zarobki) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial having Sum(zarobki)<28"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Suma Zarobkow < 28</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
        
    $sql ="select nazwa_dzial, Avg(zarobki) from pracownicy,organizacja where dzial=id_org and imie not like '%a' group by nazwa_dzial having Avg(zarobki)>30"; 
echo("<h3>Zadanie 2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Srednia Zarobkow Mezczyzn > 30</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
            
    $sql ="select nazwa_dzial, Count(imie) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial having Count(imie)>3"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
       echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Ilosc Pracownikow > 3</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Count(imie)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
    
?>
</body>
</html>
