<?php
class PatientView {
    public function render($animals) {
        echo '
            <h1>Учет пациентов</h1>
            <form action="registerPatient" method="POST">
                <label for="species">Вид животного:</label><br>
                <select id="species" name="species">';
                
        foreach ($animals as $animal) {
            echo '<option value="' . $animal['id'] . '">' . $animal['animal_type'] . '</option>';
        }
    
        echo '</select><br>
            <label for="name">Кличка:</label><br>
            <input type="text" id="name" name="name"><br>
    
            <label for="age">Возраст:</label><br>
            <input type="text" id="age" name="age"><br>
    
            <label for="diagnosis">Диагноз:</label><br>
            <textarea id="diagnosis" name="diagnosis" rows="4" cols="50"></textarea><br>
    
            <label for="prescriptions">Назначения:</label><br>
            <textarea id="prescriptions" name="prescriptions" rows="4" cols="50"></textarea><br>
    
            <label for="results">Результаты анализов:</label><br>
            <textarea id="results" name="results" rows="4" cols="50"></textarea><br>
    
            <input type="submit" value="Добавить пациента">
        </form>
        ';
    }
    
}