<?php
function create() {
    $x1 = $_GET[Ereigniszeitpunkt];
    $x2 = $_GET[Text];
    $x3 = date();
    $x4 = date();
    $sql = "INSERT INTO Termin (Ereigniszeitpunkt, Textnachricht, Erstellungsdatum, Aktualisierungsdatum)
VALUES ('$x1', '$x2', '$x3', '$x4')";
    mysqli_query($sql);    
}

function read() {
    $x1 = $_GET[Ereigniszeitpunkt];
    $sql = "SELECT * FROM Termin WHERE EREIGNISZEITPUNKT= '$x1' ");
    mysqli_query($sql);
}

function update() {
    $x1 = $_GET[Ereigniszeitpunkt];
    $x2 = $_GET[Text];
    $x3 = $_GET[OldZeitpunkt]
    $x4 = date();
    $sql = "SELECT id FROM Termin WHERE Ereigniszeitpunkt = '$x1' ";
    $id = mysqli_query($sql);
    $sql = "UPDATE Termin SET Textnachricht='$x2', Ereigniszeitpunkt ='$x1', Aktualisierungsdatum = '$x4' WHERE id ='$id'";
mysqli_query($sql);    
}

function delete() {
    $x1 = $_GET[Ereigniszeitpunkt];
    $sql = "DELETE FROM Termin WHERE Ereigniszeitpunkt ='$x1' ";
    mysqli_query($sql);
}

